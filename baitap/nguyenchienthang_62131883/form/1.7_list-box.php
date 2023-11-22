<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Multiple Select Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body class="container mt-5">

    <form method="POST" action="1.7_xuly.php">
        <div class="mb-3">
            <label for="lunch" class="form-label">Select your lunch:</label>
            <select class="form-select" name="lunch[]" id="lunch" multiple>
                <option value="pork" selected>
                    BBQ Pork Bun
                </option>
                <option value="chicken">
                    Chicken Bun
                </option>
                <option value="lotus">
                    Lotus Seed Bun
                </option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit your order</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
