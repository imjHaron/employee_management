<?php

class Hocsinh {
	private $ma;
	public $ho;
	public $ten;
	public $ngaysinh;
	public $diemtb;
	const HESO = 2;
	function setMa($maHS) {
		$this->ma = $maHS;
	}
	function getMa() {
		return $this -> ma;
	}
	function getHoten() {
		return $this -> ho . " " . $this -> ten;
	}
	function getTuoi() {
		$ns = explode("/", $this -> ngaysinh);
		return date("Y") - $ns[2];
	}
	function getdiemtb() {
		return $this ->diemtb*self::HESO;
	}
}


$hs1 = new HocSinh();
$hs1 ->setMa("62132395");
$hs1 -> ho = "Nguyễn Tấn";
$hs1 -> ten = "Triển";
$hs1 -> ngaysinh = "06/04/2002";
$hs1 -> diemtb = "10";
echo "<h3>Thông tin học sinh </h3>";
echo "Mã HS: ".$hs1 -> getMa();
echo "<br>Họ tên: ", $hs1->getHoten();
echo "<br>Tuổi {$hs1->getTuoi() }";
echo "<br>Điểm trung bình: {$hs1 -> getdiemtb()},";
echo " theo hệ số điểm là ". Hocsinh::HESO;
?>