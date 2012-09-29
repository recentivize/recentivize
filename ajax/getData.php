<?php
	$username = "timmch_root";
	$password = "recentivize";
	$hostname = "108.167.179.192"; 

	$dbhandle = mysql_connect($hostname, $username, $password) 
	  or die("Unable to connect to MySQL");
	echo "Connected to MySQL<br>";

	$selected = mysql_select_db("timmch_recentivize",$dbhandle);
	$data = mysql_query("SELECT * FROM users");
	$output['data'] = $data;
	$output['err'] = FALSE;
	$output['msg'] = "Got data: $data";
	echo json_encode($output);
?>
