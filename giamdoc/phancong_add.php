<?php
session_start();
if (isset($_SESSION['giamdoc_id']) && isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 'GiamDoc') {
        include '../database_connect.php';
        include 'data/calamviec.php';
        include 'data/khuvuc.php';
        $calamviecs = getAllCalamviecs($conn);
        $khuvucs = getAllKhuvucs($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giám đốc - Thêm phân công</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../logo.png">
    <script src="https://ajax.googleapis.com/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css">
</head>
<body>
    <?php
    include "include/navbar.php";
    if ($calamviecs == 0 || $khuvucs == 0) {
        ?>
        <div class="alert alert-info" role="alert">
        </div>
        <a href="phancong.php" class="btn btn-dark">Quay Lại</a>
    <?php } ?>

    <div class="container mt-5">
        
        <form method="post" class="shadow p-3 mt-5 form-w" action="req/phancong_add.php">
            <h3>Thêm Phân Công</h3>
            <hr>
            <?php if (isset($_GET['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $_GET['error'] ?>
                </div>
            <?php } ?>
            <?php if (isset($_GET['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?= $_GET['success'] ?>
                </div>
            <?php } ?>
            <div class="mb-3">
                <label class="form-label">Ca Làm Việc</label>
                <select name="calamviec" class="form-control">
                    <?php foreach ($calamviecs as $calamviec) { ?>
                        <option value="<?= $calamviec['calamviec_id'] ?>">
                            <?=$calamviec['calamviec'] ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Khu Vực</label>
                <select name="khuvuc" class="form-control">
                    <?php foreach ($khuvucs as $khuvuc) { ?>
                        <option value="<?= $khuvuc['khuvuc_id'] ?>">
                            <?= $khuvuc['khuvuc'] ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Tạo</button>
            <a href="phancong.php" class="btn btn-dark">Quay lại</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#navLinks li:nth-child(6) a").addClass('active');
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