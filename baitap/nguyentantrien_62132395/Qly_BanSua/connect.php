<?php




Define ('DB_USER', 'root');
Define ('DB_PASSWORD', '');
Define ('DB_HOST', 'localhost');
Define ('DB_NAME', 'qlbansua');

$conn = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) 

		OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );


	mysqli_set_charset($conn,'utf8')

?>