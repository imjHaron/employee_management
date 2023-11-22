<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ma trận m x n</title>  <!-- Updated title to include m x n -->
    <style type="text/css">
        body {
            background-color: #0D59FF;
        }
        table{
            background: #BDD2FFFF;
            border: 0 solid black;
        }
        thead{
            background: #fff14d;
        }
        td {
            color: blue;
        }
        h3{
            font-family: verdana;
            text-align: center;
            color: #ff8100;
            font-size: medium;
        }
    </style>
</head>
<body>
<?php
if (isset($_GET['matrix'])) {
    $matrix_json = urldecode($_GET['matrix']);
    $matrix = json_decode($matrix_json, true);

    // Extract dimensions m and n
    $m = count($matrix);
    $n = count($matrix[0]);

    for ($i = 0; $i < count($matrix); $i++) {
        for ($j = 0; $j < count($matrix[$i]); $j++) {
            if ($matrix[$i][$j] < 0) {
                $matrix[$i][$j] = 0;
            }
        }
    }

    echo "<h3>Ma trận $m x $n:</h3>";

    echo "<table align='center'>";
    foreach ($matrix as $row) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Không có ma trận để hiển thị.";
}
?>

</body>
</html>
