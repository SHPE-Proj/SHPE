<!DOCTYPE html>
<html>
	<head>	
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body style="border: .4em solid #ff4500;">
		<img src="http://i.imgur.com/65yJIWh.png" style="margin-bottom:1em; margin-right: -.5em; width:100%;" />
		<form action="/showlove/php/form-handler.php" method="post">
			<label for="first_name">First Name:</label>
				<input type="text" name="first_name" placeholder="Legal First Name" />
			<label for="last_name">Last Name:</label>
				<input type="text" name="last_name" placeholder="Legal Last Name" />
			<label for="address">Home Address (School):</label>
				<input type="text" name="address" placeholder="eg. 123 Park Street Apt. 14" />
			<label for="city">City:</label>
				<input type="text" name="city" placeholder="eg. Orlando" />
			<label for="state">State:</label>
				<input type="text" name="state" placeholder="eg. FL" maxlength="2" />
			<label for="zip">Zip:</label>
				<input type="tel" name="zip" placeholder="eg. 32816" maxlength="5"/>
			<label for="tel">Cell Phone:</label>
				<input type="tel" name="phone" placeholder="e.g. 4071231234 *Don't add spaces!*" maxlength="10"/>
			<input type="checkbox" name="receive_updates" /> <label id="checkbox" for="receive_updates">I would like to receive updates to this number*</label><br>
			<label for="email">Email:</label>
				<input type="email" name="email" placeholder="eg. example@address.com" />
			<input type="submit" value="Submit" />
		</form>
	</body>
</html>
