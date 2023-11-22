<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Mang tim kiem va thay the</title>

<style type="text/css">

    table{

        color: #ffff00;

        background-color: gray;     

    }

    table th{

        background-color: blue;

        font-style: vni-times;

        color: yellow;

    }

</style>

</head>

<body>

<?php 

    if(isset($_POST['n']))
        $n = ($_POST['n']);
    else $n = "0";

?>

<form action="" method="post">

<table border="0" cellpadding="0">

    <th colspan="2"><h2>TÌM KIẾM</h2></th>

    <tr>

        <td>Nhập mảng:</td>

        <td><input type="text" name="n" size= "70" value="<?php echo $n;?> "/></td>

    </tr>

    <tr>

        <td></td>

        <td><input type="submit" name="tinh"  size="20" value="   Xử lý  "/></td>

    </tr>

    

</table>

</form>

<?php
function hienthi_mang($arr)
{
    for($i = 0; $i < count($arr);$i++)
        echo "$arr[$i] ";
}
function demSoChan($arr) {
    $dem = 0;
    for($i = 0; $i < count($arr); $i++)
        if($arr[$i] % 2 == 0)
            $dem++;
        return $dem;
}
    if(isset($_POST['tinh']))
    {
        if($n==0)
            echo"Không tính được.";
        else {
            $a = array();
            for($i =0; $i < $n; $i++)
                $a[$i] = rand(-100,100);
        echo "Mảng được tọa ra là: ";
            hienthi_mang($a);
            echo "<br> Số phần tử chẵn trong mảng là ". demSoChan($a);
        }

    }
?>

</body>

</html>