<?php

	// Connections and DB variables	
    $host = 'localhost';
    $username = 'root';
	$db = 'showlove';
    $pass = 'thewho16';
	$table = 'showlove';

	// Open connection
    $con=mysql_connect($host,$username,$pass,$db);

	// Check connection
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	// Select the Database you want
   	mysql_select_db($db);
	
	// Retrieve information from DB 
	$result = mysql_query("SELECT * FROM $table");
	
	// Build Table headings
	echo "
	<form action='/showlove/php/delete-handler.php' method='post'>
	<br>
	<hr>
	<table style='border-collapse: collapse' border='1'>
		<tr>
			<th>~x~</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Address</th>
			<th>City</th>
			<th>State</th>
			<th>Zip</th>
			<th>Cell Phone</th>
			<th>Receive Updates</th>
			<th>Email</th>
		</tr>
		";

	$cnt = 1;

	// Dynamically populate the table
	while ($row = mysql_fetch_row($result)) {

		if ($cnt%2 == 0) {
			echo "
			<tr bgcolor='#B6B6B6' align='center'>
				<td><input type='checkbox' name='$row[0]'/></td>
				<td>{$row[1]}</td>	
				<td>{$row[2]}</td>	
				<td>{$row[3]}</td>	
				<td>{$row[4]}</td>	
				<td>{$row[5]}</td>	
				<td>{$row[6]}</td>	
				<td>({$row[7][0]}{$row[7][1]}{$row[7][2]}) {$row[7][3]}{$row[7][4]}{$row[7][5]} {$row[7][6]}{$row[7][7]}{$row[7][8]}{$row[7][9]}</td>	
			";
				if ($row[8] == 1) {
					echo "<td>Yes</td>";
				}
				else {
					echo "<td>No</td>";
				}

			echo "
				<td>{$row[9]}</td>	
			</tr>
			";
		}
		else {
			echo "
			<tr align='center'>
				<td><input type='checkbox' name='$row[0]'/></td>
				<td>{$row[1]}</td>	
				<td>{$row[2]}</td>	
				<td>{$row[3]}</td>	
				<td>{$row[4]}</td>	
				<td>{$row[5]}</td>	
				<td>{$row[6]}</td>	
				<td>({$row[7][0]}{$row[7][1]}{$row[7][2]}) {$row[7][3]}{$row[7][4]}{$row[7][5]} {$row[7][6]}{$row[7][7]}{$row[7][8]}{$row[7][9]}</td>	
			";
				if ($row[8] == 1) {
					echo "<td>Yes</td>";
				}
				else {
					echo "<td>No</td>";
				}

			echo "
				<td>{$row[9]}</td>	
			</tr>
			";
		}

		// Increment $cnt so that every other row is colored
		$cnt++;
	}


	echo "
		<div style='position: absolute; right:10px; top:8px;'/>
			<input type='submit' value='Delete' />
		</div>
		";

	echo "</table>";
	echo "</form>";
	echo "</body></html>";


	// Close connection	
	mysqli_close($con);
