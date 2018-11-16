<?php
include 'header.php';
include 'connect.php';
  $sql = "SELECT * FROM kh18_thongbao";
  $result = mysqli_query($conn, $sql);
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
<?php 
if (mysqli_num_rows($result) == 0) {
  $none = "Không có thông báo nào";
} else {
    while($row = mysqli_fetch_assoc($result)) {
        
?>
<div class="card mb-3">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['title'] ?></h5>
    <p class="card-text text-secondary"><?php echo $row['intro'] ?></p>
    <p class="card-text">
    	<a href="<?php echo "chitiet.php?id=".$row['id']  ?>" class="btn btn-sm btn-primary">Chi tiết</a>
    	<small class="text-muted text-right float-right"><i class="fas fa-user-edit"></i> <?php echo $row['writer'] ?>  <i class="fas fa-clock"></i> <?php echo $row['created_at'] ?></small>
    </p>
  </div>
</div>
<?php
    }
}
mysqli_close($conn);
include 'footer.php';
?>