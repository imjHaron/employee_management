<!DOCTYPE html>
<html>
<head>
    <title>Thông tin cá nhân</title>
</head>
<body>
    <h1>Enter your information:</h1>
    <form action="" method="post">
        Họ tên: <input type="text" name="hoTen"><br><br>
        Địa chỉ: <input type="text" name="diaChi"><br><br>
        Số điện thoại: <input type="text" name="soDienThoai"><br><br>
        Giới tính: 
        <input type="radio" name="gioiTinh" value="Nam">Nam
        <input type="radio" name="gioiTinh" value="Nữ">Nữ<br><br>
        Quốc tịch: 
        <select name="quocTich">
            <option value="Vietnam">Việt Nam</option>
            <option value="USA">USA</option>
            <option value="Japan">Japan</option>
            <!-- Thêm các quốc tịch khác nếu cần -->
        </select><br><br>
        Các môn đã học: <br>
        <input type="checkbox" name="monHoc[]" value="PHP & MySQL">PHP & MySQL<br>
        <input type="checkbox" name="monHoc[]" value="C#">C#<br>
        <input type="checkbox" name="monHoc[]" value="XML">XML<br>
        <input type="checkbox" name="monHoc[]" value="Python">Python<br><br>
        Ghi chú: <br>
        <textarea name="ghiChu" rows="4" cols="50"></textarea><br><br>
        <input type="submit" value="Gửi">
        <!-- <input type="button" value="Huỷ" onclick="window.history.back();"> -->
    </form>
</body>
</html>
