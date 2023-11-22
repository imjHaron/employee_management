<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Kết quả phép tính</title>
    <style type="text/css">
        body {
            background-color: #0D59FF;
            font-family: Arial, sans-serif;
        }
        table {
            background: #BDD2FFFF;
            border: 0 solid black;
            margin: 0 auto;
        }
        thead {
            background: #fff14d;
        }
        td {
            color: blue;
            padding: 5px;
        }
        h4 {
            font-family: verdana;
            text-align: center;
            color: #ff8100;
            font-size: medium;
        }
    </style>
</head>
<body>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $operator = isset($_GET['operator']) ? $_GET['operator'] : '';
            $num1 = isset($_GET['num1']) ? $_GET['num1'] : '';
            $num2 = isset($_GET['num2']) ? $_GET['num2'] : '';
            $bieuthuc= $_REQUEST["operator"];

           
            if(isset($_POST['bt']))
                $bt=trim($_POST['bt']); 
            else $bt = $bieuthuc;

            if(isset($_POST['n1']))
                $n1=trim($_POST['n1']); 
            else $n1 = $num1;

            if(isset($_POST['n2']))
                $n2=trim($_POST['n2']); 
            else $n2 = $num2;
    ?>

    <center>
        <table>
        <thead>
            <th colspan="2" align="center"><h4>PHÉP TÍNH TRÊN HAI SỐ</h4></th>
        </thead>
        <tr><td>Chọn phép tính:</td>
         <td><?php  echo $bt;?> </td>
        </tr>
        <tr><td>Số 1:</td>
         <td><?php  echo $n1;?> </td>
        </tr>
        <tr><td>Số 2:</td>
         <td><?php  echo $n2;?> </td>
        </tr>
        <tr>
        <td>Kết quả:</td>
        <td><?php
            if (is_numeric($num1) && is_numeric($num2)) {
                switch ($operator) {
                    case 'Cộng':
                        $kq = $num1 + $num2;
                        echo $kq;
                        break;
                    case 'Trừ':
                        $kq = $num1 - $num2;
                        echo $kq;
                        break;
                    case 'Nhân':
                        $kq = $num1 * $num2;
                        echo $kq;
                        break;
                    case 'Chia':
                        if ($num2 != 0) {
                            $kq = $num1 / $num2;
                            echo $kq;
                        } else {
                            echo "Không thể chia cho 0.";
                        }
                        break;
                    default:
                        echo "Phép tính không hợp lệ.";
                        break;
                }
            } else {
                echo "Vui lòng nhập giá trị hợp lệ.";
            }
        ?></td> 
        </tr>   
        </table>
    </center>


    <?php
        }
    ?>

</body>
</html>
