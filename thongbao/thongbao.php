<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thông báo</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/custom.css">
</head>
<body>
	<nav class="navbar navbar-expand-sm nav-dark bg-dark fixed-top">
		<span class="navbar-brand col-md-2 text-center"><img src="http://alumni-old.tdtu.edu.vn/Content/images/tdt_logo_white.png" class="w-75" alt=""></span>
		<h1 class="mr-auto text-light" style="font-size: 25px">Hệ thống đăng ký đồ án - Đại học Tôn Đức Thắng</h1>
		<ul class="nav ml-auto">
			<li class="nav-item">
				<a href="#" title="login with Gmail">
					<span class="btn btn-danger rounded-0"><i class="fab fa-google"></i></span><span class="btn btn-light rounded-0">Gmail</span>
				</a>
			</li>
		</ul>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<ul class="nav flex-column col-md-2 bg-light pr-0 shadow" id="sidebar">
				<li class="nav-item py-2">
					<a href="./thongbao.html" class="nav-link text-dark"><i class="fas fa-flag-checkered"></i><span class="hide-item">Thông báo</span></a>
				</li>
				<li class="nav-item py-2">
					<a href="#" class="nav-link text-dark"><i class="fas fa-book-open"></i><span class="hide-item">Đề tài</span></a>
				</li>
				<li class="nav-item py-2">
					<a href="#" class="nav-link text-dark"><i class="fas fa-clipboard-check"></i><span class="hide-item">Kết quả</span></a>
				</li>
				<li class="nav-item py-2">
					<a href="#" class="nav-link text-dark"><i class="fas fa-question-circle"></i><span class="hide-item">Hỏi đáp</span></a>
				</li>
				<li class="nav-item py-2">
					<a href="#" class="nav-link text-dark"><i class="fas fa-users-cog"></i><span class="hide-item">Quản lý</span></a>
				</li>
				<li class="nav-item py-2">
					<a href="#" class="nav-link text-dark" id="btn-an" onclick="an();"><i class="fas fa-chevron-left"></i></a>
					<a href="#" class="nav-link text-dark d-none" id="btn-hien" onclick="hien();"><i class="fas fa-chevron-right"></i></a>
				</li>
			</ul>
			<div class="col-md-10" id="content">
				<!-- breadcrumbs -->
				<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		            <h1 class="h2">Thông báo</h1>
            		<div class="btn-toolbar mb-2 mb-md-0">
		              	<div class="btn-group mr-2">
		                	<a href="taothongbao.php" class="btn btn-sm btn-success">Thêm thông báo</a>
		              	</div>
		              	<button class="btn btn-sm btn-outline-secondary dropdown-toggle">
		                	<i class="fas fa-user-circle"></i> all
		              	</button>
		            </div>
		        </div>
		        <?php 
		        	require "ThongbaoModelHandler.php";
		        	
		        	foreach ($thongbaos as $thongbao):
		        ?>

		        <!-- endbreadcrumbs -->
		        <div class="card mb-3">
				  <div class="card-body">
				    <h5 class="card-title"><?=$thongbao['title'] ?></h5>
				    <p class="card-text"><?=$thongbao['intro']?></p>
				    <p class="card-text">
				    	<a href="chitietthongbao.php?id=<?=$thongbao['id']?>&state=1" class="btn btn-sm btn-primary">Chi tiết</a>				
				    	<small class="text-muted text-right float-right"><i class="fas fa-user-edit">	</i><?=" ". $thongbao['writer']. " "?><i class="fas fa-clock"></i> Last updated 3 mins ago</small>
				    </p>
				  </div>
				</div>				
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	
	<script src="../js/custom.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery-3.2.1.js"></script>
</body>
</html>