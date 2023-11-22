<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <title>Tính Tiền Điện</title>
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
    </style>
</head>
<body>
    <?php
        $tenchuho = '';
        $chisocu = '';
        $chisomoi = '';
        $dongia = '';
        $sotienthanhtoan = '';

        if(isset($_POST['tenchuho'])) { 
            $tenchuho = trim($_POST['tenchuho']); 
        }
        if(isset($_POST['chisocu'])) {
            $chisocu = trim($_POST['chisocu']); 
        }
        if(isset($_POST['chisomoi'])) {
            $chisomoi = trim($_POST['chisomoi']); 
        }
        if(isset($_POST['dongia'])) {
            $dongia = trim($_POST['dongia']); 
        }
        
        if (is_numeric($chisocu) && is_numeric($chisomoi) && is_numeric($dongia)) { 
            $sotienthanhtoan = ($chisomoi - $chisocu) * $dongia;
        } else {
            echo "<font color='red'>Vui lòng nhập vào số! </font>"; 
            $sotienthanhtoan = "";
        }
    ?>
    <form align='center' action="" method="post">
        <table>
            <thead>
                <tr>
                    <th colspan="3" align="center"><h4>THANH TOÁN TIỀN ĐIỆN</h4></th>
                </tr>
            </thead>
            <tr>
                <td>Tên chủ hộ:</td>
                <td><input type="text" name="tenchuho" value="<?php echo $tenchuho; ?>"/></td>
            </tr>
            <tr>
                <td>Chỉ số cũ:</td>
                <td><input type="text" name="chisocu" value="<?php echo $chisocu; ?>"/></td>
                <td>(Kw)</td>
            </tr>
            <tr>
                <td>Chỉ số mới:</td>
                <td><input type="text" name="chisomoi" value="<?php echo $chisomoi; ?>"/></td>
                <td>(Kw)</td>
            </tr>
            <tr>
                <td>Đơn giá:</td>
                <td><input type="text" name="dongia" value="<?php echo $dongia; ?>"/></td>
                <td>(VNĐ)</td>
            </tr>
            <tr>
                <td>Số tiền thanh toán:</td>
                <td><input type="text" name="sotienthanhtoan" disabled="disabled" value="<?php echo $sotienthanhtoan; ?>"/></td>
                <td>(VNĐ)</td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Tính" name="tinh" />
                </td>
            </tr>
        </table>
    </form>
</body>
</html>