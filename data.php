<?php $name = $_POST[‘name’];

$email_address = $_POST[’email’];

$phone_number = $_POST[’phone’];

$conact_pref = $_POST[’contact-pref’];

$business_size = $_POST[’business-size’];

$interest = $_POST[’interested-in’];

$message = $_POST[‘further-details’];

$formcontent="From: $name \n 
Email: $email_address  \n
Phone Number = $phone_number \n
Contact Preference $conact_pref \n
Business size = $business_size \n
Interested in  = $interest \n
Message: $message";
$recipient = "aceexspence1990@gmail.com";
$subject = "Survey Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank you for your feedback!";
?>

