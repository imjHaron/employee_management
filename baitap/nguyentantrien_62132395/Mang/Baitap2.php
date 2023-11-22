<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style type="text/css">
        table {
            color: #ffff00;
            background-color: gray;
            width: 50%;
            padding: 20px;

        }
        table th {
            background-color: blue;
            font-style: vni-times;
            color: yellow;
        }
        td {
            padding: 10px;
        }
        textarea {
            width: 100%;
        }
    </style>
</head>
<body>

<?php
function nam_nhuan($nam) {
    // Năm nhuận là năm chia hết cho 400 hoặc chia hết cho 4 nhưng không chia hết cho 100
    return (($nam % 400 == 0) || ($nam % 4 == 0 && $nam % 100 != 0)) ? 1 : 0;
}

$kq = '';

if (isset($_POST['tinh'])) {
    $n = $_POST['n'];
    $kq = '';

    foreach (range(2000, $n) as $year) {
        if (nam_nhuan($year) == 1) {
            $kq .= $year . " ";
        }
    }
}
?>

<form action="" method="post">
    <table border="0" cellpadding="0">
        <th colspan="2"><h2>TÌM NĂM NHUẬN</h2></th>
        <tr>
            <td>Năm:</td>
            <td><input type="text" name="n" size="70" value="<?php echo isset($_POST['n']) ? $_POST['n'] : ''; ?>"/></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="tinh" size="20" value="Xử lý"/></td>
        </tr>
        <tr>
            <td colspan="2"><textarea name="ketQua" id="" cols="90" rows="10"><?php echo "$kq là năm nhuận" ?></textarea></td>
        </tr>
    </table>
</form>

</body>
</html>