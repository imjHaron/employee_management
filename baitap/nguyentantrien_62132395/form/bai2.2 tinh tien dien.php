<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Tính tiền điện</title>
    <style type="text/css">
        body {
            background-color: #0D59FF;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        table {
            background: #BDD2FFFF;
            border: 1px solid black;
            margin: 0 auto;
            padding: 20px;
            width: 50%;
        }

        thead {
            background: #fff14d;
        }

        td {
            color: blue;
            padding: 10px;
        }

        h4 {
            font-family: Verdana, sans-serif;6666
            text-align: center;
            color: #ff8100;
            font-size: 30px;
        }

        input[type="text"] {
            width: 100%;
            padding: 5px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_POST['ten']))
        $ten = trim($_POST['ten']);
    else $ten = "";

    if (isset($_POST['chiSoCu']))
        $chiSoCu = trim($_POST['chiSoCu']);
    else $chiSoCu = "";

    if (isset($_POST['chiSoMoi']))
        $chiSoMoi = trim($_POST['chiSoMoi']);
    else $chiSoMoi = "";

    if (isset($_POST['donGia']))
        $donGia = trim($_POST['donGia']);
    else $donGia = "20000";

    if (isset($_POST['soTien']))
        $soTien = trim($_POST['soTien']);
    else $soTien = "";

    if (isset($_POST['tinh'])) {
        if (is_numeric($chiSoCu) && is_numeric($chiSoMoi) && is_numeric($donGia) && is_string($ten) && $chiSoMoi > $chiSoCu) {
            $soTien = ($chiSoMoi - $chiSoCu) * $donGia;
        } else {
            echo "Vui lòng nhập giá trị hợp lệ.";
            $soTien = "";
        }
    }
    ?>


    <form align='center' action="" method="post">
        <table>
            <thead>
                <th colspan="2">
                    <h4>THANH TOÁN TIỀN ĐIỆN</h4>
                </th>
            </thead>
            <tr>
                <td>Tên chủ hộ:</td>
                <td><input type="text" name="ten" value="<?php echo $ten; ?>" /></td>
            </tr>
            <tr>
                <td>Chỉ số cũ:</td>
                <td><input type="text" name="chiSoCu" value="<?php echo $chiSoCu; ?>" /></td>
            </tr>
            <tr>
                <td>Chỉ số mới:</td>
                <td><input type="text" name="chiSoMoi" value="<?php echo $chiSoMoi; ?>" /></td>
            </tr>
            <tr>
                <td>Đơn giá:</td>
                <td><input type="text" name="donGia" disabled="disabled" value="<?php echo $donGia; ?>" /></td>
            </tr>
            <tr>
                <td>Số tiền thanh toán:</td>
                <td><input type="text" name="soTien" disabled="disabled" value="<?php echo $soTien; ?>" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>
            </tr>
        </table>
    </form>
</body>

</html>
