<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$database = "qlbansua";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Lỗi kết nối đến cơ sở dữ liệu: " . $conn->connect_error);
}

// Lấy thông tin người dùng
$taikhoan = $_SESSION['taikhoan']; // Lấy tên tài khoản từ phiên đăng nhập
$sql = "SELECT uname FROM user WHERE taikhoan = '$taikhoan'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $uname = $row['uname'];
} else {
    $uname = "Không tìm thấy tên người dùng";
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Trang chính</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/u_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <h2>Chào mừng bạn đến trang chính, <?php echo $uname; ?>!</h2>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-4">
            <a href="thongTinKhachHang.php" class="btn btn-primary btn-lg btn-block">
                <i class="bi bi-person"></i> Thông Tin Khách Hàng
            </a>
        </div>
        <div class="col-md-4">
            <a href="thongTinSua.php" class="btn btn-success btn-lg btn-block">
                <i class="bi bi-box"></i> Thông Tin Sữa
            </a>
        </div>
        <div class="col-md-4">
            <a href="timKiemDonGian.php" class="btn btn-danger btn-lg btn-block">
                <i class="bi bi-search"></i> Tìm Kiếm Sữa
            </a>
        </div>
        <div class="col-md-4 mt-3">
            <a href="ds_sua_phantrang.php" class="btn btn-info btn-lg btn-block">
                <i class="bi bi-list-ul"></i> Danh Sách Sữa (Phân Trang)
            </a>
        </div>
        <div class="col-md-4 mt-3">
            <a href="uploadForm.php" class="btn btn-secondary btn-lg btn-block">
                <i class="bi bi-list-ul"></i> Thêm sữa
            </a>
        </div>
        <div class="col-md-4 mt-3">
            <a href="list_don_gian.php" class="btn btn-success btn-lg btn-block">
                <i class="bi bi-list-ul"></i> List đơn giản
            </a>
        </div>
        <div class="col-md-4 mt-3">
            <a href="list_dang_cot.php" class="btn btn-warning btn-lg btn-block">
                <i class="bi bi-list-ul"></i> List dạng cột
            </a>
        </div>
        <div class="col-md-4 mt-3">
            <a href="list_co_link.php" class="btn btn-light btn-lg btn-block">
                <i class="bi bi-list-ul"></i> List có link
            </a>
        </div>
        <div class="col-md-4 mt-3">
            <a href="list_chi_tiet_phan_trang.php" class="btn btn-dark btn-lg btn-block">
                <i class="bi bi-list-ul"></i> List chi tiết phân trang
            </a>
        </div>
        <div class="col-md-4 mt-3">
            <a href="../logout.php" class="btn btn-secondary btn-lg btn-block">
                <i class="bi bi-box-arrow-right"></i> Đăng Xuất
            </a>
        </div>
    </div>
</div>

</body>
</html>

