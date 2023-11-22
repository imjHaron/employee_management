<?php 
session_start();
if (isset($_SESSION['giamdoc_id']) && 
    isset($_SESSION['role'])) {

    if ($_SESSION['role'] == 'GiamDoc') {
        

    if (isset($_POST['fname']) &&
    isset($_POST['lname']) &&
    isset($_POST['gioitinh']) &&
    isset($_POST['diachi'])  &&
    isset($_POST['email']) &&
    isset($_POST['ngaysinh'])  &&
    isset($_POST['ngayvaolam']) &&
    isset($_POST['sdt']) &&
    isset($_POST['cccd']) &&
    isset($_POST['phancongs'])){
    
    include '../../database_connect.php';
    include "../data/quanly.php";

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gioitinh = $_POST['gioitinh'];
    $diachi = $_POST['diachi'];
    $email = $_POST['email'];
    $ngaysinh = $_POST['ngaysinh'];
    $ngayvaolam = $_POST['ngayvaolam'];
    $sdt = $_POST['sdt'];
    $cccd = $_POST['cccd'];

    $phancongs = "";
    foreach ($_POST['phancongs'] as $phancong) {
        $phancongs .=$phancong;
    }

    $data = '&fname='.$fname.'&lname='.$lname.'&gioitinh='.$gioitinh.'&diachi='.$diachi.'&email='.$email.'&sdt='.$sdt.'&cccd='.$cccd;

    if (empty($fname)) {
        $em  = "Họ không được để trống";
        header("Location: ../quanly_add.php?error=$em&$data");
        exit;
    }else if (empty($lname)) {
        $em  = "Tên không được để trống";
        header("Location: ../quanly_add.php?error=$em&$data");
        exit;
    }else if (empty($diachi)) {
        $em  = "Địa chỉ không được để trống";
        header("Location: ../quanly_add.php?error=$em&$data");
        exit;
    }else if (empty($gioitinh)) {
        $em  = "Giới tính không được để trống";
        header("Location: ../quanly_add.php?error=$em&$data");
        exit;
    }else if (empty($email)) {
        $em  = "Email không được để trống";
        header("Location: ../quanly_add.php?error=$em&$data");
        exit;
    }else if (empty($sdt)) {
        $em  = "SĐT không được để trống";
        header("Location: ../quanly_add.php?error=$em&$data");
        exit;
    }else if (empty($cccd)) {
        $em  = "CCCD không được để trống";
        header("Location: ../quanly_add.php?error=$em&$data");
        exit;
    }else if (empty($ngaysinh)) {
        $em  = "Ngày sinh không được để trống";
        header("Location: ../quanly_add.php?error=$em&$data");
        exit;
    }else if (empty($ngayvaolam)) {
        $em  = "Ngày vào làm không được để trống";
        header("Location: ../quanly_add.php?error=$em&$data");
        exit;
    }else {
        $sql  = "INSERT INTO
                 quanlys(fname, lname, gioitinh, diachi, email, ngaysinh, ngayvaolam, sdt, cccd, phancong_id)
                 VALUES(?,?,?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$fname, $lname, $gioitinh, $diachi, $email, $ngaysinh, $ngayvaolam, $sdt, $cccd, $phancongs]);
        $sm = "Thêm quản lý mới thành công!";
        header("Location: ../quanly_add.php?success=$sm");
        exit;
    }
    
  }else {
    $em = "Có lỗi xảy ra";
    header("Location: ../quanly_add.php?error=$em");
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
