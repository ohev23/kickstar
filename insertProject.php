<?php 
$con = mysqli_connect("127.0.0.1", "root", "", "kickstar");

mysqli_query($con, "INSERT INTO donates (title, description, goal, img, user, place) VALUES ('".$_GET['title']."','".$_GET['description']."', '".$_GET['goal']."','".$_GET['img']."', '".$_GET['user']."','".$_GET['place']."')");

header("Location:acc.php");
?>