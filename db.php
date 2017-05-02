<?php
	$dbh = new PDO("mysql:host=HOST;dbname=DB", "USER", "PASS");
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>