<?php
	function tinhTong($a, $b, $c = false) {
		$tong = $a + $b;
		if ($c != false) {
			$tong += $c;
		}
		return $tong;
	}

	$so1 = 12;
	$so2 = 13;

	echo "Kq 1: " .tinhTong($so1, $so2);
	echo "<br>Kq 2: " .tinhTong($so1, $so2, true);	
?>