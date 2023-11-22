<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/u_style.css">

</head>
<style>
img{
    width: 100px;
    height: 100px;
}
table, th, td{
    border:1px solid #868585;
    text-align: center;
}
table{
    border-collapse:collapse;
}
table tr:nth-child(odd){
    background-color:#FFFACD;
}
th{
    background-color: #4682B4;
}


</style>
<body>
<?php           
                
    $conn = mysqli_connect("localhost", "root", "", "qlbansua");
    mysqli_set_charset($conn, 'UTF8');
    $rowsPerPage=1; //số mẩu tin trên mỗi trang, giả sử là 10
    if (!isset($_GET['page']))
    { $_GET['page'] = 1;
    }


    //vị trí của mẩu tin đầu tiên trên mỗi trang
    $offset =($_GET['page']-1)*$rowsPerPage;
    //lấy $rowsPerPage mẩu tin, bắt đầu từ vị trí $offset
    $result = mysqli_query($conn, 'SELECT Hinh,Loi_ich,TP_Dinh_Duong,Ten_sua,Ten_loai,Trong_luong,Don_gia,Ten_hang_sua
                FROM sua,hang_sua,loai_sua 
                WHERE sua.Ma_loai_sua = loai_sua.Ma_loai_sua AND sua.Ma_hang_sua = hang_sua.Ma_hang_sua
                 LIMIT '. $offset . ', ' .$rowsPerPage);
    
    
    echo "<p align='center'><font size='5'> THÔNG TIN SẢN PHẨM</font></P>";
    echo "<table align='center' width='500px'cellpadding='2' cellspacing='2' style='bordercollapse:collapse'>";
    echo '<tr>
   


    </tr>';
    
    if(mysqli_num_rows($result)<>0)
    { $stt=1;
    while($rows=mysqli_fetch_array($result))
    { 
    echo '<tr>';
    echo "<th colspan ='2' align='center'>$rows[Ten_sua]</th>";
    echo '</tr>';
    echo "<tr>";
    echo "<td align='center'><img src='Hinh_sua/$rows[Hinh]'></td>";
  
    echo "<td style ='text-align: justify;'>";

    echo "<p><b>Thành Phần Dinh Dưởng:<br></b> $rows[TP_Dinh_Duong]<br></p>";
    echo "<p><b>Lợi ích:<br></b> $rows[Loi_ich]<br></p>";
   
    echo "<b>Trọng Lượng:</b>$rows[Trong_luong] gr - ";
    echo "<b>Đơn Giá:</b>$rows[Don_gia] VNĐ";
    echo "</td>";
    echo "</tr>";
    $stt+=1;
        }
    }
    echo"</table>";
    echo "<div class='back-button'><a href='list_co_link.php'>Back</a></div>";
?>
</body>
</html>