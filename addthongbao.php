<?php 
if(isset($_POST['ok'])){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "doan";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "INSERT INTO kh18_thongbao (title, writer, intro, full, created_at)
	VALUES ('".$_POST['title']."', 'UsernameTest', '".$_POST['intro']."', '".$_POST['full']."', '".time()."')";

	if (mysqli_query($conn, $sql)) {
	    $text = "Thêm thông báo thành công";
	} else {
		$text = "Thêm thông báo thất bại";
	}

	mysqli_close($conn);
}


include 'header.php';

?>
<!-- breadcrumbs -->
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="h4">Tạo thông báo mới</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
      	<button class="btn btn-sm btn-outline-secondary dropdown-toggle">
        	<i class="fas fa-user-circle"></i> giáo vụ
      	</button>
    </div>
</div>
<!-- endbreadcrumbs -->
<?php 
if(isset($text)){
	echo '
	<div class="alert alert-success alert-dismissible fade show" role="alert">
	  '.$text.'
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
	';}
 ?>
<form method="POST">
  <div class="form-group">
    <label for="tieude">Tiêu đề</label>
    <input type="text" class="form-control" id="tieude" name="title" placeholder="điền tiêu đề">
  </div>
  <div class="form-group">
    <label for="mota">Mô tả</label>
    <input type="text" class="form-control" id="mota" name="intro" placeholder="điền mô tả">
  </div>
  <div class="form-group">
    <label for="noidung">Nội dung</label>
    <textarea name="full" id="editor" cols="30" rows="10" class="form-control"></textarea>
  </div>
  <button type="submit" name="ok" class="btn btn-primary">Lưu</button>
  <button type="reset" class="btn btn-primary">Hủy</button>
</form>
<?php
include 'footer.php';
 ?>