<?php
session_start();
if (isset($_SESSION['giamdoc_id']) && isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 'GiamDoc') {

        if (isset($_POST['calamviec']) && isset($_POST['khuvuc'])) {
            include '../../database_connect.php';
            
            $calamviec = $_POST['calamviec'];
            $khuvuc = $_POST['khuvuc'];
            
            if (empty($calamviec)) {
                $em  = "Ca làm việc không được để trống";
                header("Location: ../phancong_add.php?error=$em");
                exit;
            } else if (empty($khuvuc)) {
                $em  = "Khu vực không được để trống";
                header("Location: ../phancong_add.php?error=$em");
                exit;
            } else {
                // Kiểm tra xem phân công đã tồn tại hay chưa
                $sql_check = "SELECT * FROM phancong WHERE calamviec = ? AND khuvuc = ?";
                $stmt_check = $conn->prepare($sql_check);
                $stmt_check->execute([$calamviec, $khuvuc]);
                
                
                if ($stmt_check->rowCount() > 0) {
                    $em = "Phân công này đã tồn tại.";
                    header("Location: ../phancong_add.php?error=$em");
                    exit;
                } else {
                    // Thêm phân công mới
                    $sql = "INSERT INTO phancong (calamviec, khuvuc) VALUES (?, ?)";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute([$calamviec, $khuvuc]);
                    $sm = "Thêm mới phân công thành công.";
                    header("Location: ../phancong_add.php?success=$sm");
                    exit;
                }
            }
        } else {
            $em = "Có lỗi xảy ra";
            header("Location: ../phancong_add.php?error=$em");
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
?>
