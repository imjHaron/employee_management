<?php  

$sName = "localhost";
$uName = "root";
$pass  = "";
$db_name = "qlnv";

try {
		$conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $pass);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOExeption $e){
		echo "Kết nối thất bại: ". $e->getMessage();
		exit;
	}
?>