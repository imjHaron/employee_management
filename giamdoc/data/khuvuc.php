<?php  

// All Khu vuc
function getAllKhuVucs($conn){
    $sql = "SELECT * FROM khuvuc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() >= 1) {
         $khuvucs = $stmt->fetchAll();
         return $khuvucs;
    }
    else {
        return 0;
    }
}

// Get Khu vuc by ID
function getKhuVucById($khuvuc_id, $conn){
    $sql = "SELECT * FROM khuvuc WHERE khuvuc_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$khuvuc_id]);

    if ($stmt->rowCount() == 1) {
        $khuvuc = $stmt->fetch();
        return $khuvuc;
    }
    else {
        return 0;
    }
}

// Deleve Khu vuc
function removeKhuVuc($id, $conn){
    $sql = "DELETE FROM khuvuc WHERE khuvuc_id=?";
    $stmt = $conn->prepare($sql);
    $re = $stmt->execute([$id]);
    if ($re) {
        return 1;
    }
    else {
        return 0;
    }
}