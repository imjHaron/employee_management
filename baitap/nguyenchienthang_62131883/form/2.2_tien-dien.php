<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>

    <?php
    if (isset($_POST["ten"]) && isset($_POST["so_cu"]) && isset($_POST["so_moi"])) {

        $ten = trim($_POST["ten"]);
        $so_cu = $_POST["so_cu"];
        $so_moi = $_POST["so_moi"];
    } else {
        $ten = "";
        $so_cu = 0;
        $so_moi = 0;
    }

    define("don_gia", 2000);

    if (isset($_POST['tinh']))

        if (is_numeric($so_cu) && is_numeric($so_moi))

            $thanh_tien = ($so_moi - $so_cu) * don_gia;

        else {
            echo "<div class='alert alert-danger' role='alert'>Vui lòng nhập vào số!</div>";
            $thanh_tien = "";
        }
    else $thanh_tien = 0;
    ?>

    <form action="" id="form1" name="form1" method="post" class="container mt-5">
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="dl">Tên chủ hộ</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" id="" size="20" name="ten" value="<?php echo $ten; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="dl">Chỉ số cử</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" id="" size="20" name="so_cu" value="<?php echo $so_cu; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="dl">Chỉ số mới</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" id="" size="20" name="so_moi" value="<?php echo $so_moi; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="dl">Đơn giá</label>
            <div class="col-sm-9">
                <input class="form-control" disabled type="text" name="don_gia" value="2000">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="dl">Thành tiền</label>
            <div class="col-sm-9">
                <input class="form-control" disabled type="text" name="thanh_tien" value="<?php echo $thanh_tien; ?>" />
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-9 offset-3">
                <button type="submit" class="btn btn-primary px-5" name="tinh">Tính Toán</button>
                <a href="../form/" class="btn btn-primary px-5 offset-4">Trở về</a>
            </div>
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
