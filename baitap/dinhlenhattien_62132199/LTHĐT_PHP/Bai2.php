<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Quản Lý Nhân Viên</title>
<!-- <style>
        body{
            display: flex;
            justify-content: center;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            background-color: #FFCCCC;
        }
        
        /* Áp dụng kiểu cho tiêu đề bảng */
        th {
            background-color: #001524;
            color: #fff;
            padding: 10px;
        }
        
        /* Áp dụng kiểu cho các ô dữ liệu */
        td{
            padding: 10px;
        }
        input[type="submit"] {
            background-color: #whitesmoke;
            color: #darkred;
            border: 1px solid #FDE5D4;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #FDE5D4;
            color: #001524;
        }
        input[type="text"]{
            width: 370px;
            color: #001524;
        }
        textarea{
            color: #001524;
        }
        .cot1{
            color: #FDE5D4;
        }
    </style> -->
</head>
<body>
  <?php
    abstract class NhanVien {
      protected $hoten, $gioitinh, $ngayvaolam, $hesoluong, $socon, $luongcanban = 10000000;
      public function setHoTen($hoten) {
        $this->hoten = $hoten;
      }
      public function getHoTen() {
        return $this->hoten;
      }
      public function setGioiTinh($gioitinh) {
        $this->gioitinh = $gioitinh;
      }
      public function getGioiTinh() {
        return $this->gioitinh;
      }
      public function setNgayVaoLam($ngayvaolam) {
        $this->ngayvaolam = $ngayvaolam;
      }
      public function getNgayVaoLam() {
        return $this->ngayvaolam;
      }
      public function setHeSoLuong($hesoluong) {
        $this->hesoluong = $hesoluong;
      }
      public function getHeSoLuong() {
        return $this->hesoluong;
      }
      public function setSoCon($socon) {
        $this->socon = $socon;
      }
      public function getSoCon() {
        return $this->socon;
      }

      public function tinh_tien_thuong($so_nam_lam_viec) {
        return $so_nam_lam_viec * 1000000;
      }
    }

    class NhanVienVanPhong extends NhanVien {
      protected $songayvang, $dinhmucvang = 5, $dongiaphat = 100000;
      public function setSoNgayVang($songayvang) {
        $this->songayvang = $songayvang;
      }
      public function getSoNgayVang() {
        return $this->songayvang;
      }

      public function tinh_tien_phat() {
        if ($this->songayvang > $this->dinhmucvang) {
          return $this->songayvang * $this->dongiaphat;
        } else {
          return 0;
        }
      }

      public function tinh_tien_tro_cap() {
        if ($this->gioitinh == "Nữ") {
          return 200000 * $this->socon * 1.5;
        } else {
          return 200000 * $this->socon;
        }
      }

      public function tinh_tien_luong() {
        $luong = $this->luongcanban * $this->hesoluong - $this->tinh_tien_phat();
        return $luong;
      }
    }

    class NhanVienSanXuat extends NhanVien {
      protected $sosanpham, $dinhmucsanpham = 100000, $dongiasanpham = 10000000;
      public function setSoSanPham($sosanpham) {
        $this->sosanpham = $sosanpham;
      }
      public function getSoSanPham() {
        return $this->sosanpham;
      }

      public function tinh_tien_thuong($so_nam_lam_viec) {
        if ($this->sosanpham > $this->dinhmucsanpham) {
          return ($this->sosanpham - $this->dinhmucsanpham) * $this->dongiasanpham * 0.03;
        }else {
          return 0;
        }
      }

      public function tinh_tien_tro_cap() {
        return $this->socon * 120000;
      }

      public function tinh_tien_luong() {
        $luong = ($this->sosanpham * $this->dongiasanpham) + $this->tinh_tien_thuong();
        return $luong;
      }
    }
  ?>

  <form method="POST" action=""> <label for="hoten">Họ và tên:</label> <input type="text" name="hoten" id="hoten" required><br>
routeros
Copy
<label for="gioitinh">Giới tính:</label>
<select name="gioitinh" id="gioitinh" required>
  <option value="Nam">Nam</option>
  <option value="Nữ">Nữ</option>
</select><br>

<label for="ngayvaolam">Ngày vào làm:</label>
<input type="date" name="ngayvaolam" id="ngayvaolam" required><br>

<label for="hesoluong">Hệ số lương:</label>
<input type="number" name="hesoluong" id="hesoluong" min="0" step="0.1" required><br>

<label for="socon">Số con:</label>
<input type="number" name="socon" id="socon" min="0" required><br>

<label for="loainhanvien">Loại nhân viên:</label>
<select name="loainhanvien" id="loainhanvien" required>
  <option value="vanphong">Nhân viên văn phòng</option>
  <option value="sanxuat">Nhân viên sản xuất</option>
</select><br>

<input type="submit" name="submit" value="Tính lương">
</form>

  <?php
  $tienluong = $tienthuong = $tienphat = $tientrocap = $thuclinh = "";
    if (isset($_POST['submit'])) {
      $hoten = $_POST['hoten'];
      $gioitinh = $_POST['gioitinh'];
      $ngayvaolam = $_POST['ngayvaolam'];
      $hesoluong = $_POST['hesoluong'];
      $socon = $_POST['socon'];
      $loainhanvien = $_POST['loainhanvien'];

      if ($loainhanvien == "vanphong") {
        $nhanvien = new NhanVienVanPhong();
        $nhanvien->setHoTen($hoten);
        $nhanvien->setGioiTinh($gioitinh);
        $nhanvien->setNgayVaoLam($ngayvaolam);
        $nhanvien->setHeSoLuong($hesoluong);
        $nhanvien->setSoCon($socon);

        $tienluong = $nhanvien->tinh_tien_luong();
        $tienthuong = $nhanvien->tinh_tien_thuong(2);
        $tienphat = $nhanvien->tinh_tien_phat();
        $tientrocap = $nhanvien->tinh_tien_tro_cap();

        echo "<h3>Kết quả tính lương:</h3>";
        echo "Họ và tên: " . $nhanvien->getHoTen() . "<br>";
        echo "Giới tính: " . $nhanvien->getGioiTinh() . "<br>";
        echo "Ngày vào làm: " . $nhanvien->getNgayVaoLam() . "<br>";
        echo "Hệ số lương: " . $nhanvien->getHeSoLuong() . "<br>";
        echo "Số con: " . $nhanvien->getSoCon() . "<br>";
        echo "Tiền lương: " . number_format($tienluong) . " VND<br>";
        echo "Tiền thưởng: " . number_format($tienthuong) . " VND<br>";
        echo "Tiền phạt: " . number_format($tienphat) . " VND<br>";
        echo "Tiền trợ cấp: " . number_format($tientrocap) . " VND<br>";
        echo "Thực lĩnh: " . number_format($tienluong + $tienthuong - $tienphat + $tientrocap) . " VND<br>";
      } elseif ($loainhanvien == "sanxuat") {
        $nhanvien = new NhanVienSanXuat();
        $nhanvien->setHoTen($hoten);
        $nhanvien->setGioiTinh($gioitinh);
        $nhanvien->setNgayVaoLam($ngayvaolam);
        $nhanvien->setHeSoLuong($hesoluong);
        $nhanvien->setSoCon($socon);

        $tienluong = $nhanvien->tinh_tien_luong();
        $tienthuong = $nhanvien->tinh_tien_thuong();
        $tientrocap = $nhanvien->tinh_tien_tro_cap();
        echo "<h3>Kết quả tính lương:</h3>";
        echo "Họ và tên: " . $nhanvien->getHoTen() . "<br>";
        echo "Giới tính: " . $nhanvien->getGioiTinh() . "<br>";
        echo "Ngày vào làm: " . $nhanvien->getNgayVaoLam() . "<br>";
        echo "Hệ số lương: " . $nhanvien->getHeSoLuong() . "<br>";
        echo "Số con: " . $nhanvien->getSoCon() . "<br>";
        echo "Tiền lương: " . number_format($tienluong) . " VND<br>";
        echo "Tiền thưởng: " . number_format($tienthuong) . " VND<br>";
        echo "Tiền trợ cấp: " . number_format($tientrocap) . " VND<br>";
        echo "Thực lĩnh: " . number_format($tienluong + $tienthuong + $tientrocap) . " VND<br>";
      }
    }
  ?>
</body>
</html>