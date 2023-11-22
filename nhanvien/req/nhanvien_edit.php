<?php 
session_start();
if (isset($_SESSION['nhanvien_id']) && isset($_SESSION['role'])) {

    if ($_SESSION['role'] == 'NhanVien') {
        

if (isset($_POST['nhanvien_id']) &&
    isset($_POST['fname']) &&
    isset($_POST['lname']) &&
    isset($_POST['gioitinh']) &&
    isset($_POST['diachi'])  &&
    isset($_POST['email']) &&
    isset($_POST['ngaysinh'])  &&
    isset($_POST['ngayvaolam']) &&
    isset($_POST['sdt']) &&
    isset($_POST['cccd'])){
    
    include '../../database_connect.php';
    include "../data/nhanvien.php";

    $nhanvien_id = $_POST['nhanvien_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gioitinh = $_POST['gioitinh'];
    $diachi = $_POST['diachi'];
    $email = $_POST['email'];
    $ngaysinh = $_POST['ngaysinh'];
    $ngayvaolam = $_POST['ngayvaolam'];
    $sdt = $_POST['sdt'];
    $cccd = $_POST['cccd'];


    $data = 'nhanvien_id'.$nhanvien_id;

    if (empty($fname)) {
        $em  = "Họ không được để trống";
        header("Location: ../nhanvien_edit.php?error=$em&$data");
        exit;
    }else if (empty($lname)) {
        $em  = "Tên không được để trống";
        header("Location: ../nhanvien_edit.php?error=$em&$data");
        exit;
    }else if (empty($diachi)) {
        $em  = "Địa chỉ không được để trống";
        header("Location: ../nhanvien_edit.php?error=$em&$data");
        exit;
    }else if (empty($gioitinh)) {
        $em  = "Giới tính không được để trống";
        header("Location: ../nhanvien_edit.php?error=$em&$data");
        exit;
    }else if (empty($email)) {
        $em  = "Email không được để trống";
        header("Location: ../nhanvien_edit.php?error=$em&$data");
        exit;
    }else if (empty($sdt)) {
        $em  = "SĐT không được để trống";
        header("Location: ../nhanvien_edit.php?error=$em&$data");
        exit;
    }else if (empty($cccd)) {
        $em  = "CCCD không được để trống";
        header("Location: ../nhanvien_edit.php?error=$em&$data");
        exit;
    }else if (empty($ngaysinh)) {
        $em  = "Ngày sinh không được để trống";
        header("Location: ../nhanvien_edit.php?error=$em&$data");
        exit;
    }else {

        $sql = "UPDATE nhanviens SET fname = ?, lname = ?, diachi = ?, gioitinh = ?,email = ?, sdt = ?, cccd = ?, ngaysinh = ?, ngayvaolam = ? WHERE nhanvien_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$fname, $lname, $diachi, $gioitinh, $email, $sdt, $cccd, $ngaysinh, $ngayvaolam, $nhanvien_id]);
        $sm = "Chỉnh thông tin thành công!";
        header("Location: ../nhanvien_edit.php?success=$sm&$data");
        exit;
    }
    
  }else {
    $em = "Có lỗi xảy ra";
    header("Location: ../nhanvien.php?error=$em");
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
