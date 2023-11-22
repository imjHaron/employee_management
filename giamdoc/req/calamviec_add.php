<?php 
session_start();
if (isset($_SESSION['giamdoc_id']) && 
    isset($_SESSION['role'])) {

    if ($_SESSION['role'] == 'GiamDoc') {
    	

if (isset($_POST['calamviec'])) {
    
    include '../../database_connect.php';

    $calamviec = $_POST['calamviec'];
    
    $data = '&calamviec='.$calamviec;

    if (empty($calamviec)) {
        $em  = "Ca làm việc không được để trống";
        header("Location: ../calamviec_add.php?error=$em&$data");
        exit;
    } else {
        $sql  = "INSERT INTO calamviecs(calamviec) VALUES(?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$calamviec]);
        $sm = "Tạo ca làm việc mới thành công!";
        header("Location: ../calamviec_add.php?success=$sm");
        exit;
    }
    
} else {
    $em = "Có lỗi xảy ra";
    header("Location: ../calamviec_add.php?error=$em");
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
