<?php 
session_start();
if (isset($_SESSION['giamdoc_id']) && 
    isset($_SESSION['role'])) {

    if ($_SESSION['role'] == 'GiamDoc') {
    	

if (isset($_POST['calamviec']) &&
    isset($_POST['calamviec_id'])) {
    
    include '../../database_connect.php';

    $calamviec = $_POST['calamviec'];
    $calamviec_id = $_POST['calamviec_id'];
   
    $data = '&calamviec='.$calamviec.'&calamviec_id='.$calamviec_id;

    if (empty($calamviec)) {
        $em  = "Ca làm việc không được để trống";
        header("Location: ../calamviec_edit.php?error=$em&$data");
        exit;
    }else {

        $sql  = "UPDATE calamviecs SET calamviec = ? WHERE calamviec_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$calamviec, $calamviec_id]);
        $sm = "Chỉnh sửa ca làm việc thành công!";
        header("Location: ../calamviec_edit.php?success=$sm&$data");
        exit;
	}
    
  }else {
  	$em = "Có lỗi xảy ra";
    header("Location: ../calamviec.php?error=$em");
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
