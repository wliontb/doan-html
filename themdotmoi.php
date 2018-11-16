<?php 
include 'header.php'; ?>
<!-- breadcrumbs -->
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="h4">Tạo đợt đăng ký mới</h1>
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
<form>
  <div class="form-group">
    <label for="tendot">Tên đợt</label>
    <input type="text" class="form-control" id="tendot" placeholder="điền tên đợt">
  </div>
  <div class="form-group">
    <label for="loaidetai">Loại đề tài</label>
    <select class="form-control" id="loaidetai">
      <option>Đồ án</option>
      <option>Bài tập lớn</option>
      <option>Luận văn</option>
    </select>
  </div>
  <div class="form-group">
    <label for="ngaybatdau">Ngày bắt đầu</label>
    <input type="text" class="form-control fromDate" id="ngaybatdau">
  </div>
  <div class="form-group">
    <label for="ngayketthuc">Ngày kết thúc</label>
    <input type="text" class="form-control toDate" id="ngayketthuc">
  </div>
  <button type="submit" class="btn btn-primary">Lưu</button>
  <button type="submit" class="btn btn-primary">Hủy</button>
</form>
<?php 
include 'footer.php'; ?>