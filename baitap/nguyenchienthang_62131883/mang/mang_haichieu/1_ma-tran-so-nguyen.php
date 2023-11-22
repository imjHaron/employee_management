<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="container py-4">
    <h2 class="text-center mb-4">MA TRẬN</h2>
    <title>Tạo và hiển thị ma trận số nguyên</title>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="mb-4">
        <div class="row g-3">
            <div class="col-md-6">
                <label for="rows" class="form-label">Số dòng (2-5): </label>
                <input type="number" id="rows" name="rows" min="2" max="5" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="cols" class="form-label">Số cột (2-5): </label>
                <input type="number" id="cols" name="cols" min="2" max="5" class="form-control" required>
            </div>
        </div>
        <button type="submit" name="generateMatrix" class="btn btn-primary mt-3">Tạo Ma Trận</button>
    </form>

    <textarea id="matrixResult" rows="10" cols="50" readonly class="form-control"><?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['generateMatrix'])) {
            $rows = $_POST['rows'];
            $cols = $_POST['cols'];

            $matrix = array();
            $matrixDisplay = "Ma trận đã tạo:\n";
            for ($i = 0; $i < $rows; $i++) {
                for ($j = 0; $j < $cols; $j++) {
                    $matrix[$i][$j] = rand(-1000, 1000);
                    $matrixDisplay .= $matrix[$i][$j] . " ";
                }
                $matrixDisplay .= "\n";
            }

            echo $matrixDisplay;

            echo "\nCác phần tử thuộc dòng chẵn và cột lẻ:\n";
            for ($i = 0; $i < $rows; $i += 2) {
                for ($j = 1; $j < $cols; $j += 2) {
                    echo $matrix[$i][$j] . " ";
                }
            }
            echo "\n";

            $sumMultiplesOf10 = 0;
            for ($i = 0; $i < $rows; $i++) {
                for ($j = 0; $j < $cols; $j++) {
                    if ($matrix[$i][$j] % 10 === 0) {
                        $sumMultiplesOf10 += $matrix[$i][$j];
                    }
                }
            }
            echo "\nTổng các phần tử là bội số của 10: \n" . $sumMultiplesOf10;
        }
    ?></textarea>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
