<?php
	echo "Câu 1.1: <br>";
	echo $n = rand(-50,50);
	if ($n < 0) {
		echo "<br>n là số âm";
		$n = abs($n);
	}else
	echo "<br> n là số dương";
	echo "<br>Giá trị của n là: $n";
	echo "<br>";
	echo "==============";
	echo "<br>Câu 1.2: <br>";
	$n = 10; // Số phần tử trong mảng
	$numbers = array();

	for ($i = 0; $i < $n; $i++) {
	    $randomNumber = rand(-100, 100);
	    $numbers[] = $randomNumber;
	}

	// In mảng
	print_r($numbers);
?>