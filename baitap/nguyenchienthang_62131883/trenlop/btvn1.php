<?php
	$n = rand(-50, 50);

	echo "n: $n";
	echo "<br>";
	if ($n < 0) {
		echo "$n là số âm thay đổi thành ". $n * -1;
	}
	else
		echo "$n là số dương.";

	echo "<br>";
	$n = rand(1, 100); 
	$array = []; 

	for ($i = 0; $i < $n; $i++) {
		$array[$i] = rand(-100, 100);
	}
	foreach ($array as $i => $value) {
		echo "<br>Khoá $i - Giá trị $value";
	}

	$sum = 0;
	for ($i = 0; $i < $n; $i++) {
		if ($i % 2 == 1) {
			$sum += $array[$i];
		}
	}

	echo "<br>";
	echo "Tổng các phần tử ở vị trí lẻ là: $sum";
?>