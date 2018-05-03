<?php
    require "connect.php" ;
     use PHPMailer\PHPMailer\PHPMailer;
     use PHPMailer\PHPMailer\Exception;  
     require 'vendor/phpmailer/phpmailer/src/Exception.php';
    require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require 'vendor/phpmailer/phpmailer/src/SMTP.php';
    //SMTP needs accurate times, and the PHP time zone MUST be set
    //This should be done in your php.ini, but this is how to do it if you don't have access to that
    date_default_timezone_set('Asia/bangkok');
          
     $username = $_GET["id"];
	 if (isset($_POST['btn_reg'])) 
    {
            $newpassword = $_POST['newpassword'];
            $point = 0 ; 
            $stmt = $conn->prepare("UPDATE users SET password='$newpassword' WHERE userName = '$username' ");
                                            
            $stmt->execute();
            //Load Composer's autoloader
            require 'vendor/autoload.php';
            
            
            $mail = new PHPMailer;                              // Passing `true` enables exceptions
            try {
                //Server settings
                $mail->SMTPDebug = 2;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp-mail.outlook.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'parinyajai002@hotmail.com';                 // SMTP username
                $mail->Password = 'parinya123456';                           // SMTP password
                $mail->SMTPSecure = 'TLS';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to
            
                $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => true,
                        'verify_peer_name' => true,
                        'allow_self_signed' => true
                    )
                ); 
                //Recipients
                $mail->setFrom('parinyajai002@hotmail.com', 'Mailer');
                
              $sql = "SELECT userEmail from users where userName = '$username' ";
              $email = $conn->query($sql);
              $email = $email->fetch();
              $mail->addAddress ($email["userEmail"]);     // Add a recipient
              
              
                //Content                                 
                $mail->Subject = 'Your Password has Change';
                $mail->msgHTML("GG");
                $mail->AltBody = 'password';
              
            
                $mail->send();
                echo 'Message has been sent';
                header("Location:index.php?showmodal=1");
            } catch (Exception $e) {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }
            
            
    }

?>