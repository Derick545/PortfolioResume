<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include 'db.php';
	
	
	require 'src/Exception.php';
	require 'src/PHPMailer.php';
	require 'src/SMTP.php';

if(isset($_POST['send']))
{

	
	
	$mail = new PHPMailer(true);
	
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->Host       = '**************';                     //Set the SMTP server to send through
	$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
	$mail->Username   = '**************';                     //SMTP username
	$mail->Password   = '**************';                               //SMTP password
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
	$mail->Port       = 465; 
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$subject =  $_POST['subject'];
	
	$mail->setFrom($email, $name);
	$mail->addAddress("derickkwamba@gmail.com", "Derick");
	$mail->Subject = $subject;
	$mail->Body = $message;
	$mail->send();
	
	echo "email sent";
}

?>

<!DOCTYPE html>
<html lang="eng">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/style.css"/>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script type="text/javascript" src="/js/navigation.js"></script>
	<title>Contact</title>
</head>
<body>
<section id="contact">
		<nav>
			<!--Logo-->
			<a href="Login.php" class="logo">DK</a>
			<!--menu icon-->
		    <div class="toggle"></div>
			<!--Menu-->
			<ul class="menu">
				<!--Menu items-->
			   <li><a href="index.php" >Home</a></li>
			   <li><a href="about.php">About</a></li>
			   <li><a href="Portfolio.php">Portfolio</a></li>
			   <li><a href="Services.php">Resume</a></li>
			   <li><a href="contact.php" class="active">Contact</a></li>
			</ul>
		</nav>
		<!--Contact Form-->
		<div class="contact_form">
			<div class="contact-heading">
				<h1>Contact Me</h1>
			</div>
		<form method="POST" action="contact.php">      
  		<input name="name" type="text" class="feedback-input" placeholder="Name" required/>   
  		<input name="email" type="text" class="feedback-input" placeholder="Email" required/>
		<input name="subject" type="text" class="feedback-input" placeholder="Subject" required/>
  		<textarea name="message" class="feedback-input" placeholder="Message...." required></textarea>
  		<input type="submit" value="SEND" name="send"/>
		</form>
		</div>
		
		<ul class="socials">
   			<li><a href="https://www.facebook.com/deza.derrick.9/"><i class='bx bxl-facebook-circle'></i></a></li>
			<li><a href="https://www.instagram.com/deza_362/"><i class='bx bxl-instagram'></i></a></li>
			<li><a href=mailto:derickKwamba.com?subject="HTML link"><i class='bx bxl-gmail'></i></a></li>
			<li><a href="https://github.com/Derick545"><i class='bx bxl-github'></i></i></a></li>
			<li><a href="https://www.linkedin.com/in/derick-kwamba-945a15221/"><i class='bx bxl-linkedin'></i></a></li>
		</ul>
	
		
		
</section>
	<!--Jquery-->
	<script type="text/javascript" src="/js/Jquery.js"></script>
	</script>
</body>

</html>
