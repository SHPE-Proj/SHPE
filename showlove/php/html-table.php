<?php

session_start();

function printTableHeading() {

	echo '<form><table border="1">';
	echo '<tr>';
	echo '
			<th>~x~</th>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Address</th>
			<th>City</th>
			<th>State</th>
			<th>Zip</th>
			<th>Cell Phone</th>
			<th>Receive Updates</th>
			<th>Email</th>
		';
	echo '</tr>';
			
}

function printTable() {

	while ($row = mysql_fetch_row($result)) {
		echo "
		<tr>
			<td> <input type='checkbox' /></td>
			<td>{$row[0]}</td>	
			<td>{$row[1]}</td>	
			<td>{$row[2]}</td>	
			<td>{$row[3]}</td>	
			<td>{$row[4]}</td>	
			<td>{$row[5]}</td>	
			<td>{$row[6]}</td>	
			<td>{$row[7]}</td>	
			<td>{$row[8]}</td>	
			<td>{$row[9]}</td>	
		</tr>
		";
	}

}
