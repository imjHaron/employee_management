<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List dạng cột</title>
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
    width: 400px;
    
}
table{
    border-collapse:collapse;
    width: 500px;
    margin-left: 450px;
}
table tr:nth-child(odd){
    background-color:#FFFACD;
}
table tr:nth-child(even){
    background-color:white;
}
table tr:nth-child(1){
    background-color:skyblue;
}
</style>
<body>
<?php           
                
    $conn = mysqli_connect("localhost", "root", "", "qlbansua");
    mysqli_set_charset($conn, 'UTF8');
    $rowsPerPage=10; //số mẩu tin trên mỗi trang, giả sử là 10
    if (!isset($_GET['page2_6']))
    { $_GET['page2_6'] = 1;
    }


    //vị trí của mẩu tin đầu tiên trên mỗi trang
    $offset =($_GET['page2_6']-1)*$rowsPerPage;
    //lấy $rowsPerPage mẩu tin, bắt đầu từ vị trí $offset
    $result = mysqli_query($conn, 'SELECT Hinh, Ten_sua,Ten_loai,Trong_luong,Don_gia,Ten_hang_sua
                FROM sua,hang_sua,loai_sua 
                WHERE sua.Ma_loai_sua = loai_sua.Ma_loai_sua AND sua.Ma_hang_sua = hang_sua.Ma_hang_sua
                 LIMIT '. $offset . ', ' .$rowsPerPage);
    
    
    echo "<p align='center' style='color:white'><font size='5'>THÔNG TIN SẢN PHẨM SỬA </font></P>";
    echo "<table align='center'  cellpadding='25' cellspacing='35' style='bordercollapse:collapse>";
   
    echo "<tr>";
  
    echo "</tr>";
    echo "<tr>";
    echo"<td colspan='6'></td>";
    echo "</tr>";
   
    
    if(mysqli_num_rows($result)<>0)
    { $stt=1;
    echo "<tr>";    
    while($rows=mysqli_fetch_array($result))
    {
   
    echo "<td>";
    
    echo "<b>$rows[Ten_sua]<br></b>";
   
   
    echo "$rows[Trong_luong]Gr - " . "$rows[Don_gia] VNĐ" ;
    
    echo "<img src='Hinh_sua/$rows[Hinh]'>";
    echo "</td>";                                 
    $stt+=1;

    if($stt == 6){
        echo "<tr></tr>";
    }
    }
}
    echo "</tr>";
    echo"</table>";
    echo "<div class='back-button'><a href='u_index.php'>Back</a></div>";
?>

</body>
</html>