<?php

$arr = array(1,2,3,4,5);
print_r($arr);
foreach ($arr as $i => $value) {
	echo "<br> Khóa: $i - Giá trị: $value";
}
foreach ($arr as $giatri) {
	echo "<br>Giá trị: $giatri";
}
 echo"<br>";
for ($i=0; $i < count($arr); $i++) { 
	echo "$arr[$i]  ";
}

$list = array("CNTT" => array("KTPM" => array("Hằng","Minh","Ngoan","Hưng"), "HTTT" => array("Thúy","Ngà","Sơn","Cường"), "MMT" => array("Nam", "Anh", "Minh")), "NN" =>array("PD" =>array("Bình", "Hoa"), "DL" => array("Khánh", "Quỳnh")));
foreach ($list as $khoa => $value) {
	echo "<h3>$khoa</h3><ul>";
	foreach ($value as $bm => $gv) {
		echo"<h4>$bm</h4>\n";
	}
		foreach ($gv as $gv1 => $tengiaovien) {
			echo"<li>$khoa - $bm - $gv1 - $tengiaovien</li>\n";
		}
}
 ?>