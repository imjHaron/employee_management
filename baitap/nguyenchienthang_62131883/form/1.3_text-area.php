<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Input/Output Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body class="container mt-5">

    <form action="1.3_xuly.php" name="myform" method="post">
        <div class="mb-3">
            <label for="comment" class="form-label">Your Comment:</label>
            <textarea class="form-control" name="comment" rows="3" cols="40"><?php if (isset($_POST['comment'])) echo $_POST['comment']; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="../form/" class="btn btn-primary">Trở về</a>
    </form>

    <!-- Sử dụng Bootstrap 5 JS và Popper.js từ CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
