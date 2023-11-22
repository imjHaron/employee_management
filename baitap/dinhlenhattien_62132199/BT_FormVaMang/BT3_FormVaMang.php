<!DOCTYPE html>
<html>
<head>
    <title>Tính năm âm lịch</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: whitesmoke;
        }
        h1 {
            text-align: center;
        }
        form {
            text-align: center;
            margin-top: 30px;
        }
        input[type="number"] {
            padding: 8px;
            width: 200px;
            font-size: 16px;
        }
        input[type="text"] {
            padding: 8px;
            width: 200px;
            background-color: #fff;
            border: none;
            font-size: 16px;
            cursor: not-allowed;
        }
        button[type="submit"] {
            padding: 10px 20px;
            background-color: limegreen;
            color: #fff;
            border: none;
            font-size: 16px;
            cursor: pointer;
        }
        .result-container {
            margin-top: 30px;
            text-align: center;
        }
        .result-container img {
            max-width: 200px;
            height: auto;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Tính năm âm lịch</h1>
    <form method="post" action="">
        Năm Dương Lịch: <input type="number" name="nam" required><br><br>
        <button type="submit" name="submit">Xử Lý</button><br>
    </form>

    <div class="result-container">
        <?php
        if (isset($_POST['submit'])) {
            $nam = $_POST['nam'];
            $mang_can = array("Quý", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm");
            $mang_chi = array("Hợi", "Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất");
            $mang_hinh = array("hoi.jpg", "ty.jpg", "suu.jpg", "dan.jpg", "mao.jpg", "thin.jpg", "ran.jpg", "ngo.jpg", "mui.jpg", "than.jpg", "dau.jpg", "tuat.jpg");

            $nam = $nam - 3;
            $can = $nam % 10;
            $chi = $nam % 12;
            $nam_am_lich = $mang_can[$can] . " " . $mang_chi[$chi];
            $hinh = $mang_hinh[$chi];
            echo "Năm Âm Lịch: ";
            echo "<input type='text' name='nam_am_lich' value='$nam_am_lich' readonly><br><br>";
            echo "<img src='12con_giap/$hinh' alt='Hình ảnh con vật'>";
        }
        ?>
    </div>
</body>
</html>