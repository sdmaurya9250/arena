<?php include 'config.php'; ?>
<?php
  
  try {
  // File Route.
  $fileRoute = "/uploads/";
  
  $fieldname = "file";
  
  // Get filename.
  $filename = explode(".", $_FILES[$fieldname]["name"]);
  
  // Validate uploaded files.
  // Do not use $_FILES["file"]["type"] as it can be easily forged.
  $finfo = finfo_open(FILEINFO_MIME_TYPE);
  
  // Get temp file name.
  $tmpName = $_FILES[$fieldname]["tmp_name"];
  
  // Get mime type. You must include fileinfo PHP extension.
  $mimeType = finfo_file($finfo, $tmpName);
  
  // Get extension.
  $extension = end($filename);
  
  // Allowed extensions.
  $allowedExts = array("mp4", "webm", "ogg");
  
  // Allowed mime types.
  $allowedMimeTypes = array("video/mp4", "video/webm", "video/ogg");
  
  // Validate file.
  if (!in_array(strtolower($mimeType), $allowedMimeTypes) || !in_array(strtolower($extension), $allowedExts)) {
  throw new \Exception("File does not meet the validation.");
  }
  
  // Generate new random name.
  $name = sha1(microtime()) . "." . $extension;
  $fullNamePath = dirname(__FILE__) . $fileRoute . $name;
  
  // Check server protocol and load resources accordingly.
  if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] != "off") {
  $protocol = "https://";
  } else {
  $protocol = "http://";
  }
  
  // Save file in the uploads folder.
  move_uploaded_file($tmpName, $fullNamePath);
  
  // Generate response.
  $response = new \StdClass;
  $response->link = $protocol.$_SERVER["HTTP_HOST"].dirname($_SERVER["PHP_SELF"]).$fileRoute . $name;
  
  // Send response.
  echo stripslashes(json_encode($response));
  
  } catch (Exception $e) {
  // Send error response.
  echo $e->getMessage();
  http_response_code(404);
  }
  ?>
<!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>
    
    <div class="sample">
    <h2>Video upload example.</h2>
    <form>
    <textarea id="edit" name="content"></textarea>
    </form>
    </div>
    
    
    <script>
    new FroalaEditor('#edit', {
    
    videoUploadURL: '/UploadFiles',
    
    videoUploadParams: {
    id: 'my_editor'
    }
    })
    </script>
    </body>
    </html>