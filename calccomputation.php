<?php

//define variables
$principle=$_POST['principle'];
$interest=$_POST['interest'];
$payments=$_POST['payments'];

$monthlypayment= ['monthlypayment'];
settype($monthlypayment, 'integer');

$rate = ['rate'];
settype($rate, 'integer');

//compute interest per month
$rate = $interest/12/100;
$monthlypayment = (($rate * $principle)/(1-pow((1+$rate),(-$payments))));


?>
<!DOCTYPE html>
<html>
  <head>
    <title>North Sound Real Estate Agent Mortage Payment Estimation</title>
  </head>
  <body>

    <h1>Below is our estimate of your monthly mortgage payment. </h1>
    <p>Your next step is to talk with a mortgage professional and get pre-approved for a loan.</p>
  <?php  echo "<h2>Your mortgage details:</h2>";
        echo "The Principle Is: $ ".number_format($principle, 2)."<br />";
        echo "The Interest Rate Is: ". $interest. "%<br />";
        echo "The Total Number Of Payments Is: ". $payments. "<br />";
        //echo "Your Estimated Monthly Payment Is: ". (($rate * $principle)/(1-pow((1+$rate),(-$payments))));
        echo "Your Estimated Monthly Payment Is: $" .number_format($monthlypayment, 2);"<br />"

?>
  </body>
</html>
