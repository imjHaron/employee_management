<?php 
session_start();
if (isset($_SESSION['giamdoc_id']) && 
    isset($_SESSION['role'])) {

    if ($_SESSION['role'] == 'GiamDoc') {
    	

if (isset($_POST['khuvuc']) &&
    isset($_POST['khuvuc_id'])) {
    
    include '../../database_connect.php';

    $khuvuc = $_POST['khuvuc'];
    $khuvuc_id = $_POST['khuvuc_id'];

   
    $data = 'khuvuc_id='.$khuvuc_id;

    if (empty($khuvuc)) {
        $em  = "Khu vực không được để trống";
        header("Location: ../khuvuc_edit.php?error=$em&$data");
        exit;
    }else {

        $sql  = "UPDATE khuvuc SET khuvuc = ? WHERE khuvuc_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$khuvuc, $khuvuc_id]);
        $sm = "Sửa khu vực thành công";
        header("Location: ../khuvuc_edit.php?success=$sm&$data");
        exit;
	}
    
  }else {
  	$em = "Có lỗi xảy ra";
    header("Location: ../khuvuc.php?error=$em");
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
