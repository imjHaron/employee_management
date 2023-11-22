<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
img{
    width: 50px;
    height: 50px;
}
table, th, td{
    border:1px solid #868585;
    text-align: center;
    height: 50px;
    
}
table{
    border-collapse:collapse;
    margin-left: 200px;
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
  $sql="select * from sua";
  $result = mysqli_query($conn, $sql);

  
  echo "<p align='center'><font size='5' style='color:white'> THÔNG TIN SỮA</font></P>";
  echo "<table align='center' width='auto'cellpadding='2' cellspacing='2' style='bordercollapse:collapse'>";
  echo '<tr>
  <th width="50">STT</th>
  <th width="50">Mã sữa</th>
  <th width="150">Tên sữa</th>
  <th width="50">Mã Hảng Sửa</th>
  <th width="100">Mã Loại Sửa</th>
  <th width="50">Trọng Lượng</th>
  <th width="100">Đơn Giá</th>
  <th width="200">TP Dinh Dưởng</th>
  <th width="200">Lợi ích</th>
  <th width="100">Hình</th>

  </tr>';

  if(mysqli_num_rows($result)<>0)
  { $stt=1;
  while($rows=mysqli_fetch_array($result))
  { echo "<tr>";
      echo "<td>$stt</td>";
      echo "<td>$rows[0]</td>";
      echo "<td>$rows[1]</td>";
      echo "<td>$rows[2]</td>";
      echo "<td>$rows[3]</td>";
      echo "<td>$rows[4]</td>";
      echo "<td>$rows[5]</td>";
      echo "<td>$rows[6]</td>";
      echo "<td>$rows[7]</td>";
      echo "<td><img src='Hinh_sua/$rows[Hinh]'></td>";
      echo "</tr>";
  $stt+=1;
  }
  }
  echo"</table>";
?>

</body>
</html>