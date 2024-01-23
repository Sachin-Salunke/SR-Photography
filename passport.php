<?php
// Database connection configuration
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'image_database';

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Prepare and execute the SQL statement to insert the image data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $image = $_FILES['image']['tmp_name'];
    $size = $_POST['size'];
    $Quantity =$_POST['Quantity'];
    $address = $_POST['address'];
    $phone =$_POST['phone'];
   

    if ($image) {
        $imgData = addslashes(file_get_contents($image));

        $sql = "INSERT INTO image_database (image, size, Quantity, address, phone) VALUES ('$imgData', '$size', '$Quantity','$address','$phone')";

        if ($conn->query($sql) === TRUE) {
            echo 'Your photo was uploaded successfully in our database. Please wait for some time. Our team will contact you. Thank you!';
        } else {
            echo 'Error: ' . $sql . '<br>' . $conn->error;
        } 
    } else {
        echo 'Please choose an image to upload.';
    }
}

$conn->close();
?>
