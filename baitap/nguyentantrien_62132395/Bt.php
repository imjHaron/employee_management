<?php
define("Pi", 3.14);
$a = rand(1, 4);
$b = rand(10, 100);
echo "Số a: $a <br>"; 
echo "số b: $b <br>";

switch ($a) {
    case 1:
        $chu_vi = 4 * $b;
        $dien_tich = $b * $b;
        echo "Chu vi hình vuông= $chu_vi";
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
}




?>