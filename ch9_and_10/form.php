<?php
//Pull name, number of people, and event date from registration (form.php)//
	$full_name = filter_input(INPUT_POST, 'full_name');

	$numPeople = filter_input(INPUT_POST, 'numPeople');

	$eventDescription = filter_input(INPUT_POST, 'eventDescription');

//Indvidiual count registration input validation//
	if (!is_numeric($numPeople)) {
		$numPeople = 'Please enter a valid registration count between 1 and 10!';
	}

	else if ($numPeople < 0) {
		$numPeople = "You must register at least one person!";
	}

	else if ($numPeople > 10) {
		$numPeople = "Sorry, you may not register more than 10 individuals!  Please correct your input.";
	}


//Name trimming and input validation mechanisms//
	$full_name = ltrim($full_name);
	$full_name = rtrim($full_name);
	$full_name = ucwords($full_name);

	if (empty($full_name)) {
		$full_name = 'Please remember to input a valid name for your registration!';
	}

	if (empty($eventDescription)) {
		$eventDescription = 'Please remember to input a valid description for your event!';
	}

?>

<!DOCTYPE html>

<html>
<head>
	<title>Library Registration Form</title>
	<link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
	<main>
		<h1>Thank you for registering with us!</h1>


			<label>Full Name:</label>
			<span><?php echo htmlspecialchars($full_name); ?></span><br>
			<br>

			<label>Description of Event:</label>
			<span><?php echo htmlspecialchars($eventDescription); ?></span><br>

			<label>Total Number of People:</label>
			<span><?php echo htmlspecialchars($numPeople); ?></span><br>
			<br>

	</main>
</body>
</html>
