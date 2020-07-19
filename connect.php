<?php
	
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$phoneNumber = $_POST['phoneNumber'];
	$email = $_POST['email'];
	$aproxBudget = $_POST['aproxBudget'];
	$flatType = $_POST['flatType'];
	$location = $_POST['location'];
	$possession = $_POST['possession'];
	$homeLoan = $_POST['homeLoan'];
	$appointment = $_POST['appointment'];

	// Database connection
	$conn = new mysqli('localhost','root','','register');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into data(firstName, lastName, phoneNumber, email, aproxBudget,flatType,location,possession,homeLoan,appointment) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssisssssss",$firstName,$lastName,$phoneNumber,$email,$aproxBudget,$flatType,$location,$possession,$homeLoan,$appointment);
		$execval = $stmt->execute();
		echo $execval;
		echo "Thanks for contacting us,our agent will contact you soon...!!";
		$stmt->close();
		$conn->close();
    }
    

?>


