<?php
class HinhHoc {
    public function Ve() {
        echo "Vẽ hình";
    }
    public function tinhS() {
        echo "Tính diện tích";
    }
}

class HinhVuong extends HinhHoc {
    public $canh = 0;
    public function Ve() {
        echo "Vẽ hình vuông";
    }
    public function tinhS() {
        return $this->canh * $this->canh;
    }
}

class HinhChuNhat extends HinhHoc {
    public $dai = 0;
    public $rong = 0;
    public function Ve() {
        echo "Vẽ hình chữ nhật";
    }
    public function tinhS() {
        return $this->dai * $this->rong;
    }
}

$HinhChuNhat = new HinhChuNhat();

$HinhChuNhat->dai = 25;
$HinhChuNhat->rong = 20;

$HinhVuong = new HinhVuong();
$HinhVuong->canh = 20;

$HinhChuNhat->Ve();
echo "<br>Diện tích hình chữ nhật: " . $HinhChuNhat->tinhS();
echo "<br>";
$HinhVuong->Ve();
echo "<br>Diện tích hình vuông: " . $HinhVuong->tinhS();

?>