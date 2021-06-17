<?php

/*
Plugin Name: Contact
Plugin URI: http://www.CarlSetzer.com to your plugin homepage
Description: This plugin add footer to WordPress pages.
Version: 1.0
Author: Carl Setzer
Author URI: http://www.CarlSetzer.com to your website
License: GPL2
License URI: https://www.CarlSetzer.com to your plugin license
Copyright Carl Setzer (email : carl@carlsetzer.com)
(ContactForm) is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
(ContactForm) is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
*/
/*Use this function to create a contact me page for WordPress pages*/

?>
<html>
  <head>
    <title>Northsound Real Estate Contact Request</title>
  </head>
  <body>

    <h1>Northsound Real Estate Contact Request</h1>
    <p>Please fill out the information below:</p>

    <form action="contactrequest.php" method="post">
    <p><strong>Your name:</strong><br/>
    <input type="text" name="name" size="40" /></p>
     
    <p><strong>Your email address:</strong><br/>
    <input type="text" name="email" size="40" /></p>

    <p><strong>Your phone number:</strong><br/>
      <input type="text" name="phone" size="40" /></p>     

    <p><strong>Tell me about your ideal home. What city, community, house style, etc:</strong><br/>
    <textarea name="feedback" rows="8" cols="40">
    </textarea></p>
     
    <p><input type="submit" value="Send Info" /></p>  
    </form>

  </body>
</html>
