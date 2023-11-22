<?php 
session_start();
if (isset($_SESSION['giamdoc_id']) && isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 'GiamDoc') {
        include '../database_connect.php';
        include 'data/phancong.php';
        include 'data/calamviec.php';
        include 'data/khuvuc.php';
        $phancongs = getAllPhancongs($conn);
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Giám đốc - Phân Công</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
            <link rel="stylesheet" href="../css/style.css">
            <link rel="icon" href="../logo.png">
            <script src="https://ajax.googleapis.com/libs/jquery/3.7.1/jquery.min.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        </head>
        <body>
            <?php include "include/navbar.php"; ?>
            <div class="container mt-5">
                <a href="phancong_add.php" class="btn btn-dark">Thêm phân công</a>
                <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-danger mt-3 n-table" role="alert">
                        <?=$_GET['error']?>
                    </div>
                <?php } ?>
                <?php if (isset($_GET['success'])) { ?>
                    <div class="alert alert-info mt-3 n-table" role="alert">
                        <?=$_GET['success']?>
                    </div>
                <?php } ?>
                <div class="table-responsive">
                    <table class="table table-bordered mt-3 n-table">
                        <thead>
                            <tr>
                                <th scope="col">Mã phân công</th>
                                <th scope="col">Phân công</th>
                                <th scope="col">Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; foreach ($phancongs as $phancong) { 
                                $i++;  ?>
                                <tr>
                                    <th> <?= $phancong['phancong_id'] ?></th>
                                    <td>
                                        <?php 
                                            $calamviec = getCaLamViecById($phancong['calamviec'], $conn);
                                            $khuvuc = getKhuVucById($phancong['khuvuc'], $conn); 
                                            echo $calamviec['calamviec'].' - '.$khuvuc['khuvuc'];
                                        ?>
                                    </td>
                                    <td>
                                        <a href="phancong_delete.php?phancong_id=<?=$phancong['phancong_id']?>" class="btn btn-danger">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>    
            <script>
                $(document).ready(function(){
                    $("#navLinks li:nth-child(6) a").addClass('active');
                });
            </script>
        </body>
        </html>
        <?php 
    } else {
        header("Location: ../login.php");
        exit;
    } 
} else {
    header("Location: ../login.php");
    exit;
} 
?>
