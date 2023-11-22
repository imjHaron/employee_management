<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> </title>
    <style type="text/css">
        body {  
            background-color: #d24dff;
        }
        table{
            background: #ffd94d;
            border: 0 solid yellow;
        }
        thead{
            background: #fff14d;    
        }
        td {
            color: blue;
        }
        h3{
            font-family: verdana;
            text-align: center;
            /* text-anchor: middle; */
            color: #ff8100;
            font-size: medium;
        }
    </style>
</head>
<body>
    <?php 
if(isset($_POST['a']))  
    $a=trim($_POST['a']); 
else $a="";
if(isset($_POST['b'])) 
    $b=trim($_POST['b']); 
else $b="";

?>
    <form align='center' action="" method="post">
<center>
    <table>
    <thead>
        <th colspan="2" align="center"><h4>TÍNH CHU VI - DIỆN TÍCH CÁC HÌNH HỌC CƠ BẢN</h4></th>
    </thead>
    <tr><td>Nhập a:</td>
     <td><input type="text" name="a" value="<?php  echo $a;?> "/></td>
    </tr>
    <tr><td>Nhập b:</td>
     <td><input type="text" name="b" value="<?php  echo $b;?> "/></td>
    </tr>
    <tr>

    </tr>
    <tr>
     <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>
    </tr>
</table>
</center>

</form>
<center>
    <?php
    if(isset($_POST['tinh']))
        if (is_numeric($a) && is_numeric($b))  {
            switch ($a) {
    case 1:
        $chu_vi = 4 * $b;
        $dien_tich = $b * $b;
        echo "Chu vi hình vuông = $chu_vi";
        echo "<br>";
        echo "Diện tích hình vuông = $dien_tich";
        break;
    case 2:
        $chu_vi = 2 * Pi * $b;
        $dien_tich = Pi * $b * $b;
        echo "Chu vi hình tròn = $chu_vi";
        echo "<br>";
        echo "Diện tích hình tròn = $dien_tich";
        break;
    case 3:
        $chu_vi = 3 * $b;
        $dien_tich = sqrt(3) * $b * $b / 4;
        echo "Chu vi hình tam giác đều = $chu_vi";
        echo "<br>";
        echo "Diện tích hình tam giác đều = $dien_tich";
        break;
    case 4:
        $chu_vi = 2 * ($a + $b);
        $dien_tich = $a * $b;
        echo "Chu vi hình chữ nhật = $chu_vi";
        echo "<br>";
        echo "Diện tích hình chữ nhật = $dien_tich";
        break;
        default:
            echo"<br>Không tính trong trường hợp này.";
            }
        }
    
        else {
                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 
            }
    ?>
</center>
</body>
</html>