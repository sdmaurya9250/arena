<?php 

include_once('class.phpmailer.php');



include("mail.php");



if(isset($_POST['send_contactus'])){

 

    $to = "yogaprakash57@gmail.com";

    $name = $_POST['name'];

    $mobile = $_POST['mobile'];

    $email = $_POST['email'];

    $message = $_POST['message']; 
    
    $var ='<div class="container">

    <h2>OCR Table Format</h2>
    
    <table style="border: 1px solid; border-collapse: collapse; width:80%;">
      <tr style="background: #efefef;">
        <th style="border: 1px solid;"><b>OCR No</b></th>
        <td style="border: 1px solid; text-align: center;">'.$a[9].'</td>
        
      </tr>
      <tr>
        <th style="border: 1px solid;">Name of the Tele Caller</th>
        <td style="border: 1px solid; text-align: center;">'.$a[18].'</td>
        
      </tr>
      <tr style="background: #efefef;">
        <th style="border: 1px solid;">Name of the Marketing Executive</th>
        <td style="border: 1px solid; text-align: center;">'.$a[19].'</td>
        
      </tr>
      <tr >
        <th style="border: 1px solid;">Name of the Company</th>
        <td style="border: 1px solid; text-align: center;">'.$a[1].'</td>
        
      </tr>
      <tr style="background: #efefef;">
        <th style="border: 1px solid;">Address of the Company</th>
        <td style="border: 1px solid; text-align: center;">'.$a[4].'</td>
        
      </tr>
      <tr>
        <th style="border: 1px solid;">If any Branches</th>
        <td style="border: 1px solid; text-align: center;">'.$a[5].'</td>
        
      </tr>
      <tr style="background: #efefef;">
        <th style="border: 1px solid;">Land mark</th>
        <td style="border: 1px solid; text-align: center;">'.$a[14].'</td>
        
      </tr>
    
      <tr>
        <th style="border: 1px solid;">Scope</th>
        <td style="border: 1px solid; text-align: center;">'.$a[15].'</td>
        
      </tr>
    
      <tr style="background: #efefef;">
        <th style="border: 1px solid;">Contact Person</th>
        <td style="border: 1px solid; text-align: center;">'.$a[2].','.$a[3].'</td>
        
      </tr>
    
      <tr>
        <th style="border: 1px solid;">Contact No</th>
        <td style="border: 1px solid; text-align: center;">'.$a[6].','.$a[7].','.$a[8].'</td>
        
      </tr>
    
      <tr style="background: #efefef;">
        <th style="border: 1px solid;">Email Id</th>
        <td style="border: 1px solid; text-align: center;">'.$a[11].','.$a[12].'</td>
        
      </tr>
    
      <tr>
        <th style="border: 1px solid;">Website</th>
        <td style="border: 1px solid; text-align: center;">'.$a[16].'</td>
        
      </tr>
    
      <tr style="background: #efefef;">
        <th style="border: 1px solid;">GST No</th>
        <td style="border: 1px solid; text-align: center;">'.$a[13].'</td>
        
      </tr>
    
      <tr>
        <th style="border: 1px solid;">Standard</th>
        <td style="border: 1px solid; text-align: center;">'.$a[10].'</td>
        
      </tr>
    
      <tr style="background: #efefef;">
        <th style="border: 1px solid;">No. Of Employees</th>
        <td style="border: 1px solid; text-align: center;">'.$a[17].'</td>
        
      </tr>
    
      <tr>
        <th style="border: 1px solid;">CA/RCA</th>
        <td style="border: 1px solid; text-align: center;">'.$a[22].'</td>
        
      </tr>
    
      <tr style="background: #efefef;">
        <th style="border: 1px solid;">Date of Signing</th>
        <td style="border: 1px solid; text-align: center;">'.$a[23].'</td>
        
      </tr>
    
      <tr>
        <th style="border: 1px solid;">Order Value</th>
        <td style="border: 1px solid; text-align: center;">'.$a[27].'</td>
        
      </tr>
    
      <tr style="background: #efefef;">
        <th style="border: 1px solid;">Previous Value for RCA</th>
        <td style="border: 1px solid; text-align: center;">'.$a[21].'</td>
        
      </tr>
    
      <tr>
        <th style="border: 1px solid;">Advance Rs.</th>
        <td style="border: 1px solid; text-align: center;">'.$a[20].'</td>
        
      </tr>
    
      <tr style="background: #efefef;">
        <th style="border: 1px solid;">Reference from(Tele/Phone/Justdial/Agent/Reference)</th>
        <td style="border: 1px solid; text-align: center;">'.$a[21].'</td>
        
      </tr>
    
      <tr>
        <th style="border: 1px solid;">Work start @</th>
        <td style="border: 1px solid; text-align: center;">'.$a[24].'</td>
        
      </tr>
    
      <tr style="background: #efefef;">
        <th style="border: 1px solid;">Price Proposal No</th>
        <td style="border: 1px solid; text-align: center;">'.$a[25].'</td>
        
      </tr>
      
    </table>
    <?php } ?>
    
    </div>';
      

    $messages =  $var;

    $subject ="BMQR: Contact Us";

    $mail = new PHPMailer();

    $mail->IsSMTP();

    $mail->Host = $Host;

    $mail->SMTPAuth = $SMTPAuth;

    $mail->SMTPSecure = $SMTPSecure;

    $mail->Port = $Port;

    $mail->Username = $Username;

    $mail->Password = $Password;

    $mail->From = $From;

    $mail->FromName = $FromName;

    $mail->AddAddress($to);

    $mail->IsHTML(true);

    $mail->Subject = $subject;

    $mail->Body = $messages;

    if(!$mail->Send())

    {

     echo "<script>alert('Failed! Please Try Later')</script>";

   

    }

    else{

     echo "<script>alert('Message Sent Successfully.')</script>";

    }

} ?>

   <!-- Breadcrumb Section Begin -->

    <section class="breadcrumb-section set-bg" data-setbg="img/CONTACT-US.png">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 text-center">

                    <div class="breadcrumb__text">

                        <h2>&nbsp;</h2>

                        <div class="breadcrumb__option">

                            <!-- <a href="<?= $base_url ?>">Home</a> -->

                            <span>&nbsp;</span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Breadcrumb Section End -->



    <!-- Contact Section Begin -->

   

    <!-- Contact Section End -->

    <div class="container-fluid">

        <div class="row">

            <!-- Map Begin -->

           

            <!-- Map End -->

           



            <!-- Contact Form Begin -->

            <div class="contact-form spad col-lg-6" style="padding-top: 0px;">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12">

                            <div class="contact__form__title">

                                <h2>Leave Message</h2>

                            </div>

                        </div>

                    </div>

                    <form method="post" action="">

                        <div class="row">

                            <div class="col-lg-6 col-md-6">

                                <input type="text" name="name" required="" placeholder="Your name">

                            </div>

                            <div class="col-lg-6 col-md-6">

                                <input type="number" name="mobile" required="" placeholder="Your Mobile">

                            </div>

                            <div class="col-lg-6 col-md-6">

                                <input type="text" name="email" required="" placeholder="Your Email">

                            </div>

                            <div class="col-lg-12 text-center">

                                <textarea placeholder="Your message" name="message"></textarea>

                                <button type="submit" style="background: #ffcb06!important;" name="send_contactus" class="site-btn">SEND MESSAGE</button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

            <!-- Contact Form End -->

        </div>

    </div>



 <script type="text/javascript">

    if(window.history.replaceState){

     window.history.replaceState(null,null,window.location.href);

   }

 </script>

</body>



</html>

