<!DOCTYPE html>
<html>
<head>
    <title>Tính Năm Nhuận</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            text-align: center;
            margin-top: 30px;
        }

        input[type="number"] {
            padding: 10px;
            width: 200px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            padding: 10px 20px;
            background-color: limegreen;
            color: #fff;
            border: none;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        .result-container {
            margin-top: 30px;
            text-align: center;
        }

        .result-container p {
            font-size: 18px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Tính Năm Nhuận</h1>
    <form method="post" action="">
        Nhập năm: <input type="number" name="nam" required><br><br>
        <button type="submit" name="submit">Xử Lý</button><br>
    </form>

    <div class="result-container">
        <?php
            function nam_nhuan($nam){
                if(($nam % 400 == 0 || $nam % 4 == 0) && $nam % 100 != 0)
                {
                    return true;
                }
                return false;
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nam = $_POST["nam"];

                foreach (range(2000, $nam) as $year) {
                    if (nam_nhuan($year)) {
                        echo "<p>$year là năm nhuận</p>";
                    } else {
                        echo "<p>$year không phải là năm nhuận</p>";
                    }
                }
            }
        ?>
    </div>
</body>
</html>