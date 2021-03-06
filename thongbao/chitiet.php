<?php 
include "../header.php";
// if(empty($_GET['id'])){
// 	die('Địa chỉ không đúng');
// } else {
// 	include "../connect.php";
// 	$sql = "SELECT * FROM kh18_thongbao WHERE id=".$_GET['id']."";
// 	$result = mysqli_query($conn, $sql);

// 	if (mysqli_num_rows($result) > 0) {
// 	    // output data of each row
// 	    $data = mysqli_fetch_assoc($result);
// 	    // while($row = mysqli_fetch_assoc($result)) {
// 	    //     var_dump($row);
// 	    // }
// 	} else {
// 	    die('Địa chỉ không đúng');
// 	}

// 	mysqli_close($conn);
// }

?>
<!-- breadcrumbs -->
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<?php 
		// lấy chi tiết đề tài dựa vào id và state = 1
		require "ThongbaoModelHandler.php";
	?>
    <h1 class="h2"><?=$thongbao['title']?></h1>
	<div class="btn-toolbar mb-2 mb-md-0">
      	<div class="btn-group mr-2">
        	<a href="taothongbao.php?id=<?=$thongbao['id']?>&state=1" class="btn btn-sm btn-primary">Sửa thông báo</a>
        	<a href="chitietthongbao.php?id=<?=$thongbao['id']?>&state=2" class="btn btn-sm btn-secondary">Xóa thông báo</a>
      	</div>
      	<button class="btn btn-sm btn-outline-secondary dropdown-toggle">
        	<i class="fas fa-user-circle"></i> all
      	</button>
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