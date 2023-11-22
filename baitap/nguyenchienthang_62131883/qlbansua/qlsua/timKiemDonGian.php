<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/u_style.css">
</head>
<style>
    img {
        width: 100px;
        height: 100px;
    }

    table,
    th,
    td {
        border: 1px solid #868585;
        text-align: center;
    }

    table {
        border-collapse: collapse;
        margin-left: 500px;
    }

    table tr:nth-child(odd) {
        background-color: #FFFACD;
    }

    th {
        background-color: #4682B4;
    }
</style>

<body>
    <?php
    //lấy giá trị từ ô nhập text box
    if (isset($_POST['s_ten_sua']))
        $tenSua = $_POST['s_ten_sua'];
    else
        $tenSua = NULL;
    ?>
    <div>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Tên sữa:</td>
                    <td><input type="text" name="s_ten_sua" value="<?php echo $tenSua?>" /></td>
                    <td><input type="submit" value="Tìm kiếm" /></td>
                </tr>
            </table>
        </form>
    </div>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "qlbansua");
    mysqli_set_charset($conn, 'UTF8');

    $result = mysqli_query($conn, "SELECT Hinh, Loi_ich, TP_Dinh_Duong, Ten_sua, Trong_luong, Don_gia, Ten_hang_sua
                            FROM sua s, loai_sua ls, hang_sua hs
                            WHERE s.ma_loai_sua = ls.ma_loai_sua
                                AND s.ma_hang_sua = hs.ma_hang_sua 
                                AND s.Ten_sua LIKE N'%$tenSua%'");

    echo "<table align='center' width='500px'cellpadding='2' cellspacing='2' style='bordercollapse:collapse'>";
    echo '<tr></tr>';
    $stt = 0;
    $ketQua = NULL;
    if (mysqli_num_rows($result) <> 0) {
        while ($rows = mysqli_fetch_array($result)) {
            echo '<tr>';
            echo "<th colspan ='2' align='center'>$rows[Ten_sua] - $rows[Ten_hang_sua]</th>";
            echo '</tr>';
            echo "<tr>";
            echo "<td align='center'><img src='Hinh_sua/$rows[Hinh]'></td>";

            echo "<td style ='text-align: justify;'>";

            echo "<p><b>Thành Phần Dinh Dưởng:<br></b> $rows[TP_Dinh_Duong]<br></p>";
            echo "<p><b>Lợi ích:<br></b> $rows[Loi_ich]<br></p>";

            echo "<b>Trọng Lượng:</b>$rows[Trong_luong] gr - ";
            echo "<b>Đơn Giá:</b>$rows[Don_gia] VNĐ";
            echo "</td>";
            echo "</tr>";
            $stt += 1;
        }
    }
    if ($stt != 0)
        $ketQua = "Có $stt sản phẩm được tìm thấy";
    else
        $ketQua = "Không tìm thấy sản phẩm này";
    echo "<p style='color:red; text-align:center;'>$ketQua</p>";
    echo "</table>";
    echo "<div class='back-button'><a href='u_index.php'>Back</a></div>";
  

    ?>

</body>

</html>