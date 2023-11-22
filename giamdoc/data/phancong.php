<?php 
// All phan cong
function getAllPhanCongs($conn){
    $sql = "SELECT * FROM phancong";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() >= 1) {
        $phancongs = $stmt->fetchAll();
        return $phancongs;
    }
    else {
        return 0;
    }
}

// Get phan cong by ID
function getPhanCongById($phancong_id, $conn){
    $sql = "SELECT * FROM phancong WHERE phancong_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$phancong_id]);

    if ($stmt->rowCount() == 1) {
        $phancong = $stmt->fetch();
        return $phancong;
    }
    else {
        return 0;
    }
}

// Delete phan cong
function removePhanCong($id, $conn){
   $sql = "DELETE FROM phancong WHERE phancong_id=?";
   $stmt = $conn->prepare($sql);
   $re = $stmt->execute([$id]);
    if ($re) {
        return 1;
    }
    else {
        return 0;
    }
}