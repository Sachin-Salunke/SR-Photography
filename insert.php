<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['fname']) && isset($_POST['lname']) &&
        isset($_POST['email']) && isset($_POST['eaddress']) &&
        isset($_POST['phone']) && isset($_POST['events']) && isset($_POST['duration'])) {
        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $eaddress = $_POST['eaddress'];
        $phone = $_POST['phone'];
        $event = $_POST['events'];
        $duration= $_POST['duration'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "orders";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM orders WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO orders(fname,lname,email,eaddress,phone,events,duration) values(?, ?, ?, ?, ?, ?,?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssiss",$fname, $lname, $email, $eaddress, $phone, $events,$duration);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>