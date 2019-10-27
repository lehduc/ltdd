<?php  
	require 'connectdb.php';

	$tenkh = $_POST['tenkh'];
	$matkhau = $_POST['matkhau'];
	$dienthoai = $_POST['dienthoai'];
	$email = $_POST['email'];
	$diachi = $_POST['diachi'];
	$gioitinh = $_POST['gioitinh'];

	$query = "INSERT INTO khachhang VALUES(null, '$tenkh','$matkhau', '$dienthoai','email', $diachi','gioitinh')";

	if (mysqli_query($connect, $query)) {
		//thanhcong
		echo "success";
	} else {
		//loi
		echo "error";
	}
?>