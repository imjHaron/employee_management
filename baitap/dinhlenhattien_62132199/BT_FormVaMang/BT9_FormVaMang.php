<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>MANG CHUOI HAM</title>
    <style type="text/css">
        table {
            color: #ffff00;
            background-color: gray;
        }
        table th {
            background-color: blue;
            color: yellow;
        }
        input {
            background-color: whitesmoke;
        }
    </style>
</head>
<body>
    <?php
    function taoMang($chuoiSo)
    {
        $arr = explode(',', $chuoiSo);
        return $arr;
    }

    function hienthi_mang($arr)
    {
        $output = "";
        for ($i = 0; $i < count($arr); $i++) {
            $output .= $arr[$i] . " ";
        }
        return $output;
    }

    function dem_ptmangA($arr)
    {
        $sA = count($arr);
        return $sA;
    }

    function dem_ptmangB($arr)
    {
        $sB = count($arr);
        return $sB;
    }

    function gop_mang($arrA, $arrB)
    {
        $mang_gop = array_merge($arrA, $arrB);
        return $mang_gop;
    }

    function sap_xep_tang($arrC){
        sort($arrC);
        return $arrC;
    }

    function sap_xep_giam($arrC){
        rsort($arrC);
        return $arrC;
    }

    if (isset($_POST['chuoiSoA']) && isset($_POST['chuoiSoB'])) {
        $chuoiSoA = trim($_POST['chuoiSoA']);
        $chuoiSoB = trim($_POST['chuoiSoB']);
        $nA = count(explode(',', $chuoiSoA));
        $nB = count(explode(',', $chuoiSoB));
    } else {
        $chuoiSoA = "";
        $chuoiSoB = "";
        $nA = 0;
        $nB = 0;
    }

    $kq_mang_A = "";
    $kq_mang_B = "";
    $kq_mang_tang = "";
    $kq_mang_giam = "";
    if (isset($_POST['tinh'])) {
        if ($nA <= 0 || $nB <= 0) {
            $kq_mang_A = "Không tính được";
            $kq_mang_B = "Không tính được";
        } else {
            $arrA = taoMang($chuoiSoA);
            $arrB = taoMang($chuoiSoB);
            $strA = hienthi_mang($arrA);
            $strB = hienthi_mang($arrB);
            $kq_mang_A = dem_ptmangA($arrA);
            $kq_mang_B = dem_ptmangB($arrB);
            $gopMangAB = gop_mang($arrA, $arrB);
            $strgopMangAB = hienthi_mang($gopMangAB);
            // Sắp xếp mảng tăng dần
            $arr_tang = sap_xep_tang($gopMangAB);
            $kq_mang_tang = hienthi_mang($arr_tang);

            // Sắp xếp mảng giảm dần
            $arr_giam = sap_xep_giam($gopMangAB);
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
                <td>Nhập dãy số của mảng A:</td>
                <td><input type="text" name="chuoiSoA" size="70" value="<?php echo $chuoiSoA; ?>"/></td>
            </tr>
            <tr>
                <td>Nhập dãy số của mảng B:</td>
                <td><input type="text" name="chuoiSoB" size="70" value="<?php echo $chuoiSoB; ?>"/></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="tinh" size="20" value="Xử lý"/></td>
            </tr>
            <tr>
                <td>Mảng A:</td>
                <td><input type="text" name="ketQuaMangA" size="50" disabled="disabled"
                           value="<?php echo $kq_mang_A; ?>"></td>
            </tr>
            <tr>
                <td>Mảng B:</td>
                <td><input type="text" name="ketQuaMangB" size="50" disabled="disabled"
                           value="<?php echo $kq_mang_B; ?>"></td>
            </tr>
            <tr>
                <td>Mảng C:</td>
                <td><input type="text" name="ketQuaMangGop" size="50" disabled="disabled"
                           value="<?php echo $strgopMangAB; ?>"></td>
            </tr>
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