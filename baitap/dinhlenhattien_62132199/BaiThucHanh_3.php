<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <title>Bài Thực Hành 3</title>
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
        label {
            margin-right: 10px;
        }
        .input-group {
            margin-bottom: 10px;
            text-align: center;
        }
        .input-group label {
            display: block;
        }
        .input-group input[type="text"] {
            width: 200px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .input-group input[type="submit"] {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
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
    $sothunhat = '';
    $sothuhai = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

        echo "<div class='result'>Kết quả: " . $ketqua . "</div>";
    }
    ?>
    <form action="BaiThucHanh_3.php" method="post">
        <table>
            <h4>PHÉP TÍNH TRÊN HAI SỐ</h4>
            <div align="center">
            <label>Chọn Phép Tính:</label>
            <label><input type="radio" name="radPhepTinh" value="Cộng" <?php if(isset($_POST['radPhepTinh']) && $_POST['radPhepTinh'] == 'Cộng') echo 'checked';?>> Cộng</label>
            <label><input type="radio" name="radPhepTinh" value="Trừ" <?php if(isset($_POST['radPhepTinh']) && $_POST['radPhepTinh'] == 'Trừ') echo 'checked';?>> Trừ</label>
            <label><input type="radio" name="radPhepTinh" value="Nhân" <?php if(isset($_POST['radPhepTinh']) && $_POST['radPhepTinh'] == 'Nhân') echo 'checked';?>> Nhân</label>
            <label><input type="radio" name="radPhepTinh" value="Chia" <?php if(isset($_POST['radPhepTinh']) &&$_POST['radPhepTinh'] == 'Chia') echo 'checked';?>> Chia</label>
            </div>
            <div class="input-group">
                <label for="sothunhat">Số thứ nhất:</label>
                <input type="text" name="sothunhat" id="sothunhat" value="<?php echo isset($_POST['sothunhat']) ? $_POST['sothunhat'] : ''; ?>">
            </div>
            <div class="input-group">
                <label for="sothuhai">Số thứ hai:</label>
                <input type="text" name="sothuhai" id="sothuhai" value="<?php echo isset($_POST['sothuhai']) ? $_POST['sothuhai'] : ''; ?>">
            </div>
            <div class="input-group">
                <input type="submit" value="Tính" name="tinh">
            </div>
        </table>
    </form>
</body>
</html>