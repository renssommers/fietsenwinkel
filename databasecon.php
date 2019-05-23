<?php 

	function OpenCon()
	{
		$dbhost = "mgoossens.gcmediavormgeving.nl";
		$dbuser = "mgoossens_chaingang";
		$dbpass = 'vI$gz4~zlXtL';
		$db = "mgoossens_chaingang";

	$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die ("Connect failed:%s\n". $conn-> error);

	return $conn;
 	}
 
	function CloseCon($conn)
	{
 	$conn -> close();
 	}
 ?>
