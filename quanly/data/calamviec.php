<?php 
// All Ca lam viec
function getAllCaLamViecs($conn){
    $sql = "SELECT * FROM calamviecs";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() >= 1) {
        $calamviecs = $stmt->fetchAll();
        return $calamviecs;
    }
    else {
        return 0;
    }
}

// Get Ca lam viec by ID
function getCaLamViecById($calamviec_id, $conn){
    $sql = "SELECT * FROM calamviecs WHERE calamviec_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$calamviec_id]);

    if ($stmt->rowCount() == 1) {
         $calamviec = $stmt->fetch();
         return $calamviec;
    }
    else {
        return 0;
    }
}

// Delete Ca lam viec
function removeCaLamViec($id, $conn){
    $sql = "DELETE FROM calamviecs WHERE calamviec_id = ?";
    $stmt = $conn->prepare($sql);
    $re = $stmt->execute([$id]);
    if ($re) {
        return 1;
    }
    else {
        return 0;
    }
}