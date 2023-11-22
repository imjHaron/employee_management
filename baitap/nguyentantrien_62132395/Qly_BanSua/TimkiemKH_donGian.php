<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Tim kiem khach hang</title>

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

<form action="" method="get">

<table bgcolor="#eeeeee" align="center" width="70%" border="1" 

	   cellpadding="5" cellspacing="5" style="border-collapse: collapse;">

<tr>

	<td align="center"><font color="blue"><h3>TÌM KIẾM THÔNG TIN KHÁCH HÀNG</h3></font></td>

</tr>

<tr>

	<td align="center">Tên khách hàng: <input type="text" name="tenkhachhang" size="30" 

				value="<?php if(isset($_GET['tenkhachhang'])) echo $_GET['tenkhachhang'];?>">

			<input type="submit" name="tim" value="Tìm kiếm"></td>

</tr>

</table>

</form>

<?php 

if($_SERVER['REQUEST_METHOD']=='GET')

{ 

	if(empty($_GET['tenkhachhang'])) echo "<p align='center'>Vui lòng nhập tên khách hàng</p>";

	else

	{



		$tenkhachhang=$_GET['tenkhachhang'];	

		require('connect.php');

		$query="Select khach_hang.*, hoa_don.*, ct_hoadon.*, sua.* 

		      from Khach_hang,hoa_don,ct_hoadon,sua 

		      WHERE khach_hang.Ma_khach_hang=hoa_don.Ma_khach_hang AND hoa_don.So_hoa_don = ct_hoadon.So_hoa_don AND sua.Ma_sua = ct_hoadon.Ma_sua

					AND Ten_khach_hang like '%$tenkhachhang%'";

		$result=mysqli_query($conn,$query);		

		if(mysqli_num_rows($result)<>0)

		{	
			$rows=mysqli_num_rows($result);

			echo "<div align='center'><font size='5' color='blue'><b>Có $rows hóa đơn được tìm thấy.</b></font></div> <br>";


			



			while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))

			{

				echo '<table align="center" border="1" cellpadding="5" cellspacing="5" style="border-collapse:collapse;">

					<tr bgcolor="#eeeeee"><td colspan="2" align="center"><h3>'.

						$row['Ten_khach_hang'].' - '.$row['So_hoa_don'].'</h3></td></tr>';
				echo '<tr><td width="200" align="center"><img src="Hinh_Sua/'.$row['Hinh'].'"/></td>';

				echo '<td><b>Mã sữa: </b>'.$row['Ma_sua'].'<br />';

				echo '<b>Số lượng: </b>'.$row['So_luong'].'<br />';

				echo '<b>Đơn giá: </b>'.$row['Don_gia'].'<br />';

				echo '</td></tr></table>';

				echo '<br>';

			}

		}

		else echo "<div><b>Không tìm thấy sản phẩm này.</b></div>";


	

	}

}





if($_SERVER['REQUEST_METHOD']=='GET')

{ 

	if(empty($_GET['tenkhachhang'])) echo "<p align='center'>Vui lòng nhập tên khách hàng</p>";

	else

	{



		$tenkhachhang=$_GET['tenkhachhang'];	


		$query="Select khach_hang.* 

		      from Khach_hang

		      WHERE khach_hang.Ten_khach_hang=khach_hang.Ten_khach_hang

					AND Ten_khach_hang like '%$tenkhachhang%'";

		$result=mysqli_query($conn,$query);		

		if(mysqli_num_rows($result)<>0)

		{	
			$rows=mysqli_num_rows($result);


			while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))

			{


				echo "<p align='center'><font size='5' color='blue'> THÔNG TIN CUSTOMER</font></P>";


				echo '<table align="center" border="1" cellpadding="6" cellspacing="6" style="border-collapse:collapse;">

					<tr bgcolor="#eeeeee"><td colspan="2" align="center"><h3>'.

						$row['Ten_khach_hang'].'</h3></td></tr>';
				echo '<td><i><b>Mã khách hàng:</b></i>'.$row['Ma_khach_hang'].'<br />';

				echo '<i><b>Giới tính: </i></b>'.$row['Phai'].'<br />';

				echo '<i><b>Địa chỉ:</b></i>'.$row['Dia_chi'].'<br />';

				echo '<i><b>Điện thoại:</b></i>'.$row['Dien_thoai'].'<br />';

				echo '<i><b>Email:</b></i>'.$row['Email'].'<br />';

				echo '</td></tr></table>';

			}

		}

		else echo "<div><b>Không tìm thấy sản phẩm này.</b></div>";


	

	}

}


?>

</body>

</html>