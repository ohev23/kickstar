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
	<div class="col-10 mx-auto">
	<h2 class="">My projects <span class="text-success font-weight-bold"></span></h2>
	
	
	
			<div class="col-5 mx-auto">
				<form method="GET" action="insertProject.php">
					<input placeholder="title" type="" name="title" class="form-control mt-1">
					<input placeholder="description" type="" name="description" class="form-control mt-1">
					<input placeholder="goal" type="" name="goal" class="form-control mt-1">
					<input placeholder="img" type="" name="img" class="form-control mt-1">
					<input placeholder="user" type="" name="user" value="<?php echo $stroka["user"];?>" class="form-control mt-1">
					<input placeholder="place" type="" name="place" class="form-control mt-1">
					<button class="btn bg-success mt-2  btn-block">добавить</button>
				</form>
			</div>
	<div class="row mt-5">

		<?php 
			$con = mysqli_connect('127.0.0.1', 'root','','kickstar');
			$query = mysqli_query($con, "SELECT * FROM donates WHERE user= 'Fishean Studio'");
	 		$num= mysqli_num_rows($query);
	 		for($i=0;$i<$num;$i++){
	 			$stroka = $query->fetch_assoc();
	 		 ?>

	 <div class="col-4 mt-3">
	 	<h4><?php echo $stroka['user'] ?></h4>
		<div style="background-image: url(<?php echo $stroka['img']?>);background-size: cover; background-position: center; height: 300px;"></div>
			<h2 class="mt-3"><?php echo $stroka['title'] ?></h2>
			<p><?php echo $stroka['description'] ?></p>

			<div class="d-flex">
				<p> <?php echo $stroka['place'] ?></p>
			</div>

			<div>
				
				<p name="goal"><?php echo $stroka['goal'] ?></p>
				<p name="donated" style="color: green;">0</p>
			</div>

			<div>
				
			</div>
			<form method="GET" action="delete.php">
	 			<input value="<?php echo $stroka["id"];?>" type="" name="id" class="d-none">	
	 			<button class="btn btn-danger mt-2">удалить</button>	
	 		</form>
	 		<form method="GET" action="change.php">
	 			<input value="<?php echo $stroka["id"];?>" type="" name="id" class="d-none">
	 			<button class="btn btn-success mt-2">редактировать</button>
	 		</form>

			</div>
			<?php } ?>
			
		</div>
	</div>
</div>

</body>
</html>