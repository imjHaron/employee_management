<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tính diện tích HCN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body class="container mt-5">

    <?php

    $chieudai = isset($_POST['chieudai']) ? trim($_POST['chieudai']) : 0;
    $chieurong = isset($_POST['chieurong']) ? trim($_POST['chieurong']) : 0;

    if (isset($_POST['tinh'])) {
        if (is_numeric($chieudai) && is_numeric($chieurong)) {
            $dientich = $chieudai * $chieurong;
            $chuvi = ($chieudai + $chieurong) * 2;
        } else {
            echo "<font color='red'>Vui lòng nhập vào số! </font>";
            $dientich = $chuvi = "";
        }
    } else {
        $dientich = $chuvi = 0;
    }

    ?>

    <form align='center' action="" method="post">

        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="dl">Chiều dài</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="chieudai" id="" size="20" value="<?php echo $chieudai; ?>" />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="dl">Chiều rộng</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="chieurong" id="" size="20" value="<?php echo $chieurong; ?>" />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="dl">Diện tích</label>
            <div class="col-sm-9">
                <input class="form-control" disabled type="text" name="dientich" id="" size="20" value="<?php echo $dientich; ?>" />
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="dl">Chu vi</label>
            <div class="col-sm-9">
                <input class="form-control" name="chuvi" disabled type="text" value="<?php echo $chuvi; ?>" />
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
