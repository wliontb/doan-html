<?php include '../config/config.php'; ?>	
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Thông báo</title>
		<link rel="stylesheet" href="<?php echo $url ?>css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo $url ?>css/all.min.css">
		<link rel="stylesheet" href="<?php echo $url ?>css/custom.css">
		<script src="https://cdn.ckeditor.com/ckeditor5/11.1.1/classic/ckeditor.js"></script>	
		<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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
			<div class="row">
				<ul class="nav flex-column col-md-2 bg-light pr-0 shadow" id="sidebar">
					<li class="nav-item pb-2 pt-4">
						<a href="index.php" class="nav-link text-dark"><i class="fas fa-flag-checkered"></i><span class="hide-item">Thông báo</span></a>
					</li>
					<li class="nav-item py-2">
						<a href="detai.php?role=3" class="nav-link text-dark"><i class="fas fa-book-open"></i><span class="hide-item">Đề tài</span></a>
					</li>
					<li class="nav-item py-2">
						<a href="ketqua.php" class="nav-link text-dark"><i class="fas fa-clipboard-check"></i><span class="hide-item">Kết quả</span></a>
					</li>
					<li class="nav-item py-2">
						<a href="#" class="nav-link text-dark"><i class="fas fa-question-circle"></i><span class="hide-item">Hỏi đáp</span></a>
					</li>
					<li class="nav-item py-2">
						<a href="quanly.php" class="nav-link text-dark"><i class="fas fa-users-cog"></i><span class="hide-item">Quản lý</span></a>
					</li>
					<li class="nav-item py-2">
						<a href="#" class="nav-link text-dark" id="btn-an" onclick="an();"><i class="fas fa-chevron-left"></i></a>
						<a href="#" class="nav-link text-dark d-none" id="btn-hien" onclick="hien();"><i class="fas fa-chevron-right"></i></a>
					</li>
				</ul>
				<div class="col-md-10" id="content">