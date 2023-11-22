<?php 
session_start();
if (isset($_SESSION['giamdoc_id']) && isset($_SESSION['role']) && isset($_GET['nhanvien_id'])) {

  if ($_SESSION['role'] == 'GiamDoc') {
     include "../database_connect.php";
     include "data/nhanvien.php";

     $id = $_GET['nhanvien_id'];
     if (removeNhanVien($id, $conn)) {
     	$sm = "Xóa thành công nhân viên";
        header("Location: nhanvien.php?success=$sm");
        exit;
     }else {
        $em = "Có lỗi xảy ra";
        header("Location: nhanvien.php?error=$em");
        exit;
     }


  }else {
    header("Location: nhanvien.php");
    exit;
  } 
}else {
	header("Location: nhanvien.php");
	exit;
} 