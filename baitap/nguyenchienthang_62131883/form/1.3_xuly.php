<?php
if (isset($_POST["comment"])) {
    echo "<div class='mt-3 alert alert-success' role='alert'>";
    echo "Your Comment: " . $_POST["comment"];
    echo "</div>";
}
?>

<a href="../form/" class="btn btn-primary">Trở về</a>