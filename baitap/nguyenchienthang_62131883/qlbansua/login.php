<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="qlsua/css/login_style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
 
    <title>Đăng nhập</title>
</head>
<body>
    <a href="login.php" class="button">Đăng nhập</a>
    <a href="register.php" class="button">Đăng ký</a>
    <?php echo "<a href='../../../index.php'>Back</a></div>"; ?>
    <div id="wrapper">

        <form method="POST" action="process_login.php" id="form-login">
            <h1 class="form-heading">Đăng nhập</h1>
            <h4 class="form-heading">TK: jharon | MK: 123</h4>
                <div class="form-group">
                    <input type="text" name="taikhoan" required>
                    <label for="">Tài khoản</label>
                </div>
                <div class="form-group">
                    <input type="password" name="matkhau" required>
                    <label for="">Mật khẩu</label>
                </div>
                <input type="submit" value="Đăng nhập" id="btn-login">
        </form>
    </div>
</body>
</html>
