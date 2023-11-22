<?php 
session_start();
if (isset($_SESSION['giamdoc_id']) && isset($_SESSION['role'])) {
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giám đốc - Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/../css/style.css">
    <link rel="icon" href="../img/logo/logo_website.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="body-index">
    <?php 
        include "include/navbar.php";
    ?>
    <div class="container mt-5">
        <div class="container text-center">
            <div class="row row-cols-5">
                <a href="quanly.php" 
                  class="col btn btn-dark m-2 py-3">
                    <i class="fa-solid fa-user fs-1" aria-hidden="true"></i><br>
                    Quản lý
                </a> 
                <a href="nhanvien.php" class="col btn btn-dark m-2 py-3">
                    <i class="fa-solid fa-users fs-1" aria-hidden="true"></i><br>
                    Nhân viên
                </a>
                <a href="calamviec.php" class="col btn btn-dark m-2 py-3">
                    <i class="fa fa-book fs-1" aria-hidden="true"></i><br>
                    Ca làm việc
                </a>
                <a href="khuvuc.php" class="col btn btn-dark m-2 py-3">
                    <i class="fa-solid fa-map fs-1" aria-hidden="true"></i><br>
                    Khu vực
                </a> 
                <a href="phancong.php" class="col btn btn-success m-2 py-3 col-5">
                    <i class="fa-solid fa-briefcase fs-1" aria-hidden="true"></i><br>
                    Phân công
                </a>  
<!--                 <a href="luong.php" class="col btn btn-success m-2 py-3">
                    <i class="fa-solid fa-money-bill-wave fs-1" aria-hidden="true"></i><br>
                    Lương
                </a>   -->             
                <a href="../logout.php" class="col btn btn-warning m-2 py-3 col-5">
                    <i class="fa-solid fa-right-from-bracket fs-1" aria-hidden="true"></i><br>
                    Đăng xuất
               </a> 
             </div>
         </div>
     </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>    
    <script>
        $(document).ready(function(){
            $("#navLinks li:nth-child(1) a").addClass('active');
        });
    </script>

</body>
</html>
<?php }else {
    header("Location: login.php");
    exit;
} ?>