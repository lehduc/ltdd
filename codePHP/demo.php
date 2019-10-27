<?php  
	//1.tao class thanh vien
	class ThanhVien {
		function ThanhVien($hoten, $matkhau, $dienthoai, $email, $diachi, $gioitinh) {
			$this -> TenKH = $hoten; 
			$this -> MatKhau = $matkhau;
			$this -> DienThoai = $dienthoai;
			$this -> Email = $email;
			$this -> DiaChi = $diachi;
			$this -> GioiTinh = $gioitinh;
		}
	}
	//2. tao mang
	$mangTV = array();
	//3.them ptu vao mang
	array_push($mangTV, new ThanhVien("Nguyễn Văn A","abc1234","0349818101","phom1797@gmail.com","Da Nang","nam"));
	array_push($mangTV, new ThanhVien("Nguyễn Văn B","abc1235","0349818102","phomm1797@gmail.com","Da Nang","nam"));
	//4.chuyen dinh dang cua mang -> json
	echo json_encode($mangTV);
	echo "<br>";
?>