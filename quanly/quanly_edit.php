<?php 
session_start();
if (isset($_SESSION['quanly_id']) && 
    isset($_SESSION['role'])) {

    if ($_SESSION['role'] == 'QuanLy') {
        include "../database_connect.php";
        include "data/quanly.php";

        $quanly_id = $_SESSION['quanly_id'];
        $quanly = getquanlyById($quanly_id, $conn);

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../logo.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <?php 
        include "include/navbar.php";
    ?>
    <div class="container mt-5">
        

        <form method="post" class="shadow p-3 mt-5 form-w" action="req/quanly_edit.php">
        <h3>Sửa thông tin</h3><hr>
        <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger" role="alert">
            <?=$_GET['error']?>
        </div>
        <?php } ?>
        <?php if (isset($_GET['success'])) { ?>
        <div class="alert alert-success" role="alert">
            <?=$_GET['success']?>
        </div>
        <?php } ?>
        <div class="mb-3">
            <label class="form-label">Họ</label>
            <input type="text" class="form-control" value="<?=$quanly['fname']?>" name="fname">
        </div>
        <div class="mb-3">
            <label class="form-label">Tên</label>
            <input type="text" class="form-control" value="<?=$quanly['lname']?>" name="lname">
        </div>
        <div class="mb-3">
           <label class="form-label">Giới tính</label><br>
           <input type="radio" value="Nam" <?php if($quanly['gioitinh'] == 'Nam') echo 'checked';?> name="gioitinh">Nam
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <input type="radio" value="Nữ"
                <?php if($quanly['gioitinh'] == 'Nữ') echo 'checked';?> name="gioitinh">Nữ
        </div>
        <div class="mb-3">
            <label class="form-label">Ngày sinh</label>
            <input type="date" class="form-control" value="<?=$quanly['ngaysinh']?>" name="ngaysinh">
        </div>
        <div class="mb-3">
            <label class="form-label">Địa chỉ</label>
            <input type="text" class="form-control" value="<?=$quanly['diachi']?>" name="diachi">
        </div>
        <div class="mb-3">
            <label class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" value="<?=$quanly['sdt']?>" name="sdt">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" value="<?=$quanly['email']?>" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Căn cước công dân</label>
            <input type="text" class="form-control" value="<?=$quanly['cccd']?>" name="cccd">
        </div>
        <div class="mb-3">
            <label class="form-label">Ngày vào làm</label>
            <input type="date" class="form-control" value="<?=$quanly['ngayvaolam']?>" name="ngayvaolam">
        </div>

        <input type="text" value="<?=$quanly['quanly_id']?>" name="quanly_id" hidden>
             

        <button type="submit" class="btn btn-primary">Cập nhập</button>
        <a href="index.php" class="btn btn-dark">Quay lại</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>    
    <script>
        $(document).ready(function(){
             $("#navLinks li:nth-child(2) a").addClass('active');
        });
    </script>
</body>
</html>
<?php 

  }else {
    header("Location: quanly.php");
    exit;
  } 
}else {
    header("Location: quanly.php");
    exit;
} 

?>