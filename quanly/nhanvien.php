<?php 
session_start();
if (isset($_SESSION['quanly_id']) && isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 'QuanLy') {
        include "../database_connect.php";
        include "data/nhanvien.php";
        include "data/phancong.php";
        include "data/calamviec.php";
        include "data/khuvuc.php";
        $nhanviens = getAllnhanviens($conn);

        $perPage = 5; // Số nhân viên trên mỗi trang
        if (isset($_GET['page'])) {
            $currentPage = $_GET['page'];
        } else {
            $currentPage = 1;
        }
        
        $start = ($currentPage - 1) * $perPage;
        
        $nhanviens = getNhanViensByPage($start, $perPage, $conn);
        
        $totalNhanViens = countAllNhanViens($conn);
        $totalPages = ceil($totalNhanViens / $perPage);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý - Danh sách nhân viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css">
    <link rel="icon" href="../img/logo/logo_website.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <?php 
        include "include/navbar.php";
    ?>
     <div class="container mt-5">   
        
        <form action="nhanvien_search.php" class="mt-3 n-table" method="get">
            <div class="input-group mb-3">
            <input type="text" class="form-control" name="searchKey" placeholder="Tìm kiếm...">
                <button class="btn btn-primary">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </div>
        </form>
        <div class="table-responsive">
            <table class="table table-bordered mt-3 n-table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Họ</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Ngày sinh</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Ngày vào làm</th>
                        <th scope="col">Phân công</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                  <tbody>
                <?php
                $i = 0;
                foreach ($nhanviens as $nhanvien) {
                    $i++;
                    ?>
                    <tr>        
                        <th scope="row"><?=$i?></th>
                        <td><?= $nhanvien['fname'] ?></td>
                        <td><?= $nhanvien['lname'] ?></td>
                        <td><?= $nhanvien['gioitinh'] ?></td>
                        <td><?= $nhanvien['ngaysinh'] ?></td>
                        <td><?= $nhanvien['diachi'] ?></td>
                        <td><?= $nhanvien['ngayvaolam'] ?></td>

                        <td>
                            <?php
                            $nhanvien_id = $nhanvien['nhanvien_id'];
                            $phancong_ids = explode(',', trim($nhanvien['phancong_id']));

                            // Kiểm tra và gán giá trị cho biến $phancongs
                            if (!empty($phancong_ids)) {
                                $phancongs = array();
                                foreach ($phancong_ids as $phancong_id) {
                                    $phancong = getPhanCongById($phancong_id, $conn);
                                    if ($phancong !== 0) {
                                        $phancongs[] = $phancong;
                                    }
                                }

                                if (!empty($phancongs)) {
                                    foreach ($phancongs as $phancong) {
                                        $phancong_id = $phancong['phancong_id'];
                                        $c_temp = getCaLamViecById($phancong['calamviec'], $conn);
                                        $khuvuc = getKhuVucById($phancong['khuvuc'], $conn);
                                        
                                        echo $c_temp['calamviec'].' - '.$khuvuc['khuvuc'].'<br>';
                                    }
                                } else {
                                    echo "Không có phân công";
                                }
                            }
                            ?>
                        </td>
                        
                        <td>
                            <a href="nhanvien_edit.php?nhanvien_id=<?= $nhanvien['nhanvien_id'] ?>" class="btn btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                <?php
                }
                ?>
                </tbody>
              </table>
         </div>
     <div class="pagination-container d-flex justify-content-center">
    <ul class="pagination">
        <?php
        for ($page = 1; $page <= $totalPages; $page++) {
            echo '<li class="page-item';
            if ($page == $currentPage) {
                echo ' active';
            }
            echo '"><a class="page-link" href="?page=' . $page . '">' . $page . '</a></li>';
        }
        ?>
    </ul>
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