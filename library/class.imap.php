<?php

/*
 * This class can be used to retrieve messages from an IMAP, POP3 and NNTP server
 * @author Kiril Kirkov
 * GitHub: https://github.com/kirilkirkov
 * Usage example:
  1. $imap = new Imap();
  2. $connection_result = $imap->connect('{imap.gmail.com:993/imap/ssl}INBOX', 'user@gmail.com', 'secret_password');
  if ($connection_result !== true) {
  echo $connection_result; //Error message!
  exit;
  }
  3. $messages = $imap->getMessages('text'); //Array of messages
 * in $attachments_dir property set directory for attachments
 * in the __destructor set errors log
 */

class Imap {

    private $imapStream;
    private $plaintextMessage;
    private $htmlMessage;
    private $emails;
    private $errors = array();
    private $attachments = array();
    private $attachments_dir = 'attachments/';
    
    
    private $limit=10;
    

    public function connect($hostname, $username, $password) {
        $connection = imap_open($hostname, $username, $password); 
         if($connection) {       
        $this->imapStream = $connection;
        return true;
         }
         else
         {
             return 'Cannot connect to Mail: ' . imap_last_error();
         }
         
    }

    public function getMessages($type = 'text',$email_table_count,$email_uid) {
        $stream = $this->imapStream;
        $emails = imap_search($stream, 'ALL');
        // check the database whether Email table is empty or not. $email_table value coming from mail.php page
        
        if($email_table_count == 0){
            $this->limit = count($emails);
            $status = 1;
        }else{
           $this->limit=02; 
           $status = 0;
        }
        //end 
        
        $messages = array();
        if ($emails) {
            $this->emails = $emails;
            $i = 0;
            foreach ($emails as $email_number) {
                if($email_number > $email_uid){ 
                  $this->attachments = array();
                $uid = imap_uid($stream, $email_number);
                $messages[] = $this->loadMessage($uid, $type,$status);
                if ($i == $this->limit) {
                    break;
                }
                $i++;  
                }
            }
        }
        return $messages;
    }

    private function loadMessage($uid, $type,$status) {
        $overview = $this->getOverview($uid);

        $array = array();
        $array['subject'] = isset($overview->subject) ? $this->decode($overview->subject) : '';
        $array['date'] = strtotime($overview->date);
        $array['message_id'] = $overview->message_id;
        $array['uid'] = $overview->uid;
        $array['references'] = isset($overview->references) ? $overview->references : 0;
        $array['read_status'] = $status;
        $headers = $this->getHeaders($uid);
        $array['from'] = isset($headers->from) ? $this->processAddressObject($headers->from) : array('');
        $structure = $this->getStructure($uid);
        if (!isset($structure->parts)) { // not multipart
            $this->processStructure($uid, $structure);
        } else { // multipart
            foreach ($structure->parts as $id => $part) {
                $this->processStructure($uid, $part, $id + 1);
            }
        }
        $array['message'] = $type == 'text' ? $this->plaintextMessage : $this->htmlMessage;
        $array['attachments'] = $this->attachments;

        return $array;
    }

    private function processStructure($uid, $structure, $partIdentifier = null) {
        $parameters = $this->getParametersFromStructure($structure);

        if ((isset($parameters['name']) || isset($parameters['filename'])) || (isset($structure->subtype) && strtolower($structure->subtype) == 'rfc822')
        ) {
            if (isset($parameters['filename'])) {
                $this->setFileName($parameters['filename']);
            } elseif (isset($parameters['name'])) {
                $this->setFileName($parameters['name']);
            }
            $this->encoding = $structure->encoding;
            $result_save = $this->saveToDirectory($this->attachments_dir, $uid, $partIdentifier);
            if ($result_save === true) {
                $this->attachments[] = $this->filename;
            }
        } elseif ($structure->type == 0 || $structure->type == 1) {
            $messageBody = isset($partIdentifier) ?
                    imap_fetchbody($this->imapStream, $uid, $partIdentifier, FT_UID | FT_PEEK) : imap_body($this->imapStream, $uid, FT_UID | FT_PEEK);

            $messageBody = $this->decodeMessage($messageBody, $structure->encoding);

            if (!empty($parameters['charset']) && $parameters['charset'] !== 'UTF-8') {
                if (function_exists('mb_convert_encoding')) {
                    if (!in_array($parameters['charset'], mb_list_encodings())) {
                        if ($structure->encoding === 0) {
                            $parameters['charset'] = 'US-ASCII';
                        } else {
                            $parameters['charset'] = 'UTF-8';
                        }
                    }

                    $messageBody = mb_convert_encoding($messageBody, 'UTF-8', $parameters['charset']);
                } else {
                    $messageBody = iconv($parameters['charset'], 'UTF-8//TRANSLIT', $messageBody);
                }
            }

            if (strtolower($structure->subtype) === 'plain' || ($structure->type == 1 && strtolower($structure->subtype) !== 'alternative')) {
                $this->plaintextMessage = '';
                $this->plaintextMessage .= trim(htmlentities($messageBody));
                $this->plaintextMessage = nl2br($this->plaintextMessage);
            } elseif (strtolower($structure->subtype) === 'html') {
                $this->htmlMessage = '';
                $this->htmlMessage .= $messageBody;
            }
        }
        if (isset($structure->parts)) {
            foreach ($structure->parts as $partIndex => $part) {
                $partId = $partIndex + 1;
                if (isset($partIdentifier))
                    $partId = $partIdentifier . '.' . $partId;
                $this->processStructure($uid, $part, $partId);
            }
        }
    }

    private function setFileName($text) {
        $this->filename = $this->decode($text);
    }

    private function saveToDirectory($path, $uid, $partIdentifier) { //save attachments to directory
        $path = rtrim($path, '/') . '/';
        $full_file_place = $path . $this->filename;

        if (file_exists($path . $this->filename)) {
            $this->filename = time() . rand(1, 100) . $this->filename; // :)
        } elseif (!is_dir($path)) {
            $this->errors[] = 'Cant find directory for email attachments! Message ID:' . $uid;
            return false;
        } elseif (!is_writable($path)) {
            $this->errors[] = 'Attachments directory is not writable! Message ID:' . $uid;
            return false;
        }

        if (($filePointer = fopen($path . $this->filename, 'w')) == false) {
            $this->errors[] = 'Cant open file at imap class to save attachment file! Message ID:' . $uid;
            return false;
        }

        switch ($this->encoding) {
            case 3: //base64
                $streamFilter = stream_filter_append($filePointer, 'convert.base64-decode', STREAM_FILTER_WRITE);
                break;

            case 4: //quoted-printable
                $streamFilter = stream_filter_append($filePointer, 'convert.quoted-printable-decode', STREAM_FILTER_WRITE);
                break;

            default:
                $streamFilter = null;
        }

        $result = imap_savebody($this->imapStream, $filePointer, $uid, $partIdentifier ? : 1, FT_UID);
        if ($streamFilter) {
            stream_filter_remove($streamFilter);
        }
        fclose($filePointer);
        return $result;
    }

    private function decodeMessage($data, $encoding) {
        if (!is_numeric($encoding)) {
            $encoding = strtolower($encoding);
        }
         switch ($encoding) {
                  # 7BIT
                  case 0:
                      return $data;
                  # 8BIT
                  case 1:
                      return quoted_printable_decode(imap_8bit($data));
                  # BINARY
                  case 2:
                      return imap_binary($data);
                  # BASE64
                  case 3:
                      return imap_base64($data);
                  # QUOTED-PRINTABLE
                  case 4:
                      return quoted_printable_decode($data);
                  # OTHER
                  case 5:
                      return $data;
                  # UNKNOWN
                  default:
                      return $data;
              }
    }

    private function getParametersFromStructure($structure) {
        $parameters = array();
        if (isset($structure->parameters))
            foreach ($structure->parameters as $parameter)
                $parameters[strtolower($parameter->attribute)] = $parameter->value;

        if (isset($structure->dparameters))
            foreach ($structure->dparameters as $parameter)
                $parameters[strtolower($parameter->attribute)] = $parameter->value;

        return $parameters;
    }

    private function getOverview($uid) {
        $results = imap_fetch_overview($this->imapStream, $uid, FT_UID);
        $messageOverview = array_shift($results);
        if (!isset($messageOverview->date)) {
            $messageOverview->date = null;
        }
        return $messageOverview;
    }

    private function decode($text) {
        if (null === $text) {
            return null;
        }
        $result = '';
        foreach (imap_mime_header_decode($text) as $word) {
            $ch = 'default' === $word->charset ? 'ascii' : $word->charset;
            $result .= iconv($ch, 'utf-8', $word->text);
        }
        return $result;
    }

    private function processAddressObject($addresses) {
        $outputAddresses = array();
        if (is_array($addresses))
            foreach ($addresses as $address) {
                if (property_exists($address, 'mailbox') && $address->mailbox != 'undisclosed-recipients') {
                    $currentAddress = array();
                    $currentAddress['address'] = $address->mailbox . '@' . $address->host;
                    if (isset($address->personal)) {
                        $currentAddress['name'] = $this->decode($address->personal);
                    }
                    $outputAddresses = $currentAddress;
                }
            }
        return $outputAddresses;
    }

    private function getHeaders($uid) {
        $rawHeaders = $this->getRawHeaders($uid);
        $headerObject = imap_rfc822_parse_headers($rawHeaders);
        if (isset($headerObject->date)) {
            $headerObject->udate = strtotime($headerObject->date);
        } else {
            $headerObject->date = null;
            $headerObject->udate = null;
        }
        $this->headers = $headerObject;
        return $this->headers;
    }

    private function getRawHeaders($uid) {
        $rawHeaders = imap_fetchheader($this->imapStream, $uid, FT_UID);
        return $rawHeaders;
    }

    private function getStructure($uid) {
        $structure = imap_fetchstructure($this->imapStream, $uid, FT_UID);
        return $structure;
    }

    public function __destruct() {
        if (!empty($this->errors)) {
            foreach ($this->errors as $error) {
                //SAVE YOUR LOG OF ERRORS
            }
        }
    }

}
