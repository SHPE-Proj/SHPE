<?php

// sometimes buttons not being sent or gets misspelled
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	
    $host = 'localhost';
    $username = 'root';
	$db = 'showlove';
    $pass = 'thewho16';
	$table = 'showlove';
	
	// Connect to DB
    $con=mysql_connect($host,$username,$pass,$db);

	// Throw error if not connected
	if (mysqli_connect_errno()) {
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	// Select the Database you want
    mysql_select_db($db);

	// Cycle thru POST and get all the keys 
	foreach ($_POST as $key => $val) {
		
		$query = "DELETE FROM $table WHERE id='$key';";
    	
    	// always run your queries this way to be notified in case of error
		$result = mysql_query($query) or trigger_error(mysql_error().". Query: ".$query);
	}

	// Close connection
	mysqli_close($con);	
}

// Bring Back to Main page (index.php)
header("Location: /showlove/de/");
