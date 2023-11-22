<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Website Bếp Nhà Heo</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="img/logo/logo_website.png">
</head>
<body class="body-login">
    <div class="black-fill"><br /> <br />
    	<div class="d-flex justify-content-center align-items-center flex-column">
    	<form class="login" method="post" action="req/login.php">
    		<div class="text-center">
    			<img src="img/logo/logo_website.png" width="100">
    		</div>
    		<h3>Đăng nhập</h3>
    		<?php if (isset($_GET['error'])) { ?>
    		<div class="alert alert-danger" role="alert">
    		<div class="alert alert-danger" role="alert">
			  <?=$_GET['error']?>
			</div>
			<?php } ?>
		  	<div class="mb-3">
			    <label class="form-label">Tài khoản</label>
			    <input type="text" class="form-control" name="uname">
		  	</div>
		  
		  	<div class="mb-3">
			    <label class="form-label">Mật khẩu</label>
			    <input type="password" class="form-control" name="pass">
		  	</div>

		  	<div class="mb-3">
			    <label class="form-label">Đăng nhập với vai trò</label>
			    <select class="form-control" name="role">
			    	<option value="1">Giám đốc</option>
			    	<option value="2">Quản lý</option>
			    	<option value="3">Nhân viên</option>
		    	</select>
		  	</div>

		  	<button type="submit" class="btn btn-primary" id="login-button">Đăng nhập</button>
		  	<a href="index.php" class="btn btn-primary">Trang chủ</a>
		</form>
        
        <br /><br />
    	</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>	
</body>
</html>