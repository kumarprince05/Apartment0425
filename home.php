<?php
$page_title = 'Home Page';
include ('menu.php');
include ('common_functions.php');
echo '<link rel="stylesheet" href="styles.css" type="text/css">';
?>
<html>
<body>
  <style>
    body
    {
      background-image : url(image/aprtee.jfif);
		background-repeat:no-repeat;
		background-size: cover;
    }
    </style>
<br>
<div class="container">
<div class="row">
  <div class="large-12 columns" >
    <p style="background-image: url('apar.jpg')"> 
      You have successfully logged into the system! Now you can start using the application to manage the database for the apartment management
      you can view the list of apartments, facilities for each apartment, manage bookings and guest directory through this application. When done with using the application please <a href="index.php">logout</a> of the application.
    </p>
    <p>
      Use the options in top menu to navigate.
    </p>
  </div>
</div>
</div>
</body>
</html>