<?php


// sometimes buttons not being sent or gets misspelled
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
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

    // all strings should be escaped
    // and it should be done after connecting to DB
    $first_name 		 = mysql_real_escape_string($_POST['first_name']);
    $last_name  		 = mysql_real_escape_string($_POST['last_name']);
    $address   			 = mysql_real_escape_string($_POST['address']);
    $city      			 = mysql_real_escape_string($_POST['city']);
    $state	   	 		 = mysql_real_escape_string($_POST['state']);
    $zip	   			 = mysql_real_escape_string($_POST['zip']);
    $phone	   			 = mysql_real_escape_string($_POST['phone']);
    $receive_updates	 = isset($_POST['receive_updates']);
    $email     		 	 = mysql_real_escape_string($_POST['email']);
	
    $query = "INSERT INTO $table (id, first_name, last_name, address, city, state, zip, phone, receive_updates, email)
              VALUES (NULL, '$first_name','$last_name', '$address', '$city', '$state', '$zip', '$phone', '$receive_updates', '$email')";

    // always run your queries this way to be notified in case of error
    $result = mysql_query($query) or trigger_error(mysql_error().". Query: ".$query);

	// Close connection
	mysqli_close($con);	

	// Sends you a different page
	// Form submitted successfully   	
	/*
	if ($result != false) {
		header("Location: thankyou.php");
	}
	else {
		header("Location: failed-to-insert.php");
	}
	*/

	// Redirect
	header("Location: /showlove");
}
