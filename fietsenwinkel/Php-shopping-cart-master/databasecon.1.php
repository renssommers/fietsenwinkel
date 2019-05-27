<?php 

	function OpenCon()
	{
		$dbhost = "mgoossens.gcmediavormgeving.nl";
		$dbuser = "mgoossens_chaingang";
		$dbpass = 'vI$gz4~zlXtL';
		$db = "mgoossens_chaingang";

	$con = new mysqli($dbhost, $dbuser, $dbpass, $db) or die ("Connect failed:%s\n". $con-> error);

	return $conn;
 	}
 
	function CloseCon($con)
	{
 	$con -> close();
 	}
 ?>
