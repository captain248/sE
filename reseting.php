<?php
    require_once "connect.php" ;
     use PHPMailer\PHPMailer\PHPMailer;
     use PHPMailer\PHPMailer\Exception;         
     $username = $_GET["id"];
	 if (isset($_POST['btn_reg'])) 
    {
            $newpassword = $_POST['newpassword'];
            $point = 0 ; 
            $stmt = $conn->prepare("UPDATE users SET password='$newpassword' WHERE userName = '$username' ");
                                            
            $stmt->execute();
            //Load Composer's autoloader
            require 'vendor/autoload.php';
            
            
            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
            try {
                //Server settings
                $mail->SMTPDebug = 2;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'parinyaachiraya@gmail.com';                 // SMTP username
                $mail->Password = 'parinya36954';                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to
            
                //Recipients
                $mail->setFrom('from@example.com', 'Mailer');
                
              $sql = "SELECT userEmail from users where userName = '$username' ";
              $email = $conn->query($sql);
              $email = $email->fetch();
    
	
                
              $mail->addAddress ($email["userEmail"]);     // Add a recipient
              
              
                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Your Password has Change';
                $mail->Body    = 'your password has been reset</b>';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            
              $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
              
            
                $mail->send();
                echo 'Message has been sent';
                header("Location:index.php?showmodal=1");
            } catch (Exception $e) {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }
            
            
    }

?>