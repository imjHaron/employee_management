<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Thông tin sữa</title>

<style>
	
	table tr:nth-child(even) {
		background-color: yellow;

	}

	.gender {
		width: 20px;
		height: 20px;
		vertical-align: middle;
	}

</style>

</head>

<body>

<?php

 

  // Ket noi CSDL

//require("connect.php");

$conn = mysqli_connect ('localhost', 'root', '', 'qlbansua') 

		OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );

$sql = 'select Ma_khach_hang, Ten_khach_hang,Phai, Dia_chi,Dien_thoai from khach_hang';

$result = mysqli_query($conn, $sql);



echo "<p align='center'><font size='5' color='blue'> THÔNG TIN CUSTOMER</font></P>";

 echo "<table align='center' width='700' border='1' cellpadding='2' cellspacing='2' style='border-collapse:collapse'>";

 echo '<tr>
 		<th width="50">STT</th>

    <th width="50">Mã KH</th>

    <th width="200">Tên Khách hàng</th>

    <th width="150">Giới tính</th>

    <th width="350">Địa chỉ</th>

    <th width="200">Số điện thoại</th>

</tr>';



 if(mysqli_num_rows($result)<>0)

 {	 $stt=1;

	while($rows=mysqli_fetch_row($result))

	{
	          echo "<tr>";

		     echo "<td>$stt</td>";

		     echo "<td>$rows[0]</td>";

		     echo "<td>$rows[1]</td>";

		     if($rows[2] == "0") {
		     	echo"<td text align ='center'><img src='images/male.png' alt='Nam' class='gender'></td>";
		     } else {
		     	echo"<td text align ='center'><img src='images/female.png' alt='Nu' class = 'gender'></td>";
		     }



		     echo "<td>$rows[3]</td>";

		     echo "<td>$rows[4]</td>";

		     echo "</tr>";

	             $stt+=1;

	}

 }

echo"</table>";

?>

</body>

</html>