<?php include "../header.php"; ?>
<!-- breadcrumbs -->
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Thông báo 
    	<?php if(!empty($message)) {
    		echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">'.$message.'<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span></button></div>';
    	}  ?>	
    </h1>
	<div class="btn-toolbar mb-2 mb-md-0">
      	<button class="btn btn-sm btn-outline-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle"></i> giáo vụ
      </button>

      <div class="dropdown-menu rounded-0" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href="#">Settings</a>
        <a class="dropdown-item" href="#">Logout</a>
      </div>
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
<?php include "../footer.php" ?>