Selected buns:<br/>

<?php

	if (isset($_POST['lunch'])) {

		foreach ($_POST['lunch'] as $choice) {

	    	print "You want a $choice bun. <br/>";

		}

	}

?>
<a href="../form/" class="btn btn-primary">Trở về</a>