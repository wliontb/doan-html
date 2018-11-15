<?php
include 'header.php';
?>
<!-- breadcrumbs -->
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Thông báo</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
      	<div class="btn-group mr-2">
        	<a href="addthongbao.php" class="btn btn-sm btn-success">Thêm thông báo</a>
      	</div>
      	<button class="btn btn-sm btn-outline-secondary dropdown-toggle">
        	<i class="fas fa-user-circle"></i> all
      	</button>
    </div>
</div>
<!-- endbreadcrumbs -->
<div class="card mb-3">
  <div class="card-body">
    <h5 class="card-title">Thông báo 1</h5>
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt dolorum nam, sit maiores fuga iure voluptates necessitatibus non ipsa dolorem.</p>
    <p class="card-text">
    	<a href="chitietthongbao.html" class="btn btn-sm btn-primary">Chi tiết</a>
    	<small class="text-muted text-right float-right"><i class="fas fa-user-edit"></i> Username  <i class="fas fa-clock"></i> Last updated 3 mins ago</small>
    </p>
  </div>
</div>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Thông báo 2</h5>
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ea commodi quisquam culpa dolores ratione et, itaque inventore aliquam facilis.</p>
    <p class="card-text">
    	<a href="chitietthongbao.html" class="btn btn-sm btn-primary">Chi tiết</a>
    	<small class="text-muted text-right float-right"><i class="fas fa-user-edit"></i> Username  <i class="fas fa-clock"></i> Last updated 3 mins ago</small>
    </p>
  </div>
</div>
<?php
include 'footer.php';
?>