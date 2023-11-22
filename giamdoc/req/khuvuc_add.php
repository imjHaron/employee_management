<?php 
session_start();
if (isset($_SESSION['giamdoc_id']) && 
    isset($_SESSION['role'])) {

    if ($_SESSION['role'] == 'GiamDoc') {
    	

if (isset($_POST['khuvuc'])) {
    
    include '../../database_connect.php';

    $khuvuc = $_POST['khuvuc'];
    
  if (empty($khuvuc)) {
		$em  = "Khu vực không được để trống";
		header("Location: ../khuvuc_add.php?error=$em");
		exit;
	}else {
        $sql  = "INSERT INTO khuvuc (khuvuc) VALUES(?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$khuvuc]);
        $sm = "Thêm khu vực mới thành công";
        header("Location: ../khuvuc_add.php?success=$sm");
        exit;
	}
    
  }else {
  	$em = "Có lỗi xảy ra";
    header("Location: ../khuvuc_add.php?error=$em");
    exit;
  }

  }else {
    header("Location: ../../logout.php");
    exit;
  } 
}else {
	header("Location: ../../logout.php");
	exit;
} 
