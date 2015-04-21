<?php //create a connection to the database

	define("DB_SERVER", "mysql01.internal.m2mconnected.com");
    define("DB_USER","keyApp_write");
    define("DB_PASSWORD", "2@rctPbZ7PTPbyQ");
    define("DB_NAME", "keys");

	$link = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD); 
	if (!$link) { 
		die('Could not connect: ' . mysql_error()); 
	} else {
		mysql_select_db(DB_NAME); 
	}
	
	/*
	$connection1 = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if ($connection1->connect_errno) {
        die("Database connection failed:" . mysql_error());
    }

	*/

?> 
    