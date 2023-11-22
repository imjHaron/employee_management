<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Thêm Sữa Mới</title>
    <link rel="stylesheet" href="css/them_sua.css">

</head>
<body>
<h2 align="center">Thêm Sữa Mới</h2>
<form action="them_Sua.php" method="post">
    <table align="center" width="400" cellpadding="2" cellspacing="2" style="border-collapse: collapse">
        <tr>
            <td></td>
            <td>
                <div class="form-group">
                    <input type="text" name="Ma_sua" required>
                    <label>Mã sữa:</label>
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <div class="form-group">
                    <input type="text" name="Ten_sua" required>
                    <label>Tên sữa:</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>Hãng sữa:</td>
            <td>
                <div class="form-group">
                    <select name="hang_sua" required>
                    <?php
                    // Kết nối CSDL
                    $conn = mysqli_connect('localhost', 'root', '', 'qlbansua') or die('Could not connect to MySQL: ' . mysqli_connect_error());

                    // Truy vấn CSDL để lấy danh sách hãng sữa
                    $query = "SELECT ten_hang_sua FROM hang_sua";
                    $result = mysqli_query($conn, $query);

                    // Tạo các tùy chọn từ kết quả truy vấn
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<option value="' . $row['ten_hang_sua'] . '">' . $row['ten_hang_sua'] . '</option>';
                    }

                    // Đóng kết nối CSDL
                    mysqli_close($conn);
                    ?>
                    </select>
                </div>
            </td>
        </tr>
        <tr>
            <td>Loại sữa:</td>
            <td>
                <div class="form-group">
                    <select name="loai_sua" required>
                    <?php                                                                                    
                    $conn = mysqli_connect('localhost', 'root', '', 'qlbansua') or die('Could not connect to MySQL: ' . mysqli_connect_error());

                    // Truy vấn CSDL để lấy danh sách loại sữa
                    $query = "SELECT ten_loai FROM loai_sua";
                    $result = mysqli_query($conn, $query);

                    // Tạo các tùy chọn từ kết quả truy vấn
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<option value="' . $row['ten_loai'] . '">' . $row['ten_loai'] . '</option>';
                    }

                    // Đóng kết nối CSDL
                    mysqli_close($conn);
                    ?>
                    </select>
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <div class="form-group">
                    <input type="text" name="Trong_luong" required>
                    <label>Trọng lượng (gr hoặc ml):</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>Hình ảnh:</td>
            <td>
                <div class="form-group">
                    <label for="image"></label>
                    <input type="file" name="image" id="image" accept="image/*">
                </div>
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                <div class="form-group">
                    <input type="text" name="Don_gia" required>
                    <label>Đơn giá (VNĐ):</label>
                </div>
            </td>
        </tr>
        <tr>
            <td>Thành phần dinh dưỡng:</td>
            <td>
                <div class="form-group">
                    <textarea name="thanh_phan_dinh_duong" rows="5" required></textarea>
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" id="btn-login" value="Thêm Sữa">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <div class="back-button"><a href="u_index.php">Back</a></div>
            </td>
        </tr>

    </table>
</form>
</body>
</html>
