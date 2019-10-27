<?php 
	include 'connectdb.php';

	$query = "SELECT * FROM khachhang";

	$data = mysqli_query($connect, $query);
	//tach tung row trong du lieu bang
	while ($row = mysqli_fetch_assoc($data)) {
	 	echo $row['MaKH'].'<br/>';
	 	echo $row['TenKH'].'<br/>';
	 	echo $row['MatKhau'].'<br/>';
	 	echo $row['DienThoai'].'<br/>';
	 	echo $row['Email'].'<br/>';
	 	echo $row['DiaChi'].'<br/>';
	 	echo $row['GioiTinh'].'<br/>';
	}


	//1.tao class thanh vien
	class ThanhVien {
		function ThanhVien($makh, $tenkh, $matkhau, $dienthoai, $email, $diachi, $gioitinh) {
			$this -> MaKH = $makh; 
			$this -> TenKH = $tenkh; 
			$this -> MatKhau = $matkhau;
			$this -> DienThoai = $dienthoai;
			$this -> Email = $email;
			$this -> DiaChi = $diachi;
			$this -> GioiTinh = $gioitinh;
		}
	}
	//2. tao mang
	$mangKH = array();
	//3.them ptu vao mang
	while ($row = mysqli_fetch_assoc($data)) {
		array_push($mangKH, new ThanhVien($row['MaKH'], $row['TenKH'], $row['MatKhau'], $row['DienThoai'], $row['Email'], $row['DiaChi'], $row['GioiTinh']));
	}
	//4.chuyen dinh dang cua mang -> json
	echo json_encode($mangKH);		
?>