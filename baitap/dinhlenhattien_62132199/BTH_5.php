<html>
<body>
    <form action="BTH_5.php" name="myform" method="post">
        <input type="radio" name="radGT" value="Nam"<?php if(isset($_POST['radGT']) && $_POST['radGT'] == 'Nam') echo 'checked="checked"';?>/> Nam<br>
        <input type="radio" name="radGT" value="Nu" <?php if(isset($_POST['radGT']) && $_POST['radGT'] == 'Nu') echo 'checked="checked"';?>/> Nữ<br>
        <input type="submit" value="Gửi">
    </form>
    <?php
        if (isset($_POST['radGT'])){
            echo "Giới tính: " . $_POST['radGT'];
        }
    ?>
</body>
</html>