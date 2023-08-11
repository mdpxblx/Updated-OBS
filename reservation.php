<?php
session_start();
require('connection.php');

?>
<!DOCTYPE html>
<html>


<head>

<body bgcolor="lightgray">
	<meta charset="utf-8">
	<title>OBS Reservation</title>
	<link type="text/css" rel="stylesheet" href="ccs/index.css" />
	<link type="text/css" rel="stylesheet" href="ccs/reservation.css" />

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<style>

	</style>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script>
		$(function() {
			$("#shootdate").datepicker({
				minDate: 0
			});
		});
	</script>

	</head>
	</head>

	<body>

		<?php date_default_timezone_set('Asia/Manila');


		?>
		<?php
		// If form submitted, insert values into the database.
		if (isset($_REQUEST['Reservation_Date'])) {
			$Date_And_Time_Created = date("y-m-d h:i:s");
			$usern = $_SESSION['usern'];
			$f_name = stripslashes($_REQUEST['f_name']);
			$f_name = mysqli_real_escape_string($con, $f_name);
			$l_name = stripslashes($_REQUEST['l_name']);
			$l_name = mysqli_real_escape_string($con, $l_name);
			$Reservation_Date = stripslashes($_REQUEST['Reservation_Date']);
			$Reservation_Date = mysqli_real_escape_string($con, $Reservation_Date);
			$Service = stripslashes($_REQUEST['Service']);
			$Service = mysqli_real_escape_string($con, $Service);

			$query = "INSERT INTO `reservation_log` (usern,f_name,l_name,Reservation_Date, Service,Date_And_Time_Created)
			VALUES ('$usern','$f_name','$l_name','$Reservation_Date','$Service','$Date_And_Time_Created')";
			$result = mysqli_query($con, $query);
			if ($result) {
				/* echo var_dump($f_name, $l_name) . "<br>"; */
				/* echo var_dump($usern)."<br>"; */
				echo "<div class='form'>
				<h3>You Booked an apointment .</h3>
				<br/>Click here to <a href='index.php'>go back.</a></div>";
			} else {
				echo "test: " . $query;
			}
		} else {
		?>
			<form action="#" style="border:0px solid #0000">
				<div class="wrap">
					<nav>
						<div class="logo"><img src="img/logo.png" height="120" width="120"></div>
						<ul>
							<li><a href="index.php">HOME</a></li>
							<li><a href="reservation.php">BOOK AN APPOINTMENT</a></li>
							<li><a href="logout.php">Log Out</a></li>

				</div>


				<fieldset>
					<legend align="center">Appointment Information</legend>
					<div class="item">
						<label for="fname"> First Name<span>*</span></label>
						<input id="fname" type="text" name="f_name" pattern="[^0-9]*" title="Please dont include number or special characters." required />
					</div>
					<div class="item">
						<label for="lname"> Last Name<span>*</span></label>
						<input id="lname" type="text" name="l_name" pattern="[^0-9]*" title="Please dont include number or special characters." required />
					</div>
					<div class="item">
						<label for="date">Date<span>*</span></label>
						<input required type="text" name="Reservation_Date" id="shootdate" title="Choose your desired date" />
						<i class="fas fa-calendar-alt"></i>
					</div>
					<div class="form-group">
						<select class="form-control" name="Service" id="Service" required>
							<option disabled selected>Services</option>
							<option value="Cedula">Cedula</option>
							<option value="Barangay Clearance">Barangay Clearance</option>
							<option value="Barangay I.D.">Barangay I.D.</option>
							<option value="Barangay Permit">Barangay Permit</option>
							<option value="Barangay Certificate">Barangay Certificate</option>
							<option value="Barangay Business Permit">Barangay Business Permit</option>
						</select>
						<div class="btn-block">
							<button class="button1" type="submit">Submit</button>
						</div>
					</div>

				</fieldset>
			</form>
		<?php } ?>
	</body>

</html>