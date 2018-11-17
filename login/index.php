<?php include "../config/config.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng nhập</title>
	<link rel="stylesheet" href="<?php echo $url ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $url ?>css/all.min.css">
	<link rel="stylesheet" href="<?php echo $url ?>css/custom.css">
	<script src="https://cdn.ckeditor.com/ckeditor5/11.1.1/classic/ckeditor.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-sm nav-dark bg-dark fixed-top">
		<a href="index.php" class="navbar-brand col-md-2 text-center"><img src="http://alumni-old.tdtu.edu.vn/Content/images/tdt_logo_white.png" class="w-75" alt=""></a>
		<h1 class="mr-auto text-light" style="font-size: 25px;margin-left: 10rem!important;">Hệ thống đăng ký đồ án - Đại học Tôn Đức Thắng</h1>
		<!-- <ul class="nav ml-auto">
			<li class="nav-item">
				<a href="login.php" title="login with Gmail">
					<span class="btn btn-danger rounded-0"><i class="fab fa-google"></i></span><span class="btn btn-light rounded-0">Gmail</span>
				</a>
			</li>
		</ul> -->
	</nav>
	<div class="container-fluid">
		<div class="row justify-content-center" style="margin-top: 150px">
			<form action="#" class="col-4">
				<h1 class="h3 text-center text-secondary">Login with <i class="fab fa-google text-danger"></i>mail</h1>
				<div class="form-group">
					<label for="username" class="text-center">Gmail : </label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon1">@</span>
						</div>
						<input type="text" class="form-control" placeholder="email" style=";border-bottom-right-radius: 0;border-bottom-left-radius: 0;" required autofocus>
					</div>
				</div>
				<div class="form-group">
					<label for="username">Password : </label>
					<div class="input-group">
						<!-- <div class="input-group-prepend">
							<span class="input-group-text" id="basic-addon2"></span>
						</div> -->
						<input type="password" class="form-control" placeholder="password" style="border-top-left-radius: 0;border-top-right-radius: 0;" required>
					</div>
				</div>
				<button class="btn btn-md container btn-success">Đăng nhập</button>
			</form>
		</div>
	</div>
	
	<script src="<?php echo $url ?>js/custom.js"></script>
	<script src="<?php echo $url ?>js/bootstrap.min.js"></script>
	<script src="<?php echo $url ?>js/jquery-3.2.1.js"></script>
</body>
</html>