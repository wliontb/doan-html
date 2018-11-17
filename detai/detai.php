<?php include "../header.php";
if(empty($_GET['role'])){
	die('Địa chỉ không đúng');
} else {
	if($_GET['role']==3){
		include "detaisv.php";
	} elseif($_GET['role']==1||$_GET['role']==2) {
		include "detaigv.php";
	} else {
		die('Địa chỉ không đúng');
	}
}
?>

<?php include "../footer.php"; ?>