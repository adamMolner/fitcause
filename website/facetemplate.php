<?php

require 'inc/header.php';

include 'connect_file.php';

$id = $_GET["id"];
$result = mysqli_query($con,"SELECT * FROM face WHERE id='$id'");



while($row = mysqli_fetch_array($result))
  {
  echo'<div class = "container">';

  echo '<div>';
  echo $row['name'];
  echo '</div>';
  echo '<img src="'.$row['imageLink'].'">';
  
  echo '<p>' .$row['description']. '</p>';
  
  
  
  echo '</div>';
}

?>


