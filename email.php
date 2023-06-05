<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "derickkwamba@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@derickkwamba.co.za" . "\r\n" .
"CC: dezaworst@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}