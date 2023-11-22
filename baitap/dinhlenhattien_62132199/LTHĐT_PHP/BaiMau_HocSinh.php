<?php
	class Diem {
    public $diemToan;
    public $diemLy;
    public $diemAnh;
}

class HocSinh {
	private $ma;
    public $ho;
    public $ten;
    public $ngaysinh;
    private $diemtb;
    const HESO = 2;

    function setMa($maSV){
    	$this -> ma = $maSV;
    }
    function getMa(){
    	return $this -> ma;
    }
    function getHoten() {
        return $this->ho . " " . $this->ten;
    }

    function getNgaySinh() {
        return $this->ngaysinh;
    }

    function getTuoi() {
        $ns = explode("/", $this->ngaysinh);
        return date("Y") - $ns[2];
    }

    function getDiemtb() {
        $diemtb = ($this->diemToan + $this->diemLy + $this->diemAnh) / 3;
        return $diemtb;
    }
}

	$hs1 = new HocSinh();
	$hs1 -> setMa("62132199");
	$hs1->ho = "Đinh Lê Nhật";
	$hs1->ten = "Tiến";
	$hs1->ngaysinh = "22/08/2002";
	$hs1->diemToan = 7;
	$hs1->diemLy = 7;
	$hs1->diemAnh = 7;

	echo "<h2>Họ tên: " . $hs1->getHoten() . "</h2>";
	echo "<br>MSSV: ",$hs1 -> getMa();
	echo "<br>Ngày sinh: " . $hs1->getNgaySinh();
	echo "<br>Tuổi: " . $hs1->getTuoi();
	echo "<br>Điểm trung bình: " . $hs1->getDiemtb();
	echo " theo hệ số điểm là ".HocSinh::HESO;
?>
