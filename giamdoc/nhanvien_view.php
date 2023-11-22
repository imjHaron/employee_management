<?php 
session_start();
if (isset($_SESSION['giamdoc_id']) && 
    isset($_SESSION['role'])) {

    if ($_SESSION['role'] == 'GiamDoc') {
       include "../database_connect.php";
       include "data/nhanvien.php";
       include "data/calamviec.php";
       include "data/phancong.php";
       include "data/khuvuc.php";

       if(isset($_GET['nhanvien_id'])){

       $nhanvien_id = $_GET['nhanvien_id'];

       $nhanvien = getnhanvienById($nhanvien_id,$conn);    
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giám đốc - Xem Chi Tiết</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <?php 
        include "include/navbar.php";
        if ($nhanvien != 0) {
     ?>
     <div class="container mt-5">
        <div class="card" style="width: 22rem;">
            <img src="../img/anh_<?=$nhanvien['gioitinh']?>.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title text-center">@<?=$nhanvien['username']?></h5>
        </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Họ: <?=$nhanvien['fname']?></li>

            <li class="list-group-item">Tên: <?=$nhanvien['lname']?></li>
            
            <li class="list-group-item">Giới Tính: <?=$nhanvien['gioitinh']?></li>
            <li class="list-group-item">Địa chỉ: <?=$nhanvien['diachi']?></li>
            <li class="list-group-item">Email: <?=$nhanvien['email']?></li>
            <li class="list-group-item">Ngày Sinh: <?=$nhanvien['ngaysinh']?></li>
            <li class="list-group-item">Ngày Vào Làm: <?=$nhanvien['ngayvaolam']?></li>
            <li class="list-group-item">SĐT: <?=$nhanvien['sdt']?></li>
            <li class="list-group-item">CCCD: <?=$nhanvien['cccd']?></li>
            <li class="list-group-item">Phân công: <?php 
                                $pc = '';
                                $phancong_ids = explode(',', $nhanvien['phancong_id']);

                                foreach ($phancong_ids as $phancong_id) {
                                    $phancong = getPhanCongById($phancong_id, $conn);

                                    if ($phancong) {
                                        $calamviec = getCaLamViecById($phancong['calamviec'], $conn);
                                        $khuvuc = getKhuVucById($phancong['khuvuc'], $conn);
                                        if ($calamviec && $khuvuc) {
                                            $pc .= $calamviec['calamviec'] . '_' . $khuvuc['khuvuc'];
                                        }
                                    }
                                }
                                echo $pc;
                                ?>
            </li>
          </ul>
          <div class="card-body">
            <a href="nhanvien.php" class="btn btn-dark">Quay lại</a>
          </div>
        </div>
     </div>
     <?php 
        }else {
          header("Location: nhanvien.php");
          exit;
        }
     ?>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>    
    <script>
        $(document).ready(function(){
             $("#navLinks li:nth-child(3) a").addClass('active');
        });
    </script>

</body>
</html>
<?php 

    }else {
        header("Location: nhanvien.php");
        exit;
    }

  }else {
    header("Location: ../login.php");
    exit;
  } 
}else {
    header("Location: ../login.php");
    exit;
} 

?>