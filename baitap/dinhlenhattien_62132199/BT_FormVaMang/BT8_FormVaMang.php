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

    function sap_xep_tang($arr){
        sort($arr);
        return $arr;
    }

    function sap_xep_giam($arr){
        rsort($arr);
        return $arr;
    }

    if(isset($_POST['chuoiSo'])){
        $chuoiSo = trim($_POST['chuoiSo']);
        $n = count(explode(',', $chuoiSo));
    }
    else {
        $chuoiSo = "";
        $n = 0;
    }

    $kq_mang = "";
    $kq_mang_tang = "";
    $kq_mang_giam = "";
    if(isset($_POST['tinh'])){
        if($n <= 0){
            $kq = "Không tính được";
        }
        else{
            $arr = taoMang($chuoiSo);
            $str = hienthi_mang($arr);
            $kq_mang = "".$str;

            // Sắp xếp mảng tăng dần
            $arr_tang = sap_xep_tang($arr);
            $kq_mang_tang = hienthi_mang($arr_tang);

            // Sắp xếp mảng giảm dần
            $arr_giam = sap_xep_giam($arr);
            $kq_mang_giam = hienthi_mang($arr_giam);
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
            <td>Mảng:</td>
            <td><input type="text" name="ketQuaMang" size="50" disabled="disabled" value="<?php echo $kq_mang; ?>"></td>
        </tr>
         <tr>
            <td>Mảng tăng dần:</td>
            <td><input type="text" name="ketQuaMangTang" size="50" disabled="disabled" value="<?php echo $kq_mang_tang; ?>"></td>
        </tr>
         <tr>
            <td>Mảng giảm dần:</td>
            <td><input type="text" name="ketQuaMangGiam" size="50" disabled="disabled" value="<?php echo $kq_mang_giam; ?>"></td>
        </tr>
    </table>
</form>
</body>
</html>