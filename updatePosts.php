<?php
	$con = mysqli_connect("127.0.0.1", "root", "", "kickstar");
	mysqli_query($con, "UPDATE donates SET title='{$_GET['title']}',description='{$_GET['description']}', img='{$_GET['img']}', user='{$_GET['user']}' WHERE id='{$_GET['id']}'");
	header('Location: acc.php');
 ?>