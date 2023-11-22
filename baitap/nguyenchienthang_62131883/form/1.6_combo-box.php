<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dropdown Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body class="container mt-5">

    <form method="POST" action="1.6_xuly.php">
        <div class="mb-3">
            <label for="lunch" class="form-label">Select your lunch:</label>
            <select class="form-select" name="lunch" id="lunch">
                <option value="pork" <?php if (isset($_POST['lunch']) && $_POST['lunch'] == 'pork') echo 'selected'; ?>>
                    BBQ Pork Bun
                </option>
                <option value="chicken" <?php if (isset($_POST['lunch']) && $_POST['lunch'] == 'chicken') echo 'selected'; ?>>
                    Chicken Bun
                </option>
                <option value="lotus" <?php if (isset($_POST['lunch']) && $_POST['lunch'] == 'lotus') echo 'selected'; ?>>
                    Lotus Seed Bun
                </option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit your order</button>
        <a href="../form/" class="btn btn-primary">Trở về</a>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
