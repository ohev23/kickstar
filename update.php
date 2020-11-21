<?php
	$con = mysqli_connect("127.0.0.1", "root", "", "kickstar");
	$q = mysqli_query($con, "SELECT * FROM donates WHERE id='{$_GET['id']}'");
	mysqli_query($con, "UPDATE donates SET donated=donated+10 WHERE id='{$_GET['id']}'");
	header('Location: index.php')
 ?>