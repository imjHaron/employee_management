<?php 

function giamdocPasswordVerify($giamdoc_pass, $conn, $giamdoc_id){
    $sql = "SELECT * FROM giamdoc WHERE giamdoc_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$giamdoc_id]);

    if ($stmt->rowCount() == 1) {
        $giamdoc = $stmt->fetch();
        $pass  = $giamdoc['password'];

        if (password_verify($giamdoc_pass, $pass)) {
            return 1;
        }   
        else {
            return 0;
        }
    }
    else {
        return 0;
    }
}