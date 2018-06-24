<?php

require 'inc/header.php';

include 'connect_file.php';


$result = mysqli_query($con,"SELECT * FROM face WHERE id=1");



while($row = mysqli_fetch_array($result))
  {

  echo $row['name'];
echo '<img src="'.$row['imageLink'].'">';
echo '<p>' .$row['description']. '</p>';
}






?>


