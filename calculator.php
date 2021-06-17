<?php
/*
Plugin Name: Mortgage Calculator
Plugin URI: http://www.CarlSetzer.com to your plugin homepage
Description: This plugin add footer to WordPress pages.
Version: 1.0
Author: Carl Setzer
Author URI: http://www.CarlSetzer.com to your website
License: GPL2
License URI: https://www.CarlSetzer.com to your plugin license
Copyright Carl Setzer (email : carl@carlsetzer.com)
(AddFooter) is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
(AddFooter) is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
*/
/*Use this function to create a contact me page for WordPress pages*/
?>
<html>
  <head>
    <title>Mortgage Calculator</title>
  </head>
  <body>
    <h1>Northsound Real Estate's Mortgage Estimation</h1>
    <h3>This is to give you a basic idea of what you can afford. You still must talk to a mortgage professional to truly know. </h3>
    <p>Please fill out the information below:</p>
    <form action="calccomputation.php" method="post">
    <p><strong>Home Value:</strong><br/>
    <input type="number" name="principle" size="40" /></p>
    <p><strong>Interest Rate:</strong><br/>
    <input type="integer" name="interest" size="40" /></p>
    <p><strong>Total Number of Payments (a 30 year loan is 360 payments):</strong><br/>
      <input type="number" name="payments" size="40" /></p>     
    <p><input type="submit" value="Send Info" /></p>  
    </form>
  </body>
</html>
