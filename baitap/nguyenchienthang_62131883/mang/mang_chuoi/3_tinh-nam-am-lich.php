<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính năm âm lịch</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
        if (isset($_POST['dl'])) {
            $dl = $_POST['dl'];
        } else {
            $dl = "";
        }

        $mang_can = array("Quý", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỉ", "Canh", "Tân", "Nhâm");
        $mang_chi = array("Hợi", "Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất");
        $mang_hinh = array("hoi.jpg", "chuot.jpg", "suu.jpg", "dan.jpg", "meo.jpg", "thin.jpg", "ty.jpg", "ngo.jpg", "mui.jpg", "than.jpg", "dau.jpg", "tuat.jpg");
        $can = 0;
        $hinh_anh = "";
        $chi = 0;
        $hinh = 0;

        if (isset($_POST['ok'])) {
            if (is_numeric($dl)) {
                $dl = $dl - 3;
                $can = $dl % 10;
                $chi = $dl % 12;
                $al = $mang_can[$can] . " " . $mang_chi[$chi];
                $dl = $dl + 3;
                $hinh = $mang_hinh[$chi];
                $hinh_anh = "<img src='12con_giap/$hinh' class='img-fluid'>";
            } else {
                echo "<font color='red'>Vui lòng nhập vào số! </font>";
                $al = "";
            }
        } else {
            $al = "";
        }
    ?>

    <div class="container mt-5">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="dl">Năm dương lịch</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" id="" size="20" name="dl" value="<?php echo $dl; ?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-9 offset-3">
                    <button type="submit" class="btn btn-primary px-5" name="ok">Tính năm âm lịch</button>
                    <a href="../mang_chuoi/" class="btn btn-primary">Trở về</a>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label" for="dl">Năm âm lịch</label>
                <div class="col-sm-9">
                    <input class="form-control" disabled type="text" id="" size="20" name="al" value="<?php echo $al; ?>">
                </div>
            </div>
            <div class="result-image">
                <?php echo $hinh_anh; ?>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
