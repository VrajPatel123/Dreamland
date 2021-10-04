<?php


echo  $_SERVER['REQUEST_METHOD'];

	
include "class.phpmailer.php"; // include the class name


  
  
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465; // or 587

$mail->SMTPSecure = 'ssl'; 
$mail->IsHTML(true);
$mail->Username = "pvraj643@gmail.com";
$mail->Password = "vrajpatel123";
// $mail->SMTPSecure = 'tsl'; 
$mail->SetFrom("pvraj643@gmail.com");
$mail->Subject = "Enquiry";
$mail->Body = "<b>Name:- </b> ";
//$mail->Body = '$email, $name, $phone, $subject, $message';
$mail->AddAddress("pvraj643@gmail.com");
 if($mail->Send()){
	echo "Success";

}else{
	echo "failed";
}
?>