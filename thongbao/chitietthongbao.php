<?php 
include "../header.php";
// lấy chi tiết đề tài dựa vào id và state = 1
require "ThongbaoModelHandler.php";
 ?>
	<!-- breadcrumbs -->
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><?=$thongbao['title']?></h1>
		<div class="btn-toolbar mb-2 mb-md-0">
          	<div class="btn-group mr-2">
            	<a href="taothongbao.php?id=<?=$thongbao['id']?>&state=1" class="btn btn-sm btn btn-primary"><i class="fas fa-wrench"></i> Sửa thông báo</a>
            	<a href="chitietthongbao.php?id=<?=$thongbao['id']?>&state=2" class="btn btn btn-sm btn-secondary"><i class="fas fa-trash"></i> Xóa thông báo</a>
          	</div>
          	<button class="btn btn-outline-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	            <i class="fas fa-user-circle"></i> giáo vụ
	          </button>

	          <div class="dropdown-menu rounded-0" aria-labelledby="dropdownMenuLink">
	            <a class="dropdown-item" href="#">Settings</a>
	            <a class="dropdown-item" href="#">Logout</a>
	          </div>
	        </div>
    </div>
    <!-- endbreadcrumbs -->
    <div class="card mb-3">
	  <div class="card-body">
	    <p class="card-text">
	    	<small class="text-muted"><i class="fas fa-user-edit"></i> <?=$thongbao['writer']?>  <i class="fas fa-clock"></i> Last updated 3 mins ago</small>
	    </p>
	    <p class="card-text"><?=$thongbao['content']?></p>				    
	  </div>
	</div>
<?php include "../footer.php"; ?>