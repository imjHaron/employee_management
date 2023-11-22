<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$database = "qlbansua";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Lỗi kết nối đến cơ sở dữ liệu: " . $conn->connect_error);
}

// Lấy thông tin đăng nhập từ biểu mẫu
$taikhoan = $_POST['taikhoan'];
$matkhau = $_POST['matkhau'];

// Truy vấn cơ sở dữ liệu để kiểm tra đăng nhập
$sql = "SELECT * FROM user WHERE taikhoan = '$taikhoan' AND matkhau = '$matkhau'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Đăng nhập thành công
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['taikhoan'] = $taikhoan; // Đặt tên tài khoản trong phiên
    header("Location: qlsua/u_index.php");
} else {
    // Đăng nhập không thành công
    echo "Sai tài khoản hoặc mật khẩu. <a href='login.php'>Thử lại</a>";
}

$conn->close();
?>
