<?php
	$list = array(
		'1' => "Chỉ Một Đêm Nữa Thôi",
		'2'=>"Don't Côi",
		'5'=>"À Lôi",
		'4'=>"M.",
		'3'=>"Chìm Sâu",
		'9'=>"Thương",
		'6'=>"Một Nhà",
		'7'=>"Ghé Qua",
		'8'=>"Buâng Khuâng",
		'10'=>"Sài Gòn Đâu Có Lạnh"
	);
	krsort($list);
	echo "<h2>Bảng Xếp Hạng Bài Hát</h2>";
	echo "<ol>";
	foreach ($list as $rank => $name) {
		echo "<li> - $name</li>";
	}
	echo "</ol>";
?>