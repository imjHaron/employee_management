<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Text Field</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body class="container mt-5">

    <form action="1.1_xuly.php" name="myform" method="post">
        <div class="mb-3">
            <label for="Name" class="form-label">Your Name:</label>
            <input type="text" class="form-control" name="Name" size="20" value="<?php if (isset($_POST['Name'])) echo $_POST['Name']; ?>" />
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="../form/" class="btn btn-primary">Trở về</a>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
