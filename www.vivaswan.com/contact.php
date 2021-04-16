<?php 
$to = "priyanshu2.nagde@gmail.com"; // this is your Email address
$from = $_POST['email']; // this is the sender's Email address
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$subject = $_POST['subject'];
$subject2 = "Copy of your form submission";
$message = $name . " " . $mobile . " wrote the following:" . "\n\n" . $_POST['message'];

$headers = "From:" . $from;
$headers2 = "From:" . $to;
mail($to,$subject,$message,$headers);
echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
?>