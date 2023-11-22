<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phép Tính</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        td {
            text-align: center;
            border: solid 1px;
            width: 250px;
            height: 30px;
        }

        #so {
            font-size: 20px;
            color: blue;
        }

        #pt {
            font-size: 20px;
            color: red;
        }

        h3 {
            color: red;
            text-align: center;
            font-size: 25px;
            margin-top: 10px;
        }

        p {
            font-size: 20px;
            color: red;
        }

        #cong {
            color: red;
            font-size: 5px;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_POST['stn']))
        $stn = trim($_POST['stn']);
    else
        $stn = 0;
    if (isset($_POST['sth']))
        $sth = trim($_POST['sth']);
    else
        $sth = 0;

    $pt = $_REQUEST["pt"];;

    $kq = 0;

    if (isset($_REQUEST["tinh"])) {
        if ($pt == "Cộng")
            $kq = $stn + $sth;
        elseif ($pt == "Trừ")
            $kq = $stn - $sth;
        elseif ($pt == "Nhân")
            $kq = $stn * $sth;
        elseif ($pt == "Chia")
            $kq = $stn / $sth;
    } else {
        $pt = "Chưa chọn";
        $kq = "";
    }

    ?>
    <div class="container mt-5">
        <table class="table table-bordered" align="center">
            <tr>
                <th colspan="2" align="center">
                    <h3><font color="blue">PHÉP TÍNH TRÊN HAI SỐ</font></h3>
                </th>
            </tr>
            <tr>
                <td width="50px" id="pt">Chọn Phép Tính</td>
                <td id="pt"><?php echo $pt ?><br /></td>
            </tr>
            <tr>
                <td width="30px" id="so">Số Thứ Nhất</td>
                <td>
                    <label for="stn"></label>
                    <input type="text " class="form-control" id="stn" size="40" name="stn" value="<?php echo $stn; ?>">
                </td>
            </tr>
            <tr>
                <td width="30px" id="so">Số Thứ Hai</td>
                <td>
                    <label for="sth"></label>
                    <input type="text " class="form-control" id="sth" size="40" name="sth" value="<?php echo $sth; ?>">
                </td>
            </tr>
            <tr>
                <td>Kết quả:</td>
                <td><input type="text" class="form-control" name="KetQua" disabled="disabled" value="<?php echo $kq; ?>" /></td>
            </tr>
            <tr>
                <td><a href="javascript:window.history.back(-1);" class="btn btn-primary">Quay lại</a></td>
            </tr>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
