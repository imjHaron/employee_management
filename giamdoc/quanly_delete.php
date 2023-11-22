<?php 
session_start();
if (isset($_SESSION['giamdoc_id']) && isset($_SESSION['role']) && isset($_GET['quanly_id'])) {

  if ($_SESSION['role'] == 'GiamDoc') {
     include "../database_connect.php";
     include "data/quanly.php";

     $id = $_GET['quanly_id'];
     if (removeQuanLy($id, $conn)) {
        $sm = "Xóa thành công quản lý";
        header("Location: quanly.php?success=$sm");
        exit;
     }else {
        $em = "Unknown error occurred";
        header("Location: quanly.php?error=$em");
        exit;
     }


  }else {
    header("Location: quanly.php");
    exit;
  } 
}else {
    header("Location: quanly.php");
    exit;
} 