<?php
if (isset($_POST['Name'])) {
    echo "<div class='mt-3 alert alert-success' role='alert'>";
    echo "Chào bạn " . $_POST['Name'][0] . " " . $_POST['Name'][1];
    echo "</div>";
}
?>
<a href="../form/" class="btn btn-primary">Trở về</a>