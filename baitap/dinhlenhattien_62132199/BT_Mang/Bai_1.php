<!DOCTYPE html>
<html>
<head>
    <title>Generate Random Array</title>
    <style type="text/css">

    table{

        color: #ffff00;

        background-color: gray;     

    }

    table th{

        background-color: blue;

        font-style: vni-times;

        color: yellow;

    }

</style>
</head>
<body>
    <form method="post" action="">
        <label for="number">Nhập số:</label>
        <input type="number" name="number" id="number" required>
        <button type="submit">Chạy</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        // Kiểm tra số n là số nguyên dương
        if (!is_numeric($number) || $number <= 0 || floor($number) != $number) {
            echo "Xin hãy nhập số vào.";
        } else {
            // Phát sinh mảng ngẫu nhiên
            $array = array();
            for ($i = 0; $i < $number; $i++) {
                $array[] = rand();
            }

            // Hiển thị mảng
            echo "Mảng ngẫu nhiên là: <br>";
            foreach ($array as $value) {
                echo $value . "<br>";
            }
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        // Kiểm tra số n là số nguyên dương
        if (!is_numeric($number) || $number <= 0 || floor($number) != $number) {
            echo "Vui lòng nhập một số nguyên dương.";
        } else {
            // Phát sinh mảng ngẫu nhiên
            $array = array();
            for ($i = 0; $i < $number; $i++) {
                $array[] = rand();
            }

            // Hiển thị mảng
            echo "Mảng được phát sinh ngẫu nhiên:<br>";
            foreach ($array as $value) {
                echo $value . "<br>";
            }

            // Đếm số phần tử chẵn
            $evenCount = 0;
            foreach ($array as $value) {
                if ($value % 2 == 0) {
                    $evenCount++;
                }
            }
            echo "Số phần tử chẵn: " . $evenCount . "<br>";

            // Đếm số phần tử nhỏ hơn 100
            $lessThan100Count = 0;
            foreach ($array as $value) {
                if ($value < 100) {
                    $lessThan100Count++;
                }
            }
            echo "Số phần tử nhỏ hơn 100: " . $lessThan100Count . "<br>";

            // Tính tổng các số âm
            $negativeSum = 0;
            foreach ($array as $value) {
                if ($value < 0) {
                    $negativeSum += $value;
                }
            }
            echo "Tổng các số âm: " . $negativeSum . "<br>";
        }
    }
    ?>
</body>
</html>