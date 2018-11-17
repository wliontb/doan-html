<?php 
require_once "ThongbaoModel.php";
require_once "../config/config_session.php";


$prepare = ThongbaoModel::getInstance();

if (isset($_POST['save'])) {
	$state = $_POST['state'];
}
else{

	if(empty($_GET['state'])) 
		$state = 0;
	else
		$state = $_GET['state'];
}

if ($_SESSION['level'] === 1) {  // quyền là giáo vụ

// khi header sang thongbao state se la 0
	$message = "";
	if ($state == 0) {// lấy data chuẩn bị cho web

		$thongbaos = $prepare->getData2Show();
	}
	else if ($state == 1) { // lấy data từ id

		$id = $_GET['id'];
		$thongbao = $prepare->getThongbaoFromId($id);
	}

	else if ($state == 2) { // xoá

		$id = $_GET['id'];
		$message = $prepare->deleteThongbaoFromId($id);
		header("Location: thongbao.php?state=0");
	}
	else if ($state == 3) { // thêm

		$array['title'] = $_POST['title'];
	    $array['intro'] = $_POST['intro'];
	    $array['content'] = $_POST['content'];
	    $array['emailWriter'] = $_SESSION['email'];

		$message = $prepare->addNewThongbao($array);
		header("Location: thongbao.php?state=0");
	}
	else if ($state == 4) { // sửa

		$array['title'] = $_POST['title'];
	    $array['intro'] = $_POST['intro'];
	    $array['content'] = $_POST['content'];
	    $array['emailWriter'] = $_SESSION['email'];
		$array['id'] = $_POST['id'];

		$message = $prepare->modifyThongbaoFromId($array);	
		header("Location: thongbao.php?state=0");
	}
}
