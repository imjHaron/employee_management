<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List đơn giản</title>
    <link rel="stylesheet" href="css/u_style.css">
</head>
<style>
img{
    width: 50px;
    height: 50px;
}
table, th, td{
    border:1px solid #868585;
    text-align: center;
}
table{
    border-collapse:collapse;
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
    if (!isset($_GET['page2_5']))
    { $_GET['page2_5'] = 1;
    }


    //vị trí của mẩu tin đầu tiên trên mỗi trang
    $offset =($_GET['page2_5']-1)*$rowsPerPage;
    //lấy $rowsPerPage mẩu tin, bắt đầu từ vị trí $offset
    $result = mysqli_query($conn, 'SELECT Hinh, Ten_sua,Ten_loai,Trong_luong,Don_gia,Ten_hang_sua
                FROM sua,hang_sua,loai_sua 
                WHERE sua.Ma_loai_sua = loai_sua.Ma_loai_sua AND sua.Ma_hang_sua = hang_sua.Ma_hang_sua
                 LIMIT '. $offset . ', ' .$rowsPerPage);


    echo "<p align='center'><font size='5'> THÔNG SẢN PHẨM</font></P>";
    echo "<table align='center' width='500px'cellpadding='2' cellspacing='2' style='bordercollapse:collapse'>";
    echo '<tr>

    <th width="100">Hình</th>
    <th width="200">NỘI DUNG</th>

    </tr>';

    if(mysqli_num_rows($result)<>0)
    { $stt=1;
    while($rows=mysqli_fetch_array($result))
    { echo "<tr>";
    echo "<td  align='center'><img src='Hinh_sua/$rows[Hinh]'></td>";
    echo "<td>";
    echo "<b>$rows[Ten_sua]<br></b>";
    echo "<p>Nhà SẢN XUẤT: $rows[Ten_hang_sua]<br></p>";
    echo "$rows[Ten_loai] - ";
    echo "$rows[Trong_luong] Gr - ";
    echo "$rows[Don_gia] VNĐ";
    echo "</td>";
    echo "</tr>";
    $stt+=1;
        }
    }
    echo"</table>";
    echo "<div class='back-button'><a href='u_index.php'>Back</a></div>";
?>

</body>
</html>