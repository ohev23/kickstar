<?php
	$con = mysqli_connect("127.0.0.1", "root", "", "kickstar");
	mysqli_query($con, "DELETE FROM donates WHERE id='{$_GET['id']}' ");
	$query = mysqli_query($con, "SELECT * FROM kickstar");
	header('Location: acc.php')
 ?>