<html>
	<body>
		<h1>Tìm sách</h1>
		<form action="xlTimSach.php" method="GET">
			Từ khóa: <input type="text" name="txtTukhoa" />
			<input type="submit" name="Tìm" />
		</form>
		<?php$sTukhoa = $_POST["txtTukhoa"];?>
		<h1>Tìm Sách</h1>
		Từ khóa tìm sách là : <?php echo $sTukhoa;?>
	</body>
</html>