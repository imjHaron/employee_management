<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm Kiếm Trong Mảng</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
    function timKiem($arr, $gt) {
        $n = count($arr);
        $kq = -1;

        for ($i = 0; $i < $n; $i++) {
            if ($arr[$i] == $gt) {
                $kq = $i;
                break;
            }
        }
        return $kq;
    }

    if (isset($_POST["arr"]) && isset($_POST["so"])) {
        $arr_nhap = trim($_POST["arr"]);
        $gt = $_POST["so"];

        $arr = explode(",", $arr_nhap);

        $kq = timKiem($arr, $gt);

        $arr_kq = implode(",", $arr);

        if ($kq != -1) {
            $kq = $kq;
            $chuoi = "Tìm Thấy $gt tại vị trí $kq của mảng ";
        } else
            $chuoi = "Không tìm thấy $gt trong mảng";
    } else {
        $gt = 0;
        $kq = "";
        $arr_kq = "";
        $chuoi = "";
        $arr_nhap = "";
    }
?>

<div class="container">
    <form action="" method="post" class="custom-form">
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="dl">Nhập Mảng</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" id="" size="20" name="arr" value="<?php echo $arr_nhap; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="dl">Số Cần Tìm</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" size="20" name="so" value="<?php echo $gt; ?>">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-9 offset-3">
                <button type="submit" class="btn btn-primary px-5" name="submit">Tìm Kiếm</button>
                <a href="../mang_chuoi/" class="btn btn-primary">Trở về</a>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="dl">Mảng</label>
            <div class="col-sm-9">
                <input class="form-control" disabled type="text" size="20" name="arr_kq" value="<?php echo $arr_kq; ?>">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="dl">Kết Quả Tìm Kiếm</label>
            <div class="col-sm-9">
                <input class="form-control" disabled type="text" name="chuoi" value="<?php echo $chuoi; ?>">
            </div>
        </div>

        <p style="background-color: bisque; text-align: center;">LƯU Ý: CÁC SỐ NGĂN CÁCH NHAU BỞI DẤU ","</p>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
