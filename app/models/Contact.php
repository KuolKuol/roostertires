<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class ContactModel extends Model{
	
    public function contact(){

        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        // create error message
        $error = '';

        if (isset($_POST['submit'])) {

            // VARIABLES
            $name = $_POST["name"];
            $email = $_POST["email"];
            $subject = $_POST["subject"];
            $message = $_POST["message"];

            $message = "
            Name: $name <br>
            Email: $email  <br>
            Subject: $subject  <br>
            Message: $message  <br>
            ";

            try {
                // SERVER SETTINGS
                // Enable verbose debug output
                $mail->SMTPDebug = 0;
                // Set mailer to use SMTP                                       
                $mail->isSMTP();
                // Specify main and backup SMTP servers                                         
                $mail->Host = '';
                // Enable SMTP authentication                       
                $mail->SMTPAuth = true;
                // SMTP username                                  
                $mail->Username = '';
                // SMTP password                     
                $mail->Password = '';
                // Enable TLS encryption, `ssl` also accepted (ssl or tls)                               
                $mail->SMTPSecure = 'ssl';
                // TCP port to connect to (SSL = 465 | TLS = 587)                                  
                $mail->Port = 465;                                     

                //RECIPIENTS
                // Senders information 
                $mail->setFrom($email,$name);
                // Recipients Information
                $mail->addAddress('', '');   
                // Reply to information
                $mail->addReplyTo($email, $name);
                // Add blind carbon copy 
                $mail->addBCC('');
                $mail->addBCC('');

                // CONTENT
                // Set email format to HTML
                $mail->isHTML(true);                                  
                $mail->Subject = $subject;
                $mail->Body    = $message;

                if($mail->send()){
                    $msg = 'Thank you for your email. We will get back to you shortly!';
                }

            } catch (Exception $e) {
                $msg = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }

        }

    }

}