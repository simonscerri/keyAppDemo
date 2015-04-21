<?php
	date_default_timezone_set('Europe/London');
	require("../includes/db_connection2.php");
	$debug = 1;
	$device = "";
	if (isset ($_POST["device"]))
	{
		$device = htmlentities ($_POST["device"]);
	}

	$data = "";
	if (isset ($_POST["data"]))
	{
		$data = htmlentities ($_POST["data"]);
	}
	
	$devCheck = "";
	if (isset ($_POST["devCheck"]))
	{
		$devCheck = htmlentities ($_POST["devCheck"]);
	}
	$rssi = "";
	if (isset ($_POST["rssi"]))
	{
		$rssi = htmlentities ($_POST["rssi"]);
	}

	
	if ($debug == 1)
	{
		if (isset ($_GET["device"]))
		{
			$device = htmlentities ($_GET["device"]);
		}

		if (isset ($_GET["data"]))
		{
			$data = htmlentities ($_GET["data"]);
		}

		if (isset ($_GET["devCheck"]))
		{
			$devCheck = htmlentities ($_GET["devCheck"]);
		}
		if (isset ($_GET["rssi"]))
		{
			$rssi = htmlentities ($_GET["rssi"]);
		}
	}


	if ($devCheck == "arQTeSt"){
	
			echo "condition 1 met";
		
			$date_time = date("YmdHis");
		
			$temp1 = substr($data, -4);
			$temp2 = substr($data, -8, 4);
		
			$battery = hexdec($temp1);
			$temperature = hexdec($temp2);
		
			echo "battery value is " . $battery;
			echo "<br/>";
			echo "temperature value is " . $temperature;
			echo "<br/>";
			echo "timestamp is " . $date_time;
			
		
			$sql = "insert into keyappsensor (date_time, temperature, battery, rssi, device_id) VALUES ('$date_time', '$temperature', '$battery', '$rssi', '$device')";
			$result = mysql_query($sql);
			if (!$result){
				echo mysql_error();
			}
		
	}
	
	
	
?>