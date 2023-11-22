<?php 
session_start();
if (isset($_SESSION['giamdoc_id']) && isset($_SESSION['role']) && isset($_GET['khuvuc_id'])) {

  if ($_SESSION['role'] == 'GiamDoc') {
     include "../database_connect.php";
     include "data/khuvuc.php";

     $id = $_GET['khuvuc_id'];
     if (removeKhuVuc($id, $conn)) {
        $sm = "Xóa thành công khu vực";
        header("Location: khuvuc.php?success=$sm");
        exit;
     }else {
        $em = "Unknown error occurred";
        header("Location: khuvuc.php?error=$em");
        exit;
     }


  }else {
    header("Location: khuvuc.php");
    exit;
  } 
}else {
    header("Location: khuvuc.php");
    exit;
} 