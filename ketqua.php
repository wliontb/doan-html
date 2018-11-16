<?php 
include 'header.php'; ?>
<!-- breadcrumbs -->
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h4">Kết quả đăng ký của sinh viên :</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
      	<div class="btn-group mr-2">
        	<button class="btn btn-sm btn-outline-secondary">Share</button>
        	<button class="btn btn-sm btn-outline-secondary">Export</button>
      	</div>
      	<button class="btn btn-sm btn-outline-secondary dropdown-toggle">
        	<i class="fas fa-user-circle"></i> sinh viên
      	</button>
    </div>
</div>
<!-- endbreadcrumbs -->
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Mã đề tài</th>
      <th scope="col">Tên đề tài</th>
      <th scope="col">Trạng thái</th>
      <th scope="col">Thành viên</th>
      <th scope="col">Thao tác</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>DA_1018_001</td>
      <td>Tìm hiểu ABC</td>
      <td>Xác nhận</td>
      <td>
      	<div><i class="far fa-user"></i> Sinh viên 1</div>
      	<div><i class="far fa-user"></i> Sinh viên 2</div>
      	<div><i class="far fa-user"></i> Sinh viên 3</div>
	  </td>
      <td>
      	<button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
      	
      </td>
    </tr>
    <tr>
      <td>DA_1018_001</td>
      <td>Tìm hiểu ABC</td>
      <td>Chờ xác nhận</td>
      <td><i class="far fa-user"></i> Sinh viên 1</td>
      <td>
      	<button class="btn btn-success"><i class="fas fa-check"></i></button>
      	<button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
      </td>
    </tr>
  </tbody>
</table>
<?php 
include 'footer.php'; ?>