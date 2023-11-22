<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>MẢNG VÀ HÀM</title>
    <style type="text/css">
        table {
            color: #ffff00;
            background-color: gray;
        }
        table th {
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
    function taoMang($chuoiSo)
    {
        $arr = explode(',', $chuoiSo);
        return $arr;
    }

    function hienThiMang($arr)
    {
        $output = "";
        for ($i = 0; $i < count($arr); $i++) {
            $output .= $arr[$i] . " ";
        }
        return $output;
    }

    $chuoiSo = "";
    $n = 0;
    $kq_mang = "";
    $kq_thay_the = "";

    if (isset($_POST['tinh'])) {
        $chuoiSo = trim($_POST['chuoiSo']);
        $n = count(explode(',', $chuoiSo));

        if ($n <= 0) {
            $kq_mang = "Không tính được";
        } else {
            $arr = taoMang($chuoiSo);
            $kq_mang = "".hienThiMang($arr);

            $soCanTim = (int)$_POST['soCanTim'];
            $giaTriThayThe = (int)$_POST['giaTriThayThe'];

            for ($i = 0; $i < count($arr); $i++) {
                if ($arr[$i] == $soCanTim) {
                    $arr[$i] = $giaTriThayThe;
                }
            }

            $kq_thay_the = "".hienThiMang($arr);
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
            <td>Giá trị cần thay thế:</td>
            <td><input type="number" name="soCanTim" size="50" value="<?php echo isset($_POST['soCanTim']) ? $_POST['soCanTim'] : ''; ?>" /></td>
        </tr>
        <tr>
            <td>Giá trị thay thế:</td>
            <td><input type="number" name="giaTriThayThe" size="50" value="<?php echo isset($_POST['giaTriThayThe']) ? $_POST['giaTriThayThe'] : ''; ?>" /></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="tinh" size="20" value="Thay Thế"/></td>
        </tr>
        <tr>
            <td>Mảng cũ:</td>
            <td><input type="text" name="ketQuaMang" size="50" disabled="disabled" value="<?php echo $kq_mang; ?>"></td>
        </tr>
        <tr>
            <td>Mảng sau khi thay thế:</td>
            <td><input type="text" name="ketQuaThayThe" size="50" disabled="disabled" value="<?php echo $kq_thay_the; ?>"></td>
        </tr>
    </table>
</form>
</body>
</html>