<?php 

// All Nhan vien
function getAllNhanViens($conn){
    $sql = "SELECT * FROM nhanviens";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() >= 1) {
        $nhanviens = $stmt->fetchAll();
        return $nhanviens;
    }
    else {
   	    return 0;
    }
}

// Get Nhan vien By Id 
function getNhanVienById($id, $conn){
    $sql = "SELECT * FROM nhanviens WHERE nhanvien_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);

    if ($stmt->rowCount() == 1) {
        $nhanvien = $stmt->fetch();
        return $nhanvien;
    }
    else {
        return 0;
    }
}

// Delete Nhan vien
function removeNhanVien($id, $conn){
    $sql = "DELETE FROM nhanviens WHERE nhanvien_id = ?";
    $stmt = $conn->prepare($sql);
    $re = $stmt->execute([$id]);
    if ($re) {
        return 1;
    }
    else {
        return 0;
    }
}


// Check if username is unique
function unameIsUnique($uname, $conn, $nhanvien_id = 0){
    $sql = "SELECT username, nhanvien_id FROM nhanviens WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$uname]);
   
    if ($nhanvien_id == 0) {
        if ($stmt->rowCount() >= 1) {
            return 0;
        }
        else {
            return 1;
        }
    }
    else {
        if ($stmt->rowCount() >= 1) {
            $nhanviens = $stmt->fetch();
            if ($nhanviens['nhanvien_id'] == $nhanvien_id) {
                return 1;
            }
            else {
                return 0;
            }
        }   else {
                return 1;
            }
    }
   
}


function searchNhanViens($key, $conn){
    $key = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$key);
    $sql = "SELECT * FROM nhanviens WHERE fname LIKE ? OR lname LIKE ? OR gioitinh LIKE ? OR diachi LIKE ? OR ngayvaolam LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute(["%$key%", "%$key%" , "%$key%", "%$key%", "%$key%"]);

    if ($stmt->rowCount() > 0) {
        $nhanviens = $stmt->fetchAll();
        return $nhanviens;
    }
    else {
        return 0;
    }
}




function getNhanViensByPage($start, $perPage, $conn) {
        $sql = "SELECT * FROM nhanviens LIMIT $start, $perPage";
        $result = $conn->query($sql);
        if ($result) {
            $nhanviens = $result->fetchAll(PDO::FETCH_ASSOC);
            return $nhanviens;
        }
        return array();
}

function countAllNhanViens($conn) {
        $sql = "SELECT COUNT(*) as total FROM nhanviens";
        $result = $conn->query($sql);
        if ($result) {
            $row = $result->fetch(PDO::FETCH_ASSOC);
            return $row['total'];
        }
        return 0;
}

    