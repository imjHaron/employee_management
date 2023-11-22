<?php 
session_start();
if (isset($_SESSION['giamdoc_id']) && 
    isset($_SESSION['role'])) {

    if ($_SESSION['role'] == 'GiamDoc') {
      
       $calamviec = '';

       if (isset($_GET['calamviec'])) $calamviec = $_GET['calamviec'];

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Giám đốc - Thêm Ca Làm Việc</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="icon" href="../logo.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php 
        include "include/navbar.php";
     ?>
     <div class="container mt-5">
        
        <form method="post" class="shadow p-3 mt-5 form-w" action="req/calamviec_add.php">
        <h3>Thêm Mới Ca Làm Việc</h3><hr>
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
            <label class="form-label">Ca Làm Việc</label>
            <input type="text" class="form-control" value="<?=$calamviec?>" name="calamviec">
        </div>
      <button type="submit" class="btn btn-primary">Tạo</button>
      <a href="calamviec.php" class="btn btn-dark">Quay Lại</a>

     </form>
     </div>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>	
    <script>
        $(document).ready(function(){
            $("#navLinks li:nth-child(4) a").addClass('active');
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