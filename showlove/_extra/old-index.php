<!DOCTYPE html>
<html>
	<head>	
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<form>
			<table id="candidate_info">
				<tr>
					<td>First Name:</td>
					<td>Last Name:</td>
				</tr>
				<tr>
					<td><input type="text" name="first_name" placeholder="Your First Name"></td>
					<td><input type="text" name="last_name" placeholder="Your Last Name"></td>
				</tr>
				<tr>
					<td colspan="2">Home Address (School):</td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" name="address" placeholder="eg. 123 Park Street Apt.20" style="width: 21em;"></td>
				</tr>
				<tr>
					<td>City:</td>
					<td>State:</td>
					<td>Zip:</td>
				</tr>
				<tr>
					<td><input type="text" name="city" placeholder="eg. Orlando"></td>
					<td><input type="text" name="state" placeholder="eg. FL"maxlength="2"></td>
					<td><input type="text" name="zip" placeholder="eg. 32816"></td>
				</tr>
				<tr>
					<td>Cell Phone:</td>
				</tr>
				<tr>
					<td><input type="text" name="cell_phone" placeholder="(555) 555-5555"></td>
				</tr>
				<tr>
					<td colspan="3"><input type="checkbox" name="phone_updates" value ="receive_updates"> I would like to receive updates to this number*</td>
				</tr>
				<tr>
					<td>Email:</td>
				</tr>
				<tr>
					<td colspan="2"><input type="text" name="email" placeholder="example@address.com" style="width: 21em"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
	</body>
</html>
