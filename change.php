<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title></title>
</head>
<body>
<div class="col-12">
	<div class="row">
		<div class="col-2 pt-3">
			<a href="" class="text-dark ml-3">Explore</a>
			<a href="" class="text-dark ml-3">Start a project</a>
		</div>
		<div class="col-8 text-center">
			<img src="logo.png" class="w-25">
			<p>#BlackLivesMatter</p>
		</div>
		<div class="col-2 text-left pt-3">
			<a href="" > <i class="fa fa-search"></i> Search</a>
			<a href=""><img src="ava.png" class="rounded-circle" ></a>

		</div>
	</div>
</div>
		<?php 
			$con = mysqli_connect('127.0.0.1', 'root','','kickstar');
			$query = mysqli_query($con, "SELECT * FROM donates WHERE id='{$_GET['id']}'");
	 		$num= mysqli_num_rows($query);
	 		for($i=0;$i<$num;$i++){
	 			$stroka = $query->fetch_assoc();
	 		 ?>

		<div class="col-9 mx-auto mt-5">
			<form method="GET" action="updatePosts.php">
				<input placeholder="id" value="<?php echo $stroka["id"];?>" type="" name="id" class="form-control mt-1" style="display:none;">
				<input placeholder="title" value="<?php echo $stroka["title"];?>" type="" name="title" class="form-control mt-1">
				<input placeholder="description" value="<?php echo $stroka["description"];?>" type="" name="description" class="form-control mt-1">
				<input placeholder="img" value="<?php echo $stroka["img"];?>" type="" name="img" class="form-control mt-1">
				<input placeholder="user" type="" name="user" value="<?php echo $stroka["user"];?>" class="form-control mt-1">
				<button class="btn btn-success btn-block mt-3">Сохранить</button>
			</form>
		</div>
	<?php } ?>

</body>
</html>