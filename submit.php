<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feed";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$mail = $_POST["mail"];
$address = $_POST["address"];
$feedback = $_POST["feedback"];

// Insert the data into the database
$sql = "INSERT INTO feed (firstName, lastName, mail, address, feedback)
VALUES ('$firstName', '$lastName', '$mail', '$address', '$feedback')";

if ($conn->query($sql) === TRUE) {
  echo "Feedback submitted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
