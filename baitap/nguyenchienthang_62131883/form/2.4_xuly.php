<?php
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$hoten = sanitize_input($_REQUEST["hoten"]);
$gioitinh = sanitize_input($_REQUEST["gioitinh"]);
$diachi = sanitize_input($_REQUEST["diachi"]);
$email = sanitize_input($_REQUEST["email"]);
$sdt = sanitize_input($_REQUEST["sdt"]);
$quoctich = sanitize_input($_REQUEST["quoctich"]);
$ghichu = sanitize_input($_REQUEST["ghichu"]);
$monhoc = isset($_POST['monhoc']) ? $_POST['monhoc'] : array();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả đăng ký</title>
</head>

<body>
    <h4>Bạn đã gửi thành công, ....</h4>
    <p>Họ Tên: <?php echo $hoten; ?></p>
    <p>Giới Tính: <?php echo $gioitinh; ?></p>
    <p>Địa chỉ: <?php echo $diachi; ?></p>
    <p>Email: <?php echo $email; ?></p>
    <p>Số ĐT: <?php echo $sdt; ?></p>
    <p>Quốc tịch: <?php echo $quoctich; ?></p>
    <p>Môn học: <?php echo implode(", ", $monhoc); ?></p>
    <p>Ghi Chú: <?php echo $ghichu; ?></p>

    <p><a href="javascript:window.history.back(-1);" class="btn btn-primary">Quay lại</a></p>
</body>

</html>
