<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
			<a href="acc.php"><img src="ava.png" class="rounded-circle" ></a>

		</div>
	</div>
</div>
<div class="col-10 mx-auto">
	<h4 class="">Explore <span class="text-success font-weight-bold"><!--Вывести количество проектов--></span></h4>
	<p></p>
	<div class="row mt-5">
		<!--Вывести сами проекты здесь-->
		<?php
			$con = mysqli_connect('127.0.0.1', 'root','','kickstar');
				$query = mysqli_query($con, "SELECT * FROM donates");
				$num= mysqli_num_rows($query);
	 			for($i=0;$i<$num;$i++){
	 			$stroka = $query->fetch_assoc(); ?>

	 	<div class="col-4 mt-3">
		<div style="background-image: url(<?php echo $stroka['img']?>);background-size: cover; background-position: center; height: 300px;"></div>
			<h2 class="mt-3"><?php echo $stroka['title'] ?></h2>
			<p><?php echo $stroka['description'] ?></p>

			<div class="d-flex">
				<p>by <?php echo $stroka['user'] ?>,  </p>
				<p> <?php echo $stroka['place'] ?></p>
			</div>

			<div>
				
				<p name="goal">$<?php echo $stroka['goal'] ?></p>
				<p name="donated" style="color: green;">$<?php echo $stroka['donated'] ?></p>
			</div>

			<div>
				<form method="GET" action="update.php">
					<button class="btn bg-success">Back this project +10$</button>
					<input style="display:none" type="" value="<?php echo $stroka["id"];?>" name="id">
				</form>
			</div>
		</div>
		

		<?php } ?>
	</div>


</div>
</body>
</html>