<!DOCTYPE html>
<html>
<head>
    <title>Tính năm âm lịch</title>
    <style type="text/css">
    table{
        color: #ffff00;
        background-color: gray;
    }
    table th{
        background-color: skyblue;
        font-style: vni-times;
        color: yellow;
    }
    img{
        width: 30%;
        height: 30%;
    }
</style>
</head>
<body>


    <?php
if(isset($_POST['nam']))  
    $nam=trim($_POST['nam']); 
else $nam="";

if(isset($_POST['nam_am_lich']))  
    $nam_am_lich=trim($_POST['nam_am_lich']); 
else $nam_am_lich="";



    if (isset($_POST['submit'])) {
        $nam = $_POST['nam'];
        $mang_can = array("Quý", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm");
        $mang_chi = array("Hợi", "Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất");
        $mang_hinh = array("hoi.jpg", "ty.jpg", "suu.jpg", "dan.jpg", "mao.jpg", "thin.jpg", "ran.jpg", "ngo.jpg", "mui.jpg", "than.jpg", "dau.jpg", "tuat.jpg");

        $nam = $nam - 3;
        $can = $nam % 10;
        $chi = $nam % 12;
        $nam_am_lich = $mang_can[$can] . " " . $mang_chi[$chi];
        $hinh = $mang_hinh[$chi];
        $hinh_anh = "<img src='images/$hinh' alt='Hình ảnh con vật'0>";
        echo "<script>document.getElementById('hinh_anh').src = '$hinh';</script>";
        echo "<script>document.getElementsByName('nam_am_lich')[0].value = '$nam_am_lich';</script>";

    }

    ?>
<form action="" method="post">

<table border="0" cellpadding="0">
    <th colspan="5"><h2>TÍNH NĂM ÂM LỊCH</h2></th>
    <tr>

        <td>
            Năm dương lịch
        </td>
        <td>
            <input type="number" name="nam" required>
        </td>
        <td>
            <button type="submit" name="submit">=></button>
        </td>
        <td>
            Năm âm lịch
        </td>
        <td>
            <input type="text" name="nam_am_lich" disabled="disabled" value="<?php echo $nam_am_lich ?>" readonly>
        </td>

</tr>
    <th colspan="5">
                <?php echo $hinh_anh; ?>
    </th>
</table>

</form>
</body>
</html>