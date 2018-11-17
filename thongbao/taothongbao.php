<?php include "../header.php";
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
} ?>
<!-- breadcrumbs -->
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="h4"><?=$header?></h2>
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
    <textarea name="content" id="editor" cols="30" rows="10" class="form-control"><?= $data['content']?></textarea>
  </div>				  
	<button type="submit" name="save" class="btn btn-primary">Lưu</button>
	<a href="thongbao.php?state=0" class="btn btn-primary">Hủy</a>
</form>
<?php include "../footer.php" ?>