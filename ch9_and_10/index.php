<!DOCTYPE html>
<? php
// Start session management with a persistent cookie
$lifetime = 60 * 60 * 24 * 14;    // 2 weeks in seconds
session_set_cookie_params($lifetime, '/');
session_start();
?>
<html>
<head>
	<title>Library Registration Form</title>
	<link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
	<main>
		<h1>Library Registration Form</h1>
		<form action="form.php" method="post">

		<fieldset>
			<label>Full Name:</label>
			<input type="text" name="full_name" value="" class="textbox">
			<br>

			<label>Number of People:</label>
			<input type="text" name="numPeople" value="" class="textbox">
			<br>

			<label>Event Description:</label>
			<input type="text" name="eventDescription" value="" class="textbox">
			<br>

			<label>&nbsp;</label>
			<input type="submit" value="Submit">
			<br>

		</fieldset>
	</main>
</body>
</html>
