<?php 
include "../header.php";
 ?>
<!-- breadcrumbs -->
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Trang giáo vụ - Giảng viên</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
      	<div class="btn-group mr-2">
        	<button class="btn btn-sm btn-outline-secondary">Import</button>
        	<button class="btn btn-sm btn-outline-secondary">Export</button>
        	<button class="btn btn-sm btn-outline-secondary">Thêm mới</button>
      	</div>
      	<button class="btn btn-sm btn-outline-secondary dropdown-toggle">
        	<i class="fas fa-user-circle"></i> username
      	</button>
    </div>
</div>
<!-- endbreadcrumbs -->
<!-- search -->
<div class="input-group mb-3">
	<input type="text" class="form-control" placeholder="Điền mã đợt > click tìm kiếm..">
	<div class="input-group-append">
		<button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
	</div>
</div>
<!-- endsearch -->
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Mã đợt</th>
      <th scope="col">Mã giáo viên</th>
      <th scope="col">Tên giáo viên</th>
      <th scope="col">Học hàm</th>
      <th scope="col">Email</th>
      <th scope="col">Thao tác</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Dot_1018_001</td>
      <td>GV001</td>
      <td>Phạm Văn Huy</td>
      <td>Tiến sĩ</td>
      <td>pvhuy@it.tdt.edu.vn</td>
      <td>
      	<button class="btn btn-warning"><i class="fas fa-pen"></i></button>
      	<button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
      	
      </td>
    </tr>
    <tr>
      <td>Dot_1018_001</td>
      <td>GV001</td>
      <td>Phạm Văn Huy</td>
      <td>Tiến sĩ</td>
      <td>pvhuy@it.tdt.edu.vn</td>
      <td>
      	<button class="btn btn-warning"><i class="fas fa-pen"></i></button>
      	<button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
      	
      </td>
    </tr>
  </tbody>
</table>
 <?php 
include "../footer.php";
  ?>