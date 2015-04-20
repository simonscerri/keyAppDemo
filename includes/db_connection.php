<?php //create a connection to the database
/*
	require("constants.php");
    $connection1 = new mysqli(DB_SERVER1, DB_USER1, DB_PASSWORD1, DB_NAME1);
    if ($connection1->connect_errno) {
        die("Database connection failed:" . mysql_error());
    }
*/
	$link = mysql_connect('mysql01.internal.m2mconnected.com', 'keyApp_read', 'Tmwyso&ge9v4bie'); 
	if (!$link) { 
		die('Could not connect: ' . mysql_error()); 
	} 
	
	mysql_select_db(keys); 
*/
?> 
    