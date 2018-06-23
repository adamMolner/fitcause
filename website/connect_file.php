

<?php
$con = mysqli_connect("fitcause2.cpcfmqnkdmg0.us-east-1.rds.amazonaws.com","fitCause","HackAthon2018","fitcause", "3306");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }



/*

to use this connect statement in another file, 

simply write:

include 'connect_file.php';

in the file in which you wish to include it in


*/



?>



