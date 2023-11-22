<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Trên Dãy Số</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    if (isset($_POST["tinhtong"])) {
        $tong = 0;
        $ds = $_POST["ds"];

        $arr = explode(",", $ds);

        $n = count($arr);

        for ($i = 0; $i < $n; $i++) {
            $tong = $tong + $arr[$i];   
        }
    } else {
        $ds = "";
        $tong = "";
    }
?>

<div class="container">
    <form action="" method="post" class="custom-form">
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="dl">Nhập Dãy Số</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" id="" size="20" name="ds" value="<?php echo $ds; ?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-9 offset-3">
                <button type="submit" class="btn btn-primary px-5" name="tinhtong">Tổng dãy số</button>
                <a href="../mang_chuoi/" class="btn btn-primary">Trở về</a>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="dl">Tổng Dãy Số</label>
            <div class="col-sm-9">
                <input class="form-control" disabled type="text" id="" size="20" name="tong" value="<?php echo $tong; ?>">
            </div>
        </div>
        <p style="background-color: bisque; text-align: center;">LƯU Ý: CÁC SỐ NGĂN CÁCH NHAU BẰNG DẤU ","</p>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
