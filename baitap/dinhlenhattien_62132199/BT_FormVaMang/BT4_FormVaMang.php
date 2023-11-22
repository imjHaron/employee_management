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
    </style>
</head>
<body>
<?php
    function taoMang($chuoiSo){
        $arr = explode(',', $chuoiSo);
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

    if(isset($_POST['chuoiSo'])){
        $chuoiSo = trim($_POST['chuoiSo']);
        $n = count(explode(',', $chuoiSo));
    }
    else {
        $chuoiSo = "";
        $n = 0;
    }

    $kq = "";
    if(isset($_POST['tinh'])){
        if($n <= 0){
            $kq = "Không tính được";
        }
        else{
            $arr = taoMang($chuoiSo);
            $str = hienthi_mang($arr);
            $kq = "Mảng được tạo ra là: ".$str;
            $tong = tong_phantu($arr);
            $kq .= "\nTổng các phần tử trong mảng là: ".$tong;
        }
    }
?>

<form action="" method="post">
    <table border="0" cellpadding="0">
        <tr>
            <th colspan="2"><h2>MỘT SỐ THAO TÁC TRÊN MẢNG</h2></th>
        </tr>
        <tr>
            <td>Nhập dãy số của mảng:</td>
            <td><input type="text" name="chuoiSo" size="70" value="<?php echo $chuoiSo; ?>"/></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="tinh" size="20" value="Xử lý"/></td>
        </tr>
        <tr>
            <td colspan="2"><textarea name="ketQua" id="" cols="90" rows="10" readonly><?php echo $kq; ?></textarea></td>
        </tr>
    </table>
</form>
</body>
</html>