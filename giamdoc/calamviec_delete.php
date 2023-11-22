<?php 
session_start();
if (isset($_SESSION['giamdoc_id']) && isset($_SESSION['role']) && isset($_GET['calamviec_id'])) {

  if ($_SESSION['role'] == 'GiamDoc') {
     include "../database_connect.php";
     include "data/calamviec.php";

     $id = $_GET['calamviec_id'];
     if (removeCaLamViec($id, $conn)) {
        $sm = "Xóa thành công ca làm việc";
        header("Location: calamviec.php?success=$sm");
        exit;
     }else {
        $em = "Unknown error occurred";
        header("Location: calamviec.php?error=$em");
        exit;
     }


  }else {
    header("Location: calamviec.php");
    exit;
  } 
}else {
    header("Location: calamviec.php");
    exit;
} 