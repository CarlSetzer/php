<?php

//create short variable names
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$feedback=$_POST['feedback'];

//set up some static information
$toaddress = "carl@carlsetzer.com";

$subject = "Contact Request From Web Site";

$mailcontent = "Customer name: ".filter_var($name)."\n".
               "Customer email: ".$email."\n".
               "Customer phone: ".$phone."\n".
               "Customer comments:\n".$feedback."\n";

$fromaddress = "From: webserver@example.com";

// Using the ini_set()
//ini_set("smtp_port", "25");

//invoke mail() function to send mail
mail('carl@carlsetzer.com',$toaddress, $subject, $mailcontent, $fromaddress);
ini_set("SMTP", "mail.gmail.com");
ini_set("sendmail_from", "carl@carlsetzer.com");

?>
<!DOCTYPE html>
<html>
  <head>
    <title>North Sound Real Estate Agent Contact Request Submitted</title>
  </head>
  <body>

    <h1>Contact Request Submitted</h1>
    <p>One of our agents will contact you momentarily.</p>
  <?php  echo "<h2>Your contact information:</h2>";
        echo "Your Name Is: ". $name."<br />";
        echo "Your Email Is: ". $email. "<br />";
        echo "Your Phone Is: ". $phone. "<br />";
        echo "Your Feedback Is: ". $feedback. "<br />";


?>
  </body>
</html>
