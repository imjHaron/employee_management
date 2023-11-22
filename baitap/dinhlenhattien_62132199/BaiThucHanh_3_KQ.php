<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <title>Kết quả tính toán</title>
    <style type="text/css">
        body {  
            background-color: whitesmoke;
            font-family: verdana;
        }
        h4 {
            text-align: center;
            color: #ff8100;
            font-size: medium;
            margin-top: 20px;
        }
        table {
            background: whitesmoke;
            border: 0 solid;
            margin: 0 auto;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .result {
            text-align: center;
            color: #ff8100;
            font-size: large;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <?php
    $sothunhat = $_POST["sothunhat"];
    $sothuhai = $_POST["sothuhai"];
    $pheptinh = $_POST["radPhepTinh"];

    $ketqua = 0;

    switch ($pheptinh) {
        case "Cộng":
            $ketqua = $sothunhat + $sothuhai;
            break;
        case "Trừ":
            $ketqua = $sothunhat - $sothuhai;
            break;
        case "Nhân":
            $ketqua = $sothunhat * $sothuhai;
            break;
        case "Chia":
            if ($sothuhai != 0) {
                $ketqua = $sothunhat / $sothuhai;
            } else {
                echo "Lỗi: Số thứ hai phải khác không để thực hiện phép chia.";
                exit();
            }
            break;
    }
    ?>

    <table>
        <h4>Kết quả tính toán</h4>
        <div class="result">Phép tính: <?php echo $pheptinh; ?></div>
        <div class="result">Số thứ nhất: <?php echo $sothunhat; ?></div>
        <div class="result">Số thứ hai: <?php echo $sothuhai; ?></div>
        <div class="result">Kết quả: <?php echo $ketqua; ?></div>
    </table>
</body>
</html>