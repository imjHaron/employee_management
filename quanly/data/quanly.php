<?php  

// Get Quan ly by ID
function getQuanLyById($quanly_id, $conn) {
    $sql = "SELECT * FROM quanlys WHERE quanly_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$quanly_id]);

    if ($stmt->rowCount() == 1) {
        $quanly = $stmt->fetch();
        return $quanly;
    }
    else {
        return 0;
    }
}

// All Quan ly 
function getAllQuanLys($conn) {
    $sql = "SELECT * FROM quanlys";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() >= 1) {
        $quanlys = $stmt->fetchAll();
        return $quanlys;
    }
    else {
        return 0;
    }
}

// Check if the username is unique
function unameIsUnique($uname, $conn, $quanly_id = 0) {
    $sql = "SELECT username, quanly_id FROM quanlys WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$uname]);
   
    if ($quanly_id == 0) {
        if ($stmt->rowCount() >= 1) {
            return 0;
        }
        else {
            return 1;
        }
    }
    else {
        if ($stmt->rowCount() >= 1) {
            $quanly = $stmt->fetch();
            if ($quanly['quanly_id'] == $quanly_id) {
                return 1;
            }
            else {
                return 0;
            }
        }
        else {
            return 1;
        }
    }
   
}

// Delete Quan ly
function removeQuanLy($id, $conn){
    $sql = "DELETE FROM quanlys WHERE quanly_id = ?";
    $stmt = $conn->prepare($sql);
    $re = $stmt->execute([$id]);
    if ($re) {
        return 1;
    }
    else {
        return 0;
    }
}

// Search Quan ly 
function searchQuanLys($key, $conn){
    $key = preg_replace('/(?<!\\\)([%_])/', '\\\$1',$key);
    $sql = "SELECT * FROM quanlys WHERE fname LIKE ? OR lname LIKE ? OR gioitinh LIKE ? OR diachi LIKE ? OR ngayvaolam LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute(["%$key%", "%$key%" , "%$key%", "%$key%", "%$key%"]);

    if ($stmt->rowCount() > 0) {
        $quanlys = $stmt->fetchAll();
        return $quanlys;
    }
    else {
        return 0;
    }
}
