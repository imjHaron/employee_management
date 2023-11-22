<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/u_style.css">
<title>Thông tin sữa</title>

<style>

table tr:nth-child(even) {
    background-color: #C5DB7DFF;
}

table th {
    font-weight: bold;
}

.gender-icon {
    width: 30px;
    height: 30px;
    vertical-align: middle;
}

.anh {
	text-align:  center;
}


</style>
</head>

<body>

<?php


// Kết nối CSDL
$conn = mysqli_connect ('localhost', 'root', '', 'qlbansua') 

        OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );

$sql = 'select Ma_khach_hang, Ten_khach_hang,Phai, Dia_chi,Dien_thoai, Email from khach_hang';

$result = mysqli_query($conn, $sql);

// Các dòng HTML và in kết quả tại đây




echo "<p align='center'><font size='5' color='blue'> THÔNG TIN KHÁCH HÀNG</font></P>";

 echo "<table align='center' width='1000' border='1' cellpadding='2' cellspacing='2' style='border-collapse:collapse'>";

 echo '<tr>

    <th width="50">STT</th>

    <th width="50">Mã khách hàng</th>

    <th width="100">Tên khách hàng</th>

    <th width="20">Phái</th>

    <th width="200">Địa chỉ</th>

    <th width="50">Điện thoại</th>

    <th width="100">Email</th>

</tr>';



 if(mysqli_num_rows($result)<>0)

 {	 $stt=1;

	while($rows=mysqli_fetch_row($result))

	{          echo "<tr>";

		     echo "<td>$stt</td>";

		     echo "<td>$rows[0]</td>";

		     echo "<td>$rows[1]</td>";

        echo "<td class='anh'>";
        if ($rows[2] == '0') {
            echo "<img src='img/anh_Nam.jpg' alt='Nam' class='gender-icon'>";
        } elseif ($rows[2] == '1') {
            echo "<img src='img/anh_Nữ.jpg' alt='Nữ' class='gender-icon'>";
        }
        echo "</td>";

		     echo "<td>$rows[3]</td>";
		     echo "<td>$rows[4]</td>";		     
		     echo "<td>$rows[5]</td>";


		     echo "</tr>";

	             $stt+=1;

	}

 }

echo"</table>";

echo "<div class='back-button'><a href='u_index.php'>Back</a></div>";
?>

</body>

</html>

