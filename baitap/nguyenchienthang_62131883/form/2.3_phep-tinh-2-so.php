<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phép Tính</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>

<body class="container mt-5">
    <?php
        if(isset($_POST['stn']))
            $stn = trim($_POST['sth']);
        else 
        $stn=0;
        if(isset($_POST['sth']))  
            $sth=trim($_POST['sth']); 
        else 
        $sth=0;
    ?>
    <form action="2.3_xuly.php" id="form2" method ="POST">
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="dl">Các phép tính</label>
            <div class="col-sm-9">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="cong" name="pt" value="Cộng">
                    <label class="form-check-label" for="inlineRadio1">Cộng</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="tru" name="pt" value="Trừ">
                    <label class="form-check-label" for="inlineRadio2">Trừ</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="nhan" name="pt" value="Nhân">
                    <label class="form-check-label" for="inlineRadio3">Nhân</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="chia" name="pt" value="Chia">
                    <label class="form-check-label" for="inlineRadio3">Chia</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="dl">Số Thứ Nhất</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="stn" value="<?php echo $stn; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="dl">Số Thứ Hai</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="sth" value="<?php echo $sth; ?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-9 offset-3">
                <button type="submit" class="btn btn-primary" name="tinh">Tính toán</button>
                <a href="../form/" class="btn btn-primary px-5 offset-4">Trở về</a>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
