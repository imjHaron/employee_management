<?php 
session_start();
if (isset($_SESSION['giamdoc_id']) && isset($_SESSION['role'])) {
       if ($_SESSION['role'] == 'GiamDoc') {
       if (isset($_GET['searchKey'])) {

       $search_key = $_GET['searchKey'];
       include "../database_connect.php";
       include "data/nhanvien.php";
        include "data/phancong.php";
        include "data/calamviec.php";
        include "data/khuvuc.php";
       $nhanviens = searchNhanViens($search_key, $conn);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giám đốc - Danh sách nhân viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css">
    <link rel="icon" href="../img/logo/logo_website.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <?php 
        include "include/navbar.php";
        if ($nhanviens != 0) {
     ?>
     <div class="container mt-5">
        <a href="nhanvien_add.php"
           class="btn btn-dark">Thêm Nhân Viên</a>

           <form action="nhanvien_search.php" method="get" class="mt-3 n-table">
             <div class="input-group mb-3">
                <input type="text" class="form-control" name="searchKey" value="<?=$search_key?>" placeholder="Tìm kiếm...">
                <button class="btn btn-primary">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
             </div>
           </form>


            <?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-danger mt-3 n-table" role="alert">
            <?=$_GET['error']?>
            </div>
            <?php } ?>

          <?php if (isset($_GET['success'])) { ?>
            <div class="alert alert-info mt-3 n-table" 
                 role="alert">
              <?=$_GET['success']?>
            </div>
            <?php } ?>

           <div class="table-responsive">
              <table class="table table-bordered mt-3 n-table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Họ</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Giới Tính</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Phân Công</th>
                        <th scope="col">Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                  <?php $i = 0; foreach ($nhanviens as $nhanvien ) { 
                    $i++;  ?>
                  <tr>
                        <td><?= $nhanvien['nhanvien_id'] ?></td>
                        <td><?= $nhanvien['fname'] ?></td>
                        <td><?= $nhanvien['lname'] ?></td>
                        <td><?= $nhanvien['gioitinh'] ?></td>
                        <td><?= $nhanvien['diachi'] ?></td>
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
                            <a href="nhanvien_view.php?nhanvien_id=<?= $nhanvien['nhanvien_id'] ?>" class="btn btn-info">
                                <i class="fas fa-info-circle"></i>
                            </a>
                            <a href="nhanvien_edit.php?nhanvien_id=<?= $nhanvien['nhanvien_id'] ?>" class="btn btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="nhanvien_delete.php?nhanvien_id=<?= $nhanvien['nhanvien_id'] ?>" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
            
         <?php }else{ ?>
             <div class="alert alert-info .w-450 m-5" 
                  role="alert">
                  Không tìm thấy nhân viên
                <a href="nhanvien.php"
                   class="btn btn-dark">Quay Lại</a>
              </div>
         <?php } ?>
     </div>
     
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