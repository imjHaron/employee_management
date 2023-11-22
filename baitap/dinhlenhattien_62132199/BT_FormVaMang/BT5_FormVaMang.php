<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>MANG CHUOI HAM</title>
    <style type="text/css">
        table{
            color: #ffff00;
            background-color: gray;
        }
        table th{
            background-color: blue;
            color: yellow;
        }
        input{
            background-color: whitesmoke;
        }
    </style>
</head>
<body>
<?php
    function taoMang($n){
        $arr = array();
        for($i = 0; $i < $n; $i++){
            $arr[] = rand(0, 20);
        }
        return $arr;
    }

    function hienthi_mang($arr){
        $output = "";
        for($i = 0; $i < count($arr); $i++){
            $output .= $arr[$i]." ";
        }
        return $output;
    }

    function tong_phantu($arr){
        $s = 0;
        for($i = 0; $i < count($arr); $i++){
            $s += $arr[$i];
        }
        return $s;
    }

    if(isset($_POST['soLuong'])){
        $soLuong = (int)$_POST['soLuong'];
        $arr = taoMang($soLuong);
        $chuoiSo = hienthi_mang($arr);
        $n = count($arr);
    }
    else {
        $soLuong = 0;
        $chuoiSo = "";
        $n = 0;
    }

    $kq_mang = "";
    $kq_max = "";
    $kq_min = "";
    $kq_tong = "";

    if(isset($_POST['tinh'])){
        if($n <= 0){
            $kq_mang = "Không tính được";
            $kq_max = "Không tính được";
            $kq_min = "Không tính được";
            $kq_tong = "Không tính được";
        }
        else{
            $kq_mang = $chuoiSo;
            $kq_max = max($arr);
            $kq_min = min($arr);
            $kq_tong = tong_phantu($arr);
        }
    }
?>

<form action="" method="post">
    <table border="0" cellpadding="0">
        <tr>
            <th colspan="2"><h2>MỘT SỐ THAO TÁC TRÊN MẢNG</h2></th>
        </tr>
        <tr>
            <td>Nhập số lượng phần tử trong mảng:</td>
            <td><input type="number" name="soLuong" size= "50" min="1" value="<?php echo $soLuong; ?>"/></td> 
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="tinh" size="20" value="Phát sinh và tính toán"/></td>
        </tr>
        <tr>
            <td>Mảng:</td>
            <td><input type="text" name="ketQuaMang" size= "50" disabled="disabled" id="" value="<?php echo $kq_mang; ?>"></td>
        </tr>
        <tr>
            <td>GTLN (MAX) trong mảng:</td>
            <td><input type="text" name="ketQuaMax" size= "50" disabled="disabled" id="" value="<?php echo $kq_max; ?>"></td>
        </tr>
        <tr>
            <td>GTNN (MIN) trong mảng:</td>
            <td><input type="text" name="ketQuaMin" size= "50" disabled="disabled" id="" value="<?php echo $kq_min; ?>"></td>
        </tr>
        <tr>
            <td>Tổng các phần tử trong mảng:</td>
            <td><input type="text" name="ketQuaTong" size= "50" disabled="disabled" id="" value="<?php echo $kq_tong; ?>"></td>
        </tr>
    </table>
</form>
</body>
</html>