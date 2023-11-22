<html>

<body>

<form method="post" action="bai1.4_xuly.php">
	<input type="checkbox" name="chk1" value="UK" 
		<?php if(isset($_POST['chk1'])&& $_POST['chk1']=='en') echo 'checked'; else echo ""?>/>UK <br> 
	<input type="checkbox" name="chk2" value="VietNam"
		<?php if(isset($_POST['chk2'])&& $_POST['chk2']=='vn') echo 'checked'; else echo ""?>/>VietNam<br>
	
	<input type="submit" value="submit"><br>
</form>

</body>

</html>