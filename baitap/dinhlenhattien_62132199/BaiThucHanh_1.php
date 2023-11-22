<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <title>Tính diện tích HCN</title>
    <style type="text/css">
        body {  
            background-color: black;
        }
        table{
            background: whitesmoke;
            border: 0 solid;
            margin: 0 auto;
            border-radius: 10px;
        }
        thead{
            background: #fff14d;   
        }
        td {
            color: green;
        }
        h3{
            font-family: verdana;
            text-align: center;
            color: #ff8100;
            font-size: medium;
        }
        .result {
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
            color: whitesmoke;
        }
    </style>
</head>
<body>
    <?php
        if(isset($_POST['a']))  
            $a = trim($_POST['a']); 
        else $a = "";
        if(isset($_POST['b'])) 
            $b = trim($_POST['b']); 
        else $b = "";
        $result = ""; // Biến lưu kết quả tính toán
    ?>
    <form align='center' action="" method="post">
        <table>
            <thead>
                <th colspan="2" align="center"><h4>Tính Chu Vi Diện Tích Các Hình Học Cơ Bản</h4></th>
            </thead>
            <tr>
                <td>Nhập a:</td>
                <td><input type="text" name="a" value="<?php echo $a; ?>"/></td>
            </tr>
            <tr>
                <td>Nhập b:</td>
                <td><input type="text" name="b" value="<?php echo $b; ?>"/></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Xử Lý" name="tinh" />
                </td>
            </tr>
        </table>
    </form>
    <?php
        if(isset($_POST['tinh'])) {
            if (is_numeric($a) && is_numeric($b)) {
                switch ($a) {
                    case 1:
                        $result = "Chu vi hình vuông cạnh độ dài $b là: " . (4 * $b) . "<br>Diện tích hình vuông cạnh độ dài $b là: " . ($b * $b);
                        break;
                    case 2:
                        define("PI", 3.1415);
                        $result = "Chu vi hình tròn bán kính $b là: " . (2 * PI * $b) . "<br>Diện tích hình tròn bán kính $b là: " . round(PI * pow($b, 2), 2);
                        break;
                    case 3:
                        $p = ($b * 3) / 2;
                        $result = "Chu vi hình tam giác đều độ dài $b là: " . ($b * 3) . "<br>Diện tích hình tam giác đều độ dài $b là: " . round(sqrt($p * 3 * ($p - $b)), 2);
                        break;
                    case 4:
                        $result = "Chu vi hình chữ nhật có độ dài 2 cạnh $a và $b là: " . ($a + $b) * 2 . "<br>Diện tích hình chữ nhật có độ dài 2 cạnh $a và $b là: " . ($a * $b);
                        break;
                    default:   
                        $result = "<br>Không tính trường hợp này!!"; 
                }
            } else {
                $result = "<font color='red'>Vui lòng nhập vào số! </font>";
            }
        }
    ?>
    <div class="result">
        <?php echo $result; ?>
    </div>
</body>
</html>