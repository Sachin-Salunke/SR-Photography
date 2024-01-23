

<?php

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
    $eaddress = $_POST['eaddress'];
	$phone = $_POST['phone'];
	$events = $_POST['events'];
    $duration = $_['duration'];
	
// Database connection
    
	$conn = new mysqli('localhost','root','','Data');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ".$conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into order(fname, lname, email, eaddress, phone, events, duration) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssiss", $fname, $lname, $email, $eaddress, $phone, $events, $duration);
		$execval = $stmt->execute();
		echo $execval;
		echo "Order Book successfully...";
		$stmt->close();
		$conn->close();
	}
?>