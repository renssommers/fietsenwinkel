<?php

	session_start();
	echo "Welcome " . $_SESSION['klant_email'];

	echo "<a href='logout.php'>Logout</a>";


?>