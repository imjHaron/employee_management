<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Tính diện tích và chu vi hình chữ nhật</title>
    <style>
        body {
            background-color: #FFB3F3;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        table {
            background: #ffd94d;
            border: 1px solid yellow;
            margin: 0 auto;
            padding: 20px;
        }

        thead {
            background: #fff14d;
        }

        td {
            color: blue;
            padding: 10px;
        }

        h3 {
            text-align: center;
            color: #ff8100;
            font-size: medium;
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
    $chieudai = isset($_POST['chieudai']) ? trim($_POST['chieudai']) : 0;
    $chieurong = isset($_POST['chieurong']) ? trim($_POST['chieurong']) : 0;

    if (isset($_POST['tinh'])) {
        if (is_numeric($chieudai) && is_numeric($chieurong)) {
            $dientich = $chieudai * $chieurong;
            $chuvi = 2 * ($chieudai + $chieurong);
        } else {
            echo "<font color='red'>Vui lòng nhập vào số! </font>";
            $dientich = "";
            $chuvi = "";
        }
    } else {
        $dientich = 0;
        $chuvi = 0;
    }
    ?>

    <form align='center' action="" method="post">
        <table>
            <thead>
                <th colspan="2">
                    <h3>HÌNH CHỮ NHẬT</h3>
                </th>
            </thead>
            <tr>
                <td>Chiều dài:</td>
                <td><input type="text" name="chieudai" value="<?php echo $chieudai; ?>" /></td>
            </tr>
            <tr>
                <td>Chiều rộng:</td>
                <td><input type="text" name="chieurong" value="<?php echo $chieurong; ?>" /></td>
            </tr>
            <tr>
                <td>Diện tích HCN:</td>
                <td><input type="text" name="dientich" disabled="disabled" value="<?php echo $dientich; ?>" /></td>
            </tr>
            <tr>
                <td>Chu vi HCN:</td>
                <td><input type="text" name="chuvi" disabled="disabled" value="<?php echo $chuvi; ?>" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Tính nek" name="tinh" /></td>
            </tr>
        </table>
    </form>
</body>

</html>
