
<?php
$name = $_POST["name"];
$email = $_POST["email"];
$subject=$_POST["subject"];
$phone=$_POST["phone"];
$message=$_POST["message"];

$to = "kmichaeltb@gmail.com";
$headers = "From: ".$name."\n"."Phone number: ".$phone."\n"."Email: ".$email."\n"."Contact Form Submission"."\n".$_POST["message"];;

mail($to, $subject, $message, $headers);
echo "Thank you for contacting us. We will get back to you soon.";
?>
