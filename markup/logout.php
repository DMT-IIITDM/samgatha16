<?php
  session_start();
  echo "You have successfully logged out ".$_SESSION["uname"];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Logout</title>
  </head>
  <body>
    <br>Thank you for visiting Samgatha.org. Have fun <br>
    <a href="erf.php">ERF</a>
  </body>
</html>

<?php
  session_unset();
  session_destroy();
 ?>
