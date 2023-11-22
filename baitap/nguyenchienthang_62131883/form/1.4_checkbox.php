<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Checkbox Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body class="container mt-5">

    <form method="post" action="1.4_xuly.php">
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="chk1" value="en" <?php if (isset($_POST['chk1']) && $_POST['chk1'] == 'en') echo 'checked'; ?> />
            <label class="form-check-label" for="chk1">UK</label>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="chk2" value="vn" <?php if (isset($_POST['chk2']) && $_POST['chk2'] == 'vn') echo 'checked'; ?> />
            <label class="form-check-label" for="chk2">VietNam</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="../form/" class="btn btn-primary">Trở về</a>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
