<!DOCTYPE html>
<html>
<head>
	<title>Feedback Table</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
			font-family: Arial, sans-serif;
			font-size: 14px;
			color: #333;
		}
		table td, table th {
			border: 1px solid #ccc;
			padding: 10px;
			text-align: center;
		}
		table th {
			background-color: #f0f0f0;
			font-weight: bold;
		}
		h3{
			color: green;
		}
	</style>
</head>
<body>
	<center>
	<h3>Customer Feedback</h3>
	</center>
	<table>
		<thead>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Address</th>
				<th>Feedback</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// Connect to database
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "feed";
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}

			// Select data from database
			$sql = "SELECT * FROM feed";
			$result = $conn->query($sql);

			// Loop through data and output in table rows
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<tr>";
					echo "<td>" . $row["firstName"] . "</td>";
					echo "<td>" . $row["lastName"] . "</td>";
					echo "<td>" . $row["mail"] . "</td>";
					echo "<td>" . $row["address"] . "</td>";
					echo "<td>" . $row["feedback"] . "</td>";
					echo "</tr>";
				}
			} else {
				echo "<tr><td colspan='5'>No feedbacks found</td></tr>";
			}

			// Close database connection
			$conn->close();
			?>
		</tbody>
	</table>
</body>
</html>

