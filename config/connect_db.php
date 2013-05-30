<?php
	$db_config['server'] = 'localhost'; 
	$db_config['username'] = 'root'; 
	$db_config['database'] = 'winkelwagen'; 
	 
	 // Connect to Database
	 $connection = mysql_connect($db_config['server'], $db_config['username'])
	 or die ("Could not connect to server ... \n" . mysql_error ());
	 mysql_select_db($db_config['database']) 
	 or die ("Could not connect to database ... \n" . mysql_error ());    

		
?>