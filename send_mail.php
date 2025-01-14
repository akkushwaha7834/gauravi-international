<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['submit_button']))
{

	$name = $_POST['your_name'];
	$email = $_POST['email_id'];
    $mobile = $_POST['mobile_number'];
    $customer_query = $_POST['customer_query'];


	//Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {
	    //Server settings
	    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
	    $mail->isSMTP();                                            //Send using SMTP
	    $mail->Host       = 'smtp.google.com';                     //Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
	    $mail->Username   = 'tyuts.in@gmail.com';                     //SMTP username
	    $mail->Password   = 'vgnyufnqcdmfwpsk';                               //SMTP password
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
	    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

	    //Recipients
	    $mail->setFrom('tyuts.in@gmail.com', 'Gauravi');
	    $mail->addAddress('akkushwaha018@gmail.com', 'Gauravi International');     //Add a recipient


	    //Content
	    $mail->isHTML(true);                                  //Set email format to HTML
	    $mail->Subject = 'Contact Us | Gauravi International';
	    $mail->Body    = '

	    	Name: '.$name.'
	    	Email: '.$email.'
	    	Mobile Number: '.$mobile.'
	    	Message: '.$customer_query.'
	    ';

	    $mail->send();
	    echo 'Message has been sent';
	    exit();
	} catch (Exception $e) {
	    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	    exit();
	}
}

else{
	header("Location: index.html");
	exit(0);

}