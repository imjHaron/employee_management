<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Kết nối CSDL
    $conn = mysqli_connect('localhost', 'root', '', 'qlbansua');

    if (!$conn) {
        die('Could not connect to MySQL: ' . mysqli_connect_error());
    }

    // Lấy dữ liệu từ biểu mẫu
    $ma_sua = $_POST['Ma_sua'];
    $ten_sua = $_POST['Ten_sua'];
    $hang_sua = $_POST['hang_sua'];
    $loai_sua = $_POST['loai_sua'];
    $trong_luong = $_POST['Trong_luong'];
    $don_gia = $_POST['Don_gia'];
    $thanh_phan_dinh_duong = $_POST['thanh_phan_dinh_duong'];

    // Chuẩn bị truy vấn để chèn dữ liệu vào cơ sở dữ liệu
    $query = "INSERT INTO sua (Ma_sua, Ten_sua, Ma_hang_sua, Ma_loai_sua, Trong_luong, Don_gia, Thanh_phan_dinh_duong) VALUES ('$ma_sua', '$ten_sua', (SELECT Ma_hang_sua FROM hang_sua WHERE ten_hang_sua = '$hang_sua'), (SELECT Ma_loai_sua FROM loai_sua WHERE ten_loai = '$loai_sua'), '$trong_luong', '$don_gia', '$thanh_phan_dinh_duong')";

    // Thực hiện truy vấn
    $result = mysqli_query($conn, $query);

    // Kiểm tra kết quả và thông báo cho người dùng
    if ($result) {
        echo "Thêm sản phẩm sữa thành công.";
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }

    // Xử lý tải lên hình ảnh
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_ext = strtolower(end(explode('.', $file_name)));

    $allowed_extensions = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $allowed_extensions)) {
        if ($file_size > 2097152) {
            echo "Lỗi: Kích thước tệp quá lớn, vui lòng chọn tệp nhỏ hơn 2MB.";
        } else {
            $upload_path = 'C:\\xampp\\htdocs\\php\\qlbansua\\img\\'; // Thay đổi đường dẫn theo thư mục lưu trữ của bạn
            $new_file_name = uniqid() . '.' . $file_ext;
            move_uploaded_file($file_tmp, $upload_path . $new_file_name);

            // Sau khi tải lên hình ảnh thành công, bạn có thể lưu đường dẫn của tệp vào cơ sở dữ liệu hoặc làm bất kỳ xử lý nào khác cần thiết.

            // Ví dụ, nếu bạn muốn lưu đường dẫn hình ảnh vào cơ sở dữ liệu:
            $image_path = $upload_path . $new_file_name;
            // Thực hiện truy vấn SQL để cập nhật đường dẫn hình ảnh vào cơ sở dữ liệu.

            // In thông báo thành công
            echo "Thêm sữa và hình ảnh thành công!";
        }
    } else {
        echo "Lỗi: Hình ảnh không hợp lệ. Vui lòng chọn tệp hình ảnh có phần mở rộng JPEG, JPG hoặc PNG.";
    }

    // Đóng kết nối CSDL
    mysqli_close($conn);
}
?>
