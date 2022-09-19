<?php

/* Subject and Email Variables */

$subject = 'A message sent through contact form | PlaySpace';
$webmaster_email = 'info@playspace.com.ua';

/* Gathering Data Variables */

$guest_name = $_POST['guest_name'];
$guest_email = $_POST['guest_email'];
$guest_message = $_POST['guest_message'];

$headers = "A message sent through contact form | PlaySpace\r\n";
$body .= "Content-type: text/html\r\n"; /* For mail client to recognize code and not display it as plain text in an email received */
$body = <<<EOD
Hello,

My name is $guest_name,
and my email address is $guest_email
I have a message for you, 

$guest_message

EOD;

$success = mail($webmaster_email, $headers, $body, "From:".$guest_email);

/* Results rendered as HTML */

$message_sent = <<<EOD
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>Your message has been sent! | PlaySpace</title>

<link href="../css/style.css" rel="stylesheet" type="text/css">
<link href="../css/responsive.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,900" rel="stylesheet">

</head>
<body style="background: #6D7894; padding-top: 20vh; padding-bottom: 20vh;">

<div class="story-wrapper">

<div class="story-intro" style="background: white;">
  <h2>Thank you!</h2>
  <p>Your message has been sent.</p>
  <br>
  <a class="go-back" style="color:white; font-size:1rem; height:auto;" href="../index.html">Home &#9654;</a> 

</div>
</div>

</body>
</html>
EOD;
echo "$message_sent";
 
?>