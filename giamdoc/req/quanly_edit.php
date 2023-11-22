<?php 
session_start();
if (isset($_SESSION['giamdoc_id']) && isset($_SESSION['role'])) {

    if ($_SESSION['role'] == 'GiamDoc') {
        
if (isset($_POST['quanly_id']) &&
    isset($_POST['fname']) &&
    isset($_POST['lname']) &&
    isset($_POST['gioitinh']) &&
    isset($_POST['ngaysinh']) &&
    isset($_POST['sdt']) &&
    isset($_POST['diachi']) &&
    isset($_POST['email']) &&
    isset($_POST['cccd']) &&
    isset($_POST['ngayvaolam']) &&
    isset($_POST['phancongs'])) {
    
    include '../../database_connect.php';
    include "../data/quanly.php";


    $quanly_id = $_POST['quanly_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gioitinh = $_POST['gioitinh'];
    $ngaysinh = $_POST['ngaysinh'];
    $sdt = $_POST['sdt'];
    $diachi = $_POST['diachi'];
    $email = $_POST['email'];
    $cccd = $_POST['cccd'];
    $ngayvaolam = $_POST['ngayvaolam'];   

    $phancongs = "";
    foreach ($_POST['phancongs'] as $phancong) {
       $phancongs .=$phancong;
    }

    $data = 'quanly_id'.$quanly_id;

    if (empty($fname)) {
       $em  = "Họ không được để trống";
       header("Location: ../quanly_edit.php?error=$em&$data");
       exit;
    } 
    else if (empty($lname)) {
       $em  = "Tên không được để trống";
       header("Location: ../quanly_edit.php?error=$em&$data");
       exit;
    }
    else if (empty($gioitinh)) {
       $em  = "Giới tính không được để trống";
       header("Location: ../quanly_edit.php?error=$em&$data");
       exit;
    }
    else if (empty($ngaysinh)) {
       $em  = "Ngày sinh không được để trống";
       header("Location: ../quanly_edit.php?error=$em&$data");
       exit;
    }
    else if (empty($sdt)) {
       $em  = "Số điện thoại không được để trống";
       header("Location: ../quanly_edit.php?error=$em&$data");
       exit;
    }
    else if (empty($diachi)) {
       $em  = "Địa chỉ không được để trống";
       header("Location: ../quanly_edit.php?error=$em&$data");
       exit;
    }
    else if (empty($email)) {
       $em  = "Email không được để trống";
       header("Location: ../quanly_edit.php?error=$em&$data");
       exit;
    }
    else if (empty($cccd)) {
       $em  = "Căn cước công dân không được để trống";
       header("Location: ../quanly_edit.php?error=$em&$data");
       exit;
    }
    else if (empty($ngayvaolam)) {
       $em  = "Ngày vào làm không được để trống";
       header("Location: ../quanly_edit.php?error = $em&$data");
       exit;

    }else {
        $sql = "UPDATE quanlys SET fname = ?, lname = ?, gioitinh = ?, ngaysinh = ?, sdt = ?, diachi = ?, email = ?,cccd = ?, ngayvaolam = ?, phancong_id = ? WHERE quanly_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$fname, $lname, $gioitinh, $ngaysinh, $sdt, $diachi, $email, $cccd, $ngayvaolam, $phancongs, $quanly_id]);
        $sm = "Sửa thông tin quản lý thành công!";
        header("Location: ../quanly_edit.php?success=$sm&$data");
        exit;
    }
    
  } else {
    $em = "Có lỗi xảy ra. Hãy thử lại!";
        header("Location: ../quanly.php?error=$em");
        exit;
  }

  } else {
        header("Location: ../../logout.php");
        exit;
  } 
} else {
    header("Location: ../../logout.php");
    exit;
} 
