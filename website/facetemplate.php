<?php
require 'inc/header.php';
require 'connect_file.php';

// DB Info
// id, name, imageLink, description

$id = $_GET["id"];
$result = mysqli_query($con,"SELECT * FROM face WHERE id='$id'");

while($row = mysqli_fetch_array($result)) {
?>

<div class="container">
	<div class="row">
		<h1><?php echo $row['name'];?></h1>
		<img src="<?php echo $row['imageLink'];?>" alt="<?php echo $row['description']?>">
		<p><?php echo $row['description'];?></p>
	</div> <!-- End of row -->
</div> <!-- End of container -->
<?php } 
?>


