<?php
$khoa = array(
    array("Tin học", array("Lập trình web", "Lập trình di động", "Lập trình game")),
    array("Toán", array("Giải tích", "Đại số", "Thống kê"))
);

$giaovien = array(
    array("Nguyễn Văn A", "Lập trình web", "Khoa Tin học"),
    array("Trần Thị B", "Lập trình di động", "Khoa Tin học"),
    array("Đặng Văn C", "Lập trình game", "Khoa Tin học"),
    array("Hoàng Văn D", "Giải tích", "Khoa Toán"),
    array("Nguyễn Thị E", "Đại số", "Khoa Toán"),
    array("Phạm Văn F", "Thống kê", "Khoa Toán")
);

// Tạo tiêu đề bảng
echo "<table border='1'>";
echo "<tr>";
echo "<th>Khoa</th>";
echo "<th>Bộ môn</th>";
echo "<th>Giáo viên</th>";
echo "</tr>";

// Lặp qua mảng khoa
foreach ($khoa as $khoa_info) {
    $ten_khoa = $khoa_info[0];
    $bo_mon_arr = $khoa_info[1];

    // Lặp qua mảng bộ môn
    foreach ($bo_mon_arr as $bo_mon) {
        // Lặp qua mảng giáo viên
        foreach ($giaovien as $item) {
            if ($item[1] == $bo_mon && $item[2] == $ten_khoa) {
                echo "<tr>";
                echo "<td>{$item[2]}</td>";
                echo "<td>{$bo_mon}</td>";
                echo "<td>{$item[0]}</td>";
                echo "</tr>";
            }
        }
    }
}

// Kết thúc bảng
echo "</table>";
?>
