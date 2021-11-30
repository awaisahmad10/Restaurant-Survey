<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">
	<title>Restaurant Survey</title>
</head>
<body>
	<img src="confetti.jpg" height="400px" width="100%" alt="confetti">
	<h1>Thank you so much for dining with us today!</h1>
	<h3>Please fill out the survery below to help us improve your experience</h3>
	<h3>As a reward you'll recieve FREE delivery on your next order!</h3>
	<h2 id="division">Customer Survey</h2>
	
	<form method="POST" action="/process_form.php">
		<p>
			<label>How was the food out of 5?</label>
			<select name="food">
				<option>---Select---</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
		</p>

		<p>
			<label>How was the menu variety out of 5?</label>
			<select name="menu">
				<option>---Select---</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
		</p>

		<p>
			<label>How was the service out of 5?</label>
			<select name="service">
				<option>---Select---</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
		</p>

		<p>
			<label>How was the atmosphere out of 5?</label>
			<select name="atmosphere">
				<option>---Select---</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
		</p>
	<!--</form>-->

	<h2 id="division">Your Information</h2>

	<!--<form method="POST">-->
	<p class="information">
		<label id="fname">First Name: </label>
		<input type="text" name="fName" placeholder="John" />

		<label id="lname">Last Name: </label>
		<input type="text" name="lName" placeholder="Doe" />

		<label id="date">Date: </label>
		<input type="date" name="Date" placeholder="yyyy-mm-dd" />
	</p>
	<p class="information">
		<label id="phone">Phone: </label>
		<input type="tel" name="Phone" placeholder="123 456 7890" />

		<label id="email">Email: </label>
		<input type="email" name="Email" placeholder="example@domain.com" />
	</p>
	<p>
		<label id="remarks">Remarks: </label>
		<textarea rows="5" cols="30" name="Remarks" placeholder="Type here..."></textarea>
	</p>
	<input type="submit" id="submit" />
</form>
</body>
</html>