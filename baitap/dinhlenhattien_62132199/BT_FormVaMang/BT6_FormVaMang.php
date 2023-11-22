<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>MẢNG VÀ TÌM KIẾM</title>
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
function taoMang($n)
{
    $arr = array();
    for ($i = 0; $i < $n; $i++) {
        $arr[] = rand(0, 20);
    }
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

function tim_kiem($arr, $x)
{
    $index = array_search($x, $arr);
    if ($index !== false) {
        return "Tìm thấy phần tử $x tại vị trí $index trong mảng.";
    } else {
        return "Không tìm thấy phần tử $x trong mảng.";
    }
}

if (isset($_POST['chuoiSo'])) {
    $chuoiSo = trim($_POST['chuoiSo']);
    $arr = explode(',', $chuoiSo);
    $n = count($arr);
} else {
    $chuoiSo = "";
    $n = 0;
}

$kq_mang = "";

if (isset($_POST['tinh'])) {
    if ($n <= 0) {
        $kq_mang = "Không tính được";
    } else {
        $kq_mang = hienthi_mang($arr);
    }
    
    $soCanTim = (int)$_POST['soCanTim'];
    $ketQuaTimKiem = tim_kiem($arr, $soCanTim);
}
?>

<form action="" method="post">
    <table border="0" cellpadding="0">
        <tr>
            <th colspan="2"><h2>MẢNG VÀ TÌM KIẾM</h2></th>
        </tr>
        <tr>
            <td>Nhập mảng:</td>
            <td><input type="text" name="chuoiSo" size="50" value="<?php echo $chuoiSo; ?>" /></td>
        </tr>
        <tr>
            <td>Nhập số cần tìm:</td>
            <td><input type="number" name="soCanTim" size="50" value="<?php echo isset($_POST['soCanTim']) ? $_POST['soCanTim'] : ''; ?>" /></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="tinh" size="20" value="Tìm Kiếm" /></td>
        </tr>
        <tr>
            <td>Mảng:</td>
            <td><input type="text" name="ketQuaMang" size="50" disabled="disabled" value="<?php echo $kq_mang; ?>"></td>
        </tr>
        <tr>
            <td>Kết quả tìm kiếm:</td>
            <td><input type="text" name="ketQuaTimKiem" size="50" disabled="disabled" value="<?php echo isset($ketQuaTimKiem) ? $ketQuaTimKiem : ''; ?>"></td>
        </tr>
    </table>
</form>
</body>
</html>