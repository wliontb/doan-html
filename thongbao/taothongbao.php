<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tạo thông báo</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/custom.css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://cdn.ckeditor.com/ckeditor5/11.1.1/classic/ckeditor.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-sm nav-dark bg-dark fixed-top">
		<span class="navbar-brand col-md-2 text-center"><img src="http://alumni-old.tdtu.edu.vn/Content/images/tdt_logo_white.png" class="w-75" alt=""></span>
		<h1 class="mr-auto text-light" style="font-size: 25px">Hệ thống đăng ký đồ án - Đại học Tôn Đức Thắng</h1>
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
					<a href="./thongbao.html" class="nav-link text-dark"><i class="fas fa-flag-checkered"></i><span class="hide-item">Thông báo</span></a>
				</li>
				<li class="nav-item py-2">
					<a href="#" class="nav-link text-dark"><i class="fas fa-book-open"></i><span class="hide-item">Đề tài</span></a>
				</li>
				<li class="nav-item py-2">
					<a href="#" class="nav-link text-dark"><i class="fas fa-clipboard-check"></i><span class="hide-item">Kết quả</span></a>
				</li>
				<li class="nav-item py-2">
					<a href="#" class="nav-link text-dark"><i class="fas fa-question-circle"></i><span class="hide-item">Hỏi đáp</span></a>
				</li>
				<li class="nav-item py-2">
					<a href="#" class="nav-link text-dark"><i class="fas fa-users-cog"></i><span class="hide-item">Quản lý</span></a>
				</li>
				<li class="nav-item py-2">
					<a href="#" class="nav-link text-dark" id="btn-an" onclick="an();"><i class="fas fa-chevron-left"></i></a>
					<a href="#" class="nav-link text-dark d-none" id="btn-hien" onclick="hien();"><i class="fas fa-chevron-right"></i></a>
				</li>
			</ul>

			<?php 
	        	require "ThongbaoModelHandler.php";
	        	if ($_GET['state'] != 1) {
	        		$data['title'] = "";
	        		$data['intro'] = "";
	        		$data['content']  = "";
	        		$state = 3;
 	        		$header = "Tạo thông báo mới";
	        	}
	        	else {
	        		$data = $thongbao;
	        		$state = 4;
	        		$header = "Sửa thông báo";
	        	}
		    ?>

			<div class="col-md-10" id="content">
				<!-- breadcrumbs -->
				<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		            <h2 class="h4"><?=$header?></h2>
            		<div class="btn-toolbar mb-2 mb-md-0">
		              	<button class="btn btn-sm btn-outline-secondary dropdown-toggle">
		                	<i class="fas fa-user-circle"></i> giáo vụ
		              	</button>
		            </div>
		        </div>
		        <!-- endbreadcrumbs -->		        
		        <form action="ThongbaoModelHandler.php" method="post">
		        	<input type="hidden" name="state" value="<?=$state?>" />
		        	<input type="hidden" name="id" value="<?=$data['id']?>" />
				  <div class="form-group">
				    <label for="tieude">Tiêu đề</label>
				    <input type="text" class="form-control" name="title" placeholder="điền tiêu đề" value="<?= $data['title']?>">
				  </div>
				  <div class="form-group">
				    <label for="mota">Mô tả</label>
				    <input type="text" class="form-control" name="intro" placeholder="điền mô tả" value="<?= $data['intro']?>">
				  </div>
				  <div class="form-group">	
				    <label for="noidung">Nội dung</label>
				    <textarea name="content" cols="30" rows="10" class="form-control"><?= $data['content']?></textarea>
				  </div>				  
                	<button name="save" class="btn btn-primary">Lưu</button>
                	<a href="thongbao.php?state=0" class="btn btn-sm btn-primary">Hủy</a>
				</form>
			</div>
		</div>
	</div>	
	<script src="../js/custom.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery-3.2.1.js"></script>
</body>
</html>