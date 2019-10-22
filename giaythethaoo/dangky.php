<?php
$response = array();
include 'connect.php';
include 'function.php';
 
// (nhan cac tham so yeu cau vao)
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, TRUE); //convert JSON into array
 
//kiem tra thong so bat buoc
if(isset($input['MaKH']) && isset($input['TenKH']) && isset($input['MatKhau']) && isset($input['DienThoai']) && isset($input['Email']) && isset($input['DiaChi']) && isset($input['GioiTinh'])){
	$MaKH = $input['MaKH'];
	$TenKH = $input['TenKH'];
	$MatKhau = $input['MatKhau'];
	$DienThoai = $input['DienThoai'];
	$Email = $input['Email'];
	$DiaChi = $input['DiaChi'];
	$GioiTinh = $input['GioiTinh'];
	
	//kiem tra user da co tkhoan hay chua
	if(!userExists($MaKH)){
 
		//lay gia tri salt
		$salt  = getSalt();
		
		//Generate a unique password Hash
		$passwordHash = password_hash(concatPasswordWithSalt($MatKhau,$salt),PASSWORD_DEFAULT);
		
		//Query to register new user
		$insertQuery  = "INSERT INTO khachhang(MaKH, TenKH, MatKhau, DienThoai, Email, DiaChi, GioiTinh) VALUES (?,?,?,?,?,?)";
		if($stmt = $con->prepare($insertQuery)){
			$stmt->bind_param("ssss",$MaKH,$TenKH,$MatKhau,$DienThoai,$Email,$DiaChi,$GioiTinh;
			$stmt->execute();
			$response["status"] = 0;
			$response["message"] = "user da tao";
			$stmt->close();
		}
	}
	else{
		$response["status"] = 1;
		$response["message"] = "User da ton tai";
	}
}
else{
	$response["status"] = 2;
	$response["message"] = "thieu thong so bat buoc";
}
echo json_encode($response);
?>