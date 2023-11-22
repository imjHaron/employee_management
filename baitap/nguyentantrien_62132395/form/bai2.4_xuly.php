<!DOCTYPE html>
<html>
<head>
    <title>Thông tin cá nhân</title>
</head>
<body>
    <h1>Thông tin đã nhập</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hoTen = $_POST["hoTen"];
        $diaChi = $_POST["diaChi"];
        $soDienThoai = $_POST["soDienThoai"];
        $gioiTinh = isset($_POST["gioiTinh"]) ? $_POST["gioiTinh"] : "";
        $quocTich = $_POST["quocTich"];
        $monHoc = isset($_POST["monHoc"]) ? implode(", ", $_POST["monHoc"]) : "";
        $ghiChu = $_POST["ghiChu"];

        echo "Họ tên: $hoTen<br>";
        echo "Giới tính: $gioiTinh<br>";
        echo "Địa chỉ: $diaChi<br>";
        echo "Số điện thoại: $soDienThoai<br>";
        echo "Quốc tịch: $quocTich<br>";
        echo "Môn học: $monHoc<br>";
        echo "Ghi chú: $ghiChu";
    }
    ?>
</body>
</html>
