<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>THÔNG TIN SINH VIÊN</title>

    <style type="text/css">
        body {  
            background-color: #d24dff;
        }
        table{
            background: #ffd94d;
            border: 0 solid yellow;
        }
        thead{
            background: #fff14d;    
        }
        td {
            color: blue;
        }
        h3{
            font-family: verdana;
            text-align: center;
            /* text-anchor: middle; */
            color: #ff8100;
            font-size: medium;
        }
    </style>
</head>
<body>

<?php

$list = [
    ['Mã lớp', 'Mã SV', 'Họ tên SV', 'Giới tính', 'Ngày sinh'],
    ['62.CNTT-1', '62131341', 'Nguyễn Thị Minh Anh', 'Nữ', '2002-05-15'],
    ['62.CNTT-1', '6210123', 'Trần Anh Tú', 'Nữ', '2002-03-20'],
    ['62.CNTT-2', '6210123', 'Nguyễn Ngọc Thanh', 'Nam', '2002-11-10'],
    ['62.CNTT-3', '6214587', 'Lê Phương Thảo', 'Nữ', '2001-11-5']
];

function hienThiDSSV($list)
{
    for ($i = 1; $i < count($list); $i++) {
        echo "<tr>";
        foreach ($list[$i] as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
}



if(isset($_POST['MaSv']))  
    $MaSv=trim($_POST['MaSv']); 
else $MaSv="";

if(isset($_POST['HoTen']))  
    $HoTen=trim($_POST['HoTen']); 
else $HoTen="";

if(isset($_POST['NgaySinh']))  
    $NgaySinh=trim($_POST['NgaySinh']); 
else $NgaySinh="";

    if(isset($_POST['ThemSv']))
        if (is_string($MaLop) && is_string($radGT) && is_numeric($MaSv) && is_string($NgaySinh) && is_string($HoTen))
        	    $list=array($MaLop,$MaSv,$radGT,$NgaySinh);
        else {
                 $ThemSv="";
            }

?>

<h1>Câu 1: Danh sách sinh viên</h1>
    <table border="2" cellpadding="1">
        <tr>
        <?php
            foreach ($list[0] as $header) {
                echo "<th>$header</th>";
            }
            ?>
        </tr>
        <?php
            for ($i = 1; $i < count($list); $i++) {
                echo "<tr>";
                foreach ($list[$i] as $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
    <?php
    	echo"<br>";
    ?>
	<form action="" method="post">

<table border="2" cellpadding="1">
    <th colspan="4"><h2>Thông Tin Sinh Viên</h2></th>
    <tr>

        <td>Trường mã lớp: </td>

        <td colspan="2">
        	<select name="MaLop" id="Malop-select">
        <option value="">--Danh sách mã lớp--</option>
        <option value="62cntt1">62.CNTT-1</option>
        <option value="62cntt2">62.CNTT-2</option>
        <option value="62cntt3">62.CNTT-3</option>>
    </select>
    </td>
    </tr>
    <tr>
        <td/>Giới tính: </td>
        <td> <input type="radio" name="radGT" value="Nam"<?php if(isset($_POST['radGT'])&&$_POST['radGT']=='Nam') echo 'checked="checked"';?> checked/>        Nam<br></td>
        <td> <input type="radio" name="radGT" value="Nam"<?php if(isset($_POST['radGT'])&&$_POST['radGT']=='Nam') echo 'checked="checked"';?> checked/>        Nữ<br></td>
    </tr>
    <tr>
        <td >Mã Sv: </td>
        <td colspan="2"><input type="text" name="MaSv" value="<?php  echo $MaSv;?> "/></td>
    </tr>
    <tr>
        <td >Họ và Tên: </td>
        <td colspan="2"><input type="text" name="HoTen" value="<?php  echo $HoTen;?> "/></td>
    </tr>
    <tr>
        <td >Ngày Sinh: </td>
        <td colspan="2"><input type="text" name="NgaySinh" value="<?php  echo $NgaySinh;?> "/></td>
    </tr>
    <tr colspan="3">
     <td align="center"><input type="submit" value="Thêm SV" name="ThemSv" />   <input type="submit" value="Lưu SV vào file" name="LuuSv" /></td>
    </tr>
</table>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['luuSv'])) {
        // Xử lý lưu danh sách sinh viên vào tập tin
        luuDanhSachSV();
    }
}

function luuDanhSachSV() {
    global $list;

    // Mở hoặc tạo file để ghi
    $file = fopen('NguyenTanTrien_62132395.dat', 'w');

    // Ghi thông tin của từng sinh viên vào file
    foreach ($list as $sinhVien) {
        $line = implode(',', $sinhVien) . "\n";
        fwrite($file, $line);
    }

    // Đóng file
    fclose($file);

    echo "Danh sách sinh viên đã được lưu vào tập tin HotenSV_MSSV.dat.";
}
?>
</body>
</html>