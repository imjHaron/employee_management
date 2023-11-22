<!DOCTYPE html>
<html>
<head>
    <title>NHẬP LIỆU THÔNG TIN</title>
    <style>
        body {
            background-color: lavender;
        }


        form {
            max-width: 380px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 96%;
            background-color: #skyblue;
            color: black;
            cursor: pointer;
        }

   
    </style>
</head>
<body>
<?php
    class NhanVienCaoCap {
    protected $Maso;
    protected $Hoten;
    protected $Gioitinh;
    protected $Ngaysinh;
    protected $Songaycong;
    protected $Bacluong;

    public function __construct($Maso, $Hoten, $Gioitinh, $Ngaysinh, $Songaycong, $Bacluong) {
        $this->Maso = $Maso;
        $this->Hoten = $Hoten;
        $this->Gioitinh = $Gioitinh;
        $this->Ngaysinh = $Ngaysinh;
        $this->Songaycong = $Songaycong;
        $this ->Bacluong = $Bacluong;
    }

    public function getMaso() {
        return $this->Maso;
    }
    public function setMaso($Maso) {
        $this->Maso = $Maso;
    }
    public function getHoten() {
        return $this->Hoten;
    }
    public function setHoten($Hoten) {
        $this->Hoten = $Hoten;
    }
    public function getGioitinh() {
        return $this->Gioitinh;
    }
    public function setGioitinh($Gioitinh) {
        $this->Gioitinh = $Gioitinh;
    }
    public function getNgaysinh() {
        return $this->Ngaysinh;
    }
    public function setNgaysinh($Ngaysinh) {
        $this->Ngaysinh = $Ngaysinh;
    }
    public function getSongaycong() {
        return $this->Songaycong;
    }
    public function setSongaycong($Songaycong) {
        $this->Songaycong = $Songaycong;
    }
   public function getBacluong() {
        return $this->Songaycong;
    }
    public function setBatLuong($Bacluong) {
        $this->Bacluong = $Bacluong;
    }
}

class NhaKhoaHoc extends NhanVienCaoCap {
    protected $luongCoBan = 200000;
    protected $soBaiBaoCongBo;
    protected $donGiaBaiBao = 20000000;

    public function __construct($Maso, $Hoten, $Gioitinh, $Ngaysinh ,$Songaycong ,$Bacluong ,$luongCoBan, $soBaiBaoCongBo, $donGiaBaiBao) {
        parent::__construct($Maso, $Hoten, $Gioitinh, $Ngaysinh, $Songaycong);
        $this->luongCoBan = $luongCoBan;
        $this->soBaiBaoCongBo = $soBaiBaoCongBo;
        $this->donGiaBaiBao = $donGiaBaiBao;
    }

    public function getLuongCoBan() {
        return $this->luongCoBan;
    }

    public function setLuongCoBan($luongCoBan) {
        $this->luongCoBan = $luongCoBan;
    }

    public function getSoBaiBaoCongBo() {
        return $this->soBaiBaoCongBo;
    }

    public function setSoBaiBaoCongBo($soBaiBaoCongBo) {
        $this->soBaiBaoCongBo = $soBaiBaoCongBo;
    }

    public function getdonGiaBaiBao() {
        return $this->soBaiBaoCongBo;
    }

    public function setdonGiaBaiBao($donGiaBaiBao) {
        $this->donGiaBaiBao = $donGiaBaiBao;
    }
    public function tinhLuong() {
        $Luong = 0;
        if ($this -> soBaiBao == 0){
            $Luong = $this -> Songaycong * $this -> luongCoBan * $this -> Bacluong;
        }else {
            $Luong = ($this -> Songaycong * $this -> luongCoBan * $this -> Bacluong) + ($this -> soBaiBao * $this -> donGiaBaiBao);
        }
    }
}

class NhaQuanLy extends NhanVienCaoCap {
    protected $luongCoBan = 300000;
    protected $chucVu;
    protected $heSoChucVu;

    public function __construct($Maso, $Hoten, $Gioitinh, $Ngaysinh, $Songaycong ,$Bacluong ,$luongCoBan, $chucVu, $heSoChucVu) {
        parent::__construct($Maso, $Hoten, $Gioitinh, $Ngaysinh, $Songaycong, $Bacluong, $luongCoBan, $chucVu, $heSoChucVu);
        $this->luongCoBan = $luongCoBan;
        $this->chucVu = $chucVu;
        $this->heSoChucVu = $heSoChucVu;
    }

    public function getLuongCoBan() {
        return $this->luongCoBan;
    }

    public function setLuongCoBan($luongCoBan) {
        $this->luongCoBan = $luongCoBan;
    }

    public function getChucVu() {
        return $this->chucVu;
    }

    public function setChucVu($chucVu) {
        $this->chucVu = $chucVu;
    }

    public function getHeSoChucVu() {
        return $this->heSoChucVu;
    }

    public function setHeSoChucVu($heSoChucVu) {
        $this->heSoChucVu = $heSoChucVu;
    }


}
?>
    <form method="post" action="">
    <div class="radio-group">
        <label for="loaiDoiTuong">Loại đối tượng:</label>
        <input type="radio" id="NhaKhoaHoc" name="loaiDoiTuong" value="NhaKhoaHoc" checked>
        <label for="NhaKhoaHoc">Nhà Khoa Học</label>
        <input type="radio" id="NhaQuanLy" name="loaiDoiTuong" value="NhaQuanLy">
        <label for="NhaQuanLy">Nhà Quản Lý</label>
    </div>

    <label for="Maso">Mã số:</label>
    <input type="text" id="Maso" name="Maso" required><br>

    <label for="Hoten">Họ tên:</label>
    <input type="text" id="Hoten" name="Hoten" required><br>
    <br>

    <div class="radio-group">
    <label for="Gioitinh">Giới tính:</label>
    <input type="radio" id="nam" name="Gioitinh" value="Nam" required>
    <label for="nam">Nam</label>
    <input type="radio" id="nu" name="Gioitinh" value="Nữ" required>
    <label for="nu">Nữ</label><br>
    </div>
    <br>

    <label for="Ngaysinh">Ngày sinh:</label>
    <input type="date" id="Ngaysinh" name="Ngaysinh" required><br>

    <div id="nhaKhoaHocFields">
    <label for="chucVu">Chức vụ:</label>
    <select id="chucVu" name="chucVu" required>
        <option value="Thạc Sĩ">Thạc Sĩ</option>
        <option value="Tiến Sĩ">Tiến Sĩ</option>
        <option value="Giáo sư">giáo sư</option>
        <option value="Phó giáo sư">Phó giáo sư</option>
    </select>
    <br>

    <label for="soBaiBaoCongBo">Số bài báo đã công bố:</label>
    <input type="number" id="soBaiBaoCongBo" name="soBaiBaoCongBo" required><br>
</div>

    <br>
    <input type="submit" name="submit" value="Lưu nhân viên">
</form>

     <script>
        var nhaKhoaHocFields = document.getElementById('nhaKhoaHocFields');
        var nhaQuanLyFields = document.getElementById('nhaQuanLyFields');
        var nhaKhoaHocRadio = document.getElementById('nhaKhoaHoc');
        var nhaQuanLyRadio = document.getElementById('nhaQuanLy');

        function handleRadioChange() {
            if (nhaKhoaHocRadio.checked) {
                nhaKhoaHocFields.style.display = 'block';
                nhaQuanLyFields.style.display = 'none';
            } else if (nhaQuanLyRadio.checked) {
                nhaKhoaHocFields.style.display = 'none';
                nhaQuanLyFields.style.display = 'block';
            }
        }

        nhaKhoaHocRadio.addEventListener('change', handleRadioChange);
        nhaQuanLyRadio.addEventListener('change', handleRadioChange);

        handleRadioChange();
    </script>
</body>
</html>
























    












