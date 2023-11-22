<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phát Sinh Và Tính Toán Mảng</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    if (isset($_POST["submit"])) {
        $N = isset($_POST["N"]) ? $_POST["N"] : 0;
        $arr = [];
        
        for ($i = 0; $i < $N; $i++) {
            $arr[$i] = rand(0, 20);
        }
    } else {
        $N = 0;
        $arr = [];
    }

    function xuatMang($N, $arr) {
        for ($i = 0; $i < $N; $i++) {
            echo $arr[$i] . "\t";
        } 
    }

    function GTLN($arr) {
        if (isset($arr[0])) {
            $max = $arr[0];
            $N = count($arr);
            
            for ($i = 1; $i < $N; $i++) {
                if ($arr[$i] > $max) {
                    $max = $arr[$i];
                }
            }
            echo $max;
        }
    }

    function GTNN($arr) {
        if (isset($arr[0])) {
            $min = $arr[0];
            $N = count($arr);
            
            for ($i = 1; $i < $N; $i++) {
                if ($arr[$i] < $min) {
                    $min = $arr[$i];
                }
            }
            echo $min;
        }
    }

    function tongphantu($N, $arr) {
        $tong = 0;
        
        for ($i = 0; $i < $N; $i++) {
            if ($arr[$i]) {
                $tong = $tong + $arr[$i];
            }
        } 
        echo $tong;
        return -1;
    }
?>

<div class="container">
    <form action="" method="post" class="custom-form">
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="dl">Nhập Số Phần Tử</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" id="" size="20" name="N" value="<?php echo $N; ?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-9 offset-3">
                <button type="submit" class="btn btn-primary px-5" name="submit">Phát sinh và tính toán</button>
                <a href="../mang_chuoi/" class="btn btn-primary">Trở về</a>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="dl">Mảng</label>
            <div class="col-sm-9">
                <input class="form-control" disabled type="text" id="" size="20" name="" value="<?php xuatMang($N, $arr); ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="dl">GTLN(Max) Trong Mảng</label>
            <div class="col-sm-9">
                <input class="form-control" disabled type="text" id="" size="20" name="" value="<?php GTLN($arr) ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="dl">GTNN(Min) Trong Mảng</label>
            <div class="col-sm-9">
                <input class="form-control" disabled type="text" id="" size="20" name="" value="<?php GTNN($arr) ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="dl">Tổng Mảng</label>
            <div class="col-sm-9">
                <input class="form-control" disabled type="text" id="" size="20" name="" value="<?php tongphantu($N, $arr); ?>">
            </div>
        </div>
        <p style="background-color: bisque; text-align: center;">GHI CHÚ: CÁC PHẦN TỬ TRONG MẢNG SẼ CÓ GIÁ TRỊ TỪ 0 ĐẾN 20</p>
    </form>
</div>

<!-- Bootstrap JS and Popper.js (required for some Bootstrap features) -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
