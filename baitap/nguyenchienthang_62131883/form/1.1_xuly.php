<?php
if (isset($_POST["Name"])) {
    echo "<div class='mt-3 alert alert-success' role='alert'>";
    echo "Hello " . $_POST["Name"];
    echo "</div>";
}
?>
<a href="../form/" class="btn btn-primary">Trở về</a>