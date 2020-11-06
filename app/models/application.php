<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class ApplicationModel extends Model{
	
    public function application(){
        
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        // create error message
        $error = '';

        if (isset($_POST['submit'])) {

            // VARIABLES
            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $instagram = $_POST["instagram"];
            $facebook = $_POST["facebook"];
            $twitter = $_POST["twitter"];
            $dob = $_POST['dob'];
            $address = $_POST["address"];
            $phoneNumber = $_POST["phoneNumber"];
            $emailAddress = $_POST["emailAddress"];
            $country = $_POST["country"];
            $spr = $_POST["spr"];
            $city = $_POST["city"];
            $postalCode = $_POST["postalCode"];
            $typeOfRiding = $_POST["typeOfRiding"];
            $class = $_POST["class"];
            $raceNumber = $_POST["raceNumber"];
            $accomplishments = $_POST["accomplishments"];
            $whyUs = $_POST["whyUs"];
            $parent = $_POST["parent"];
            $category = $_POST["category"];
            $jerseySize = $_POST["jerseySize"];
            $series = $_POST["series"];
            $attendRaces = $_POST["attendRaces"];
            $fullName = $firstName. " " . $lastName;
            $subject = "Sponsorship: $firstName, $lastName";
            $message = "
            First Name: $firstName <br>
            Last Name: $lastName  <br>
            Instagram: $instagram  <br>
            Facebook: $facebook  <br>
            Twitter: $twitter  <br>
            Address: $address  <br>
            Phone Number: $phoneNumber  <br>
            Email Address: $emailAddress  <br>
            Country: $country  <br>
            State / Province / Region: $spr <br>
            City: $city  <br>
            Postal Code: $postalCode  <br>
            Type Of Riding: $typeOfRiding  <br>
            Class: $class  <br>
            Category: $category  <br>
            Jersey Size: $jerseySize  <br>
            What Series Do You Race In?: $series  <br>
            How Many Races Do You Attend A Year?: $attendRaces  <br>

            Date of Birth (mm/dd/yyyy): $dob <br>
            If you are under 18 years of age - please provide your Guardian / Parent's Name and contact information: <br> $parent <br>
            What would you like us to know about you?: <br> $accomplishments  <br>
            Why would you like to be sponsored by us?: <br> $whyUs 
            ";

                    
            try {
                // SERVER SETTINGS
                // Enable verbose debug output
                $mail->SMTPDebug = 0;
                // Set mailer to use SMTP                                       
                $mail->isSMTP();
                // Specify main and backup SMTP servers                                         
                $mail->Host = 'mail.roostertires.com';
                // Enable SMTP authentication                       
                $mail->SMTPAuth = true;
                // SMTP username                                  
                $mail->Username = 'support@roostertires.com';
                // SMTP password                     
                $mail->Password = 'shopify123';
                // Enable TLS encryption, `ssl` also accepted (ssl or tls)                               
                $mail->SMTPSecure = 'ssl';
                // TCP port to connect to (SSL = 465 | TLS = 587)                                  
                $mail->Port = 465;                                     

                //RECIPIENTS
                // Senders information 
                $mail->setFrom($emailAddress,$fullName);
                // Recipients Information
                $mail->addAddress('support@roostertires.com', 'Rooster Tires');   
                // Reply to information
                $mail->addReplyTo($emailAddress, $fullName);
                // Add blind carbon copy 
                $mail->addBCC('kuolk19@gmail.com');
                // $mail->addBCC('sales@roostertires.com');

                // ATTATCHMENTS
                if($_FILES['file']['tmp_name']){
                    $mail->AddAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);
                }
                if($_FILES['photo']['tmp_name']){
                    $mail->AddAttachment($_FILES['photo']['tmp_name'], $_FILES['photo']['name']);
                }


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