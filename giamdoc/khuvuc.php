<?php 
session_start();
if (isset($_SESSION['giamdoc_id']) && isset($_SESSION['role'])) {

    if ($_SESSION['role'] == 'GiamDoc') {
       include "../database_connect.php";
       include "data/khuvuc.php";
       $khuvucs = getAllKhuvucs($conn);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Giám đốc - Danh sách khu vực</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css">
    <link rel="icon" href="../img/logo/logo_website.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <?php 
        include "include/navbar.php";
        if ($khuvucs != 0) {
    ?>
    <div class="container mt-5">
        <a href="khuvuc_add.php"
           class="btn btn-dark">Thêm khu vực </a>

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
                            <th scope="col">STT</th>
                            <th scope="col">Khu vực</th>
                            <th scope="col">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 0; foreach ($khuvucs as $khuvuc ) { $i++; ?>
                    <tr>
                        <th scope="row"><?=$i?></th>
                        <td> <?= $khuvuc['khuvuc'] ?> </td>
                        <td>
                            <a href="khuvuc_edit.php?khuvuc_id=<?=$khuvuc['khuvuc_id']?>" class="btn btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="khuvuc_delete.php?khuvuc_id=<?=$khuvuc['khuvuc_id']?>" class="btn btn-danger">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                        </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
            <?php }else{ ?>
            <div class="alert alert-info .w-450 m-5" role="alert">
                Trống!
            </div>
            <?php } ?>
    </div>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>	
    <script>
        $(document).ready(function(){
            $("#navLinks li:nth-child(5) a").addClass('active');
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