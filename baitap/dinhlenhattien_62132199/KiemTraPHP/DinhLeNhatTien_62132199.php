<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Bài Kiểm Tra</title>
     <style type="text/css">
    body {  
        background-color: whitesmoke;
    }
    table {
        background: whitesmoke;
        border: 0 solid;
        margin: 0 auto;
        border-radius: 10px;
        width: fit-content;    
    }
    thead {
        background: #fff14d;   
    }
    th, td {
        border: 1px solid black;
        padding: 8px; 
        text-align: left; 
    }
    h3 {
        font-family: verdana;
        text-align: center;
        color: #ff8100;
        font-size: medium;
    }
    .gender-label {
        display: inline-block;
        margin-right: 10px;
    }
    </style>
</head>
<body>
    <?php
    $sinhVien = array(
        array('Mã lớp' => '62.CNTT-1', 'Mã sinh viên' => '6212341', 'Họ tên' => 'Nguyễn Minh Anh', 'Giới tính' => 'Nữ', 'Ngày sinh' => '2002-08-09'),
        array('Mã lớp' => '62.CNTT-1', 'Mã sinh viên' => '6210123', 'Họ tên' => 'Trần Anh Tú', 'Giới tính' => 'Nam', 'Ngày sinh' => '2002-05-21'),
        array('Mã lớp' => '62.CNTT-2', 'Mã sinh viên' => '6211012', 'Họ tên' => 'Nguyễn Ngọc Thanh', 'Giới tính' => 'Nam', 'Ngày sinh' => '2002-02-30'),
        array('Mã lớp' => '62.CNTT-3', 'Mã sinh viên' => '6210123', 'Họ tên' => 'Lê Phương Thảo', 'Giới tính' => 'Nữ', 'Ngày sinh' => '2001-10-15'),
    );

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['luuSV'])) {
        luuDanhSachSV();
    }
}

function luuDanhSachSV() {
    global $dsHocSinh;
    $file = fopen('HotenSV_MSSV.dat', 'w');
    foreach ($dsHocSinh as $sinhVien) {
        $line = implode(',', $sinhVien) . "\n";
        fwrite($file, $line);
    }
    fclose($file);

    echo "Danh sách sinh viên đã được lưu vào tập tin HotenSV_MSSV.dat.";
}
    ?>
    <form align='center' method="post" action="">
        <table>
            <thead>
                <tr>
                    <th colspan="3" align="center">
                        <h4 style="text-align: center;">FORM ĐIỀN THÔNG TIN SINH VIÊN</h4>
                    </th>
                </tr>
            </thead>
            <tr>
                <td style="text-align: center;">Mã Lớp:</td>
                <td colspan="2">
                    <select name="lop" id="lop">
                        <option value="62.CNTT-1">62.CNTT-1</option>
                        <option value="62.CNTT-2">62.CNTT-2</option>
                        <option value="62.CNTT-3">62.CNTT-3</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">Giới Tính:</td>
                <td><input type="radio" name="GioiTinh" value="Nam"> Nam</td>
                <td><input type="radio" name="GioiTinh" value="Nữ"> Nữ</td>
            </tr>
            <tr>
                <td style="text-align: center;">Mã Sinh Viên:</td>
                <td colspan="2"><input type="text" name="Masv" id="masv" size="50" required></td>
            </tr>
            <tr>
                <td style="text-align: center;">Họ Tên:</td>
                <td colspan="2"><input type="text" name="HoTen" id="hoten" size="50" required></td>
            </tr>
            <tr>
                <td style="text-align: center;">Ngày Sinh:</td>
                <td colspan="2"><input type="text" name="NgaySinh" id="ngaysinh" size="50" required></td>
            </tr>
            <tr>
                <td colspan="4" align="center">
                    <input type="submit" name="submit" value="Thêm SV">
                    <input type="submit" name="submit" value="Lưu Sinh Viên">
                </td>
            </tr>
        </table>
       </form>
       <?php
       echo "<br><br>";
       echo '<table style="border-collapse: collapse;">';
    echo '<tr>';
    echo '<th style="border: 1px solid black;">Mã lớp</th>';
    echo '<th style="border: 1px solid black;">Mã sinh viên</th>';
    echo '<th style="border: 1px solid black;">Họ tên</th>';
    echo '<th style="border: 1px solid black;">Giới tính</th>';
    echo '<th style="border: 1px solid black;">Ngày sinh</th>';
    echo '</tr>';

    foreach ($sinhVien as $sinhVien) {
        echo '<tr>';
        echo '<td style="border: 1px solid black;">' . $sinhVien['Mã lớp'] . '</td>';
        echo '<td style="border: 1px solid black;">' . $sinhVien['Mã sinh viên'] . '</td>';
        echo '<td style="border: 1px solid black;">' . $sinhVien['Họ tên'] . '</td>';
        echo '<td style="border: 1px solid black;">' . $sinhVien['Giới tính'] . '</td>';
        echo '<td style="border: 1px solid black;">' . $sinhVien['Ngày sinh'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
       ?>
</body>
</html>
