<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register_style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Đăng ký</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $taikhoan = $_POST["taikhoan"];
    $matkhau = $_POST["matkhau"];
    $uname = $_POST["uname"];
    $email = $_POST["email"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "qlbansua";
    
    $conn = new mysqli($servername, $username, $password, $database);
    
    if ($conn->connect_error) {
        die("Lỗi kết nối đến cơ sở dữ liệu: " . $conn->connect_error);
    }
    
    // Thực hiện truy vấn để kiểm tra tài khoản đã tồn tại chưa
    $check_query = "SELECT * FROM user WHERE taikhoan='$taikhoan'";
    $check_result = $conn->query($check_query);

    if ($check_result->num_rows > 0) {
        echo "Tài khoản đã tồn tại. Vui lòng chọn tài khoản khác.";
    } else {
        // Thêm người dùng vào cơ sở dữ liệu
        $insert_query = "INSERT INTO user (taikhoan, matkhau, uname, email) VALUES ('$taikhoan', '$matkhau', '$uname', '$email')";
        
        if ($conn->query($insert_query) === TRUE) {
            echo "Đăng ký thành công!";
        } else {
            echo "Lỗi khi đăng ký: " . $conn->error;
        }
    }

    $conn->close();
}
?>
    <a href="login.php" class="button">Đăng nhập</a>
    <a href="register.php" class="button">Đăng ký</a>
    <div id="wrapper">

        <form method="POST" action="" id="form-register">
            <h1 class="form-heading">Đăng ký</h1>
                <div class="form-group">
                    <input type="text" name="taikhoan" required>
                    <label for="">Tài khoản</label>
                </div>
                <div class="form-group">
                    <input type="password" name="matkhau" required>
                    <label for="">Mật khẩu</label>
                </div>
                <div class="form-group">
                    <input type="text" name="uname" required>
                    <label for="">Tên muốn được kêu</label>
                </div> 
                <div class="form-group">
                    <input type="text" name="email" required>
                    <label for="">Email</label>
                </div>
                <input type="submit" value="Đăng ký" id="btn-register">
        </form>
    </div>
</body>
</html>
