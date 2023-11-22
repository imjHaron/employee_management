<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Radio Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body class="container mt-5">

    <form action="1.5_xuly.php" name="myform" method="post">
        <div class="mb-3 form-check">
            <input type="radio" class="form-check-input" name="radGT" value="Nam" <?php if (isset($_POST['radGT']) && $_POST['radGT'] == 'Nam') echo 'checked'; ?> />
            <label class="form-check-label">Nam</label>
        </div>

        <div class="mb-3 form-check">
            <input type="radio" class="form-check-input" name="radGT" value="Nu" <?php if (isset($_POST['radGT']) && $_POST['radGT'] == 'Nu') echo 'checked'; ?> />
            <label class="form-check-label">Nữ</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="../form/" class="btn btn-primary">Trở về</a>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
