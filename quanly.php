<?php include 'header.php'; ?>
<!-- breadcrumbs -->
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Trang Quản lý - Giáo vụ</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
      	<!-- <div class="btn-group mr-2">
        	<button class="btn btn-sm btn-outline-secondary">Import</button>
        	<button class="btn btn-sm btn-outline-secondary">Export</button>
        	<button class="btn btn-sm btn-outline-secondary">Thêm mới</button>
      	</div> -->
      	<button class="btn btn-sm btn-outline-secondary dropdown-toggle">
        	<i class="fas fa-user-circle"></i> username
      	</button>
    </div>
</div>
<!-- endbreadcrumbs -->
<div class="list-group">
  <a href="themdotmoi.php" class="list-group-item list-group-item-action"><i class="fas fa-plus"></i> Thêm đợt mới</a>
  <a href="quanlysinhvien.php" class="list-group-item list-group-item-action"><i class="fas fa-search"></i> Xem thông tin sinh viên theo từng đợt đăng ký</a>
  <a href="quanlygiangvien.php" class="list-group-item list-group-item-action"><i class="fas fa-search"></i> Xem thông tin giảng viên theo từng đợt đăng ký</a>
</div>
<?php include 'footer.php'; ?>