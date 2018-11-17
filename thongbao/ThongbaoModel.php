<?php 
require "../database/db.php";

class ThongBaoModel {

	public static function getInstance() {
    
        static $inst = null;
        if ($inst === null) {
            $inst = new ThongBaoModel();
        }
        return $inst;   
	}
	private function __construct()
    {

    }

	function getData2Show() {

		global $conn;

		$query = "select kh18_thongbao.id, title, name as 'writer', intro, content from kh18_thongbao, kh18_users where kh18_users.email = kh18_thongbao.emailWriter order by kh18_thongbao.id desc";

		$result = mysqli_query($conn, $query);
		while( $row = $result->fetch_array())
			$data[] = $row;

		return $data;
	}
	function getThongbaoFromId($id) {

		global $conn;

		$query = "select kh18_thongbao.id, title, name as 'writer', intro, content from kh18_thongbao, kh18_users where kh18_users.email = kh18_thongbao.emailWriter and kh18_thongbao.id='".$id."';";
		
		$result = mysqli_query($conn, $query);
		$data = mysqli_fetch_assoc($result);

		return $data;
	}
	function deleteThongbaoFromId($id) {

		global $conn;

		$query = "delete from kh18_thongbao where id='".$id."';";
		
		$result = mysqli_query($conn, $query);
		
		if($result) {
			return "Xóa thông báo thành công!";
		}
		else return "Xóa thông báo thất bại!";
	}
	function addNewThongbao($array) {
		global $conn;
		$title = $array['title'];
		$intro = $array['intro'];
		$content = $array['content'];
		$email = $array['emailWriter'];

		$query = "insert into kh18_thongbao(`title`,`intro`,`content`,`emailWriter`) values('".$title."', '".$intro."', '".$content."','".$email."');";

		$result = mysqli_query($conn, $query);

		if ($result) {
			return "Thêm thành công";
		}
		else return "Thêm thất bại!";
	}

	function modifyThongbaoFromId($array) {
		global $conn;

		$title = $array['title'];
		$intro = $array['intro'];
		$content = $array['content'];
		$email = $array['emailWriter'];
		$id = $array['id'];

		$query = "update kh18_thongbao set title='".$title."', intro='".$intro."', content='".$content."', emailWriter='".$email."' where id='".$id."';";
		echo $query;
		$result = mysqli_query($conn, $query);
		if ($result) {
			return "Sửa thành công";
		}
		else return "Sửa thất bại!";
	}
}