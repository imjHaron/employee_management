<?php 
session_start();
if (isset($_SESSION['giamdoc_id']) && 
    isset($_SESSION['role'])) {

    if ($_SESSION['role'] == 'GiamDoc') {
      
        include "../database_connect.php";
        include "data/calamviec.php";
        include "data/khuvuc.php";
        include "data/phancong.php";

        $phancongs = getAllPhancongs($conn);



       $fname = '';
       $lname = '';
       $gioitinh = '';
       $diachi = '';
       $email = '';
       $sdt = '';
       $cccd = '';
       $ngaysinh = '';

       if (isset($_GET['fname'])) $fname = $_GET['fname'];
       if (isset($_GET['lname'])) $lname = $_GET['lname'];
       if (isset($_GET['gioitinh'])) $gioitinh = $_GET['gioitinh'];
       if (isset($_GET['diachi'])) $diachi = $_GET['diachi'];
       if (isset($_GET['email'])) $email = $_GET['email'];
       if (isset($_GET['ngaysinh'])) $ngaysinh = $_GET['ngaysinh'];
       if (isset($_GET['ngayvaolam'])) $ngayvaolam = $_GET['ngayvaolam'];
       if (isset($_GET['sdt'])) $sdt = $_GET['sdt'];
       if (isset($_GET['cccd'])) $cccd = $_GET['cccd'];

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giám đốc - Thêm Nhân Viên</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="icon" href="../logo.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php 
        include "include/navbar.php";
     ?>
     <div class="container mt-5">
        

        <form method="post"
              class="shadow p-3 mt-5 form-w" 
              action="req/nhanvien_add.php">
        <h3>Thêm Nhân Viên</h3><hr>
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
            <input type="text" class="form-control" value="<?=$fname?>" name="fname">
        </div>
        <div class="mb-3">
            <label class="form-label">Tên</label>
            <input type="text" class="form-control" value="<?=$lname?>" name="lname">
        </div>
        <div class="mb-3">
            <label class="form-label">Giới Tính</label><br>
            <input type="radio" value="Nam" checked name="gioitinh"> Nam
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" value="Nữ"name="gioitinh"> Nữ
        </div>
        <div class="mb-3">
            <label class="form-label">Địa chỉ</label>
            <input type="text" class="form-control" value="<?=$diachi?>" name="diachi">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" value="<?=$email?>" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Ngày Sinh</label>
            <input type="date" class="form-control" value="" name="ngaysinh">
        </div>
        <div class="mb-3">
            <label class="form-label">Ngày Vào Làm</label>
            <input type="date" class="form-control" value="" name="ngayvaolam">
        </div>
        <div class="mb-3">
            <label class="form-label">SĐT</label>
            <input type="text" class="form-control" value="<?=$sdt?>" name="sdt">
        </div>
        <div class="mb-3">
            <label class="form-label">CCCD</label>
            <input type="text" class="form-control" value="<?=$cccd?>" name="cccd">
        </div>
        <div class="mb-3">
          <label class="form-label">Phân công</label>
          <div class="row row-cols-5">
            <?php foreach ($phancongs as $phancong): ?>
            <div class="col">
                <input type="checkbox" name="phancongs[]" value="<?=$phancong['phancong_id']?>">
                    <?php 
                        $calamviec = getCaLamViecById($phancong['calamviec'], $conn); 
                        $khuvuc = getKhuVucById($phancong['khuvuc'], $conn); 
                    ?>
                    <?=$calamviec['calamviec']?>-<?=$khuvuc['khuvuc']?>
            </div>
            <?php endforeach ?>
             
          </div>
        </div>

      <button type="submit" class="btn btn-primary">Thêm</button>
      <a href="nhanvien.php" class="btn btn-dark">Quay Lại</a>
     </form>
     </div>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>  
    <script>
        $(document).ready(function(){
            $("#navLinks li:nth-child(3) a").addClass('active');
        });
    </script>

</body>
</html>
<?php 

  }else {
    header("Location: ../login.php");
    exit;
  } 
}else {
  header("Location: ../login.php");
  exit;
} 

?>