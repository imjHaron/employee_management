<?php 
session_start();
if (isset($_SESSION['giamdoc_id']) && isset($_SESSION['role']) && isset($_GET['phancong_id'])) {

  if ($_SESSION['role'] == 'GiamDoc') {
     include "../database_connect.php";
     include "data/phancong.php";

     $id = $_GET['phancong_id'];
     if (removePhanCong($id, $conn)) {
        $sm = "Xóa thành công phân công";
        header("Location: phancong.php?success=$sm");
        exit;
     }else {
        $em = "Unknown error occurred";
        header("Location: phancong.php?error=$em");
        exit;
     }


  }else {
    header("Location: phancong.php");
    exit;
  } 
}else {
    header("Location: phancong.php");
    exit;
} 