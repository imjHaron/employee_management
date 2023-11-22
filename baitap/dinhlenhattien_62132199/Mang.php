<?php
	$arr = array(1,2,3,4,5);
	print_r($arr);
	echo "<br>";
	foreach ($arr as $i => $value) {
		echo "Khóa: $i - Giá trị: $value <br>";
	}
	foreach ($arr as $giatri) {
		echo "Giá trị: $giatri <br>";
	}
	for ($i=0; $i < count($arr); $i++) { 
		echo $arr[$i]; " ";
	}
	$list = array(
    "CNTT" => array(
        "KTPM" => array("Hằng","Minh","Ngoan","Hưng"),
        "HTTH" => array("Thúy","Ngà","Sơn","Cường"),
        "MMT" => array("Nam","Anh","Minh"),
    ),
    "NN" => array(
        "PD" => array("Bình","Hoa"),
        "DL" => array("Khánh","Quỳnh"),
    )
);

foreach ($list as $khoa => $value) {
    echo "<h2>$khoa</h2><ul>";
    foreach ($value as $gv => $name) {
        echo "<li>$gv: <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        foreach($name as $name){
        	echo "$name <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        }
        echo "</li>\n";
    }
    echo "</ul>";
}
?>