<?php 
ob_start(); 
require 'config.php';

$view = $_POST['view'];
$name = $_POST['name'];
$comments = $_POST['comments'];
$email = $_POST['email'];
$num = $_POST['num'];


$query = mysqli_query($con, "INSERT INTO `poll`(`id`, `name`, `email`, `phone`, `Events`, `Address`) VALUES ('','$name','$email','$num','$view','$comments')");
echo '<script>alert("𝐍𝐞𝐰 𝐁𝐨𝐨𝐤𝐢𝐧𝐠 𝐑𝐞𝐜𝐞𝐢𝐯𝐞𝐝! 𝐓𝐡𝐚𝐧𝐤 𝐲𝐨𝐮 𝐟𝐨𝐫 𝐜𝐨𝐧𝐭𝐚𝐜𝐭𝐢𝐧𝐠 𝐮𝐬, 𝐰𝐞 𝐰𝐢𝐥𝐥 𝐜𝐨𝐧𝐭𝐚𝐜𝐭 𝐲𝐨𝐮 𝐬𝐨𝐨𝐧.. [ѕ.я ρнσтσgяαρну]"); location.replace(document.referrer);</script>';



/*$query1 = "SELECT * FROM `staff` WHERE email = '$email' AND password = '$password'";
$result_query1 = mysqli_query($conn, $query1);
$count_query1 = mysqli_num_rows($result_query1);
/*if ($count_query1 != 0) 
	{
    header("Location: controller/staff.php");
	exit();
	} 
else {
		    $query2 = "SELECT * FROM `admin` WHERE email = '$email' AND password = '$password'";
			$result_query2 = mysqli_query($conn, $query2);
			$count_query2 = mysqli_num_rows($result_query2);
			$count_query2 = mysqli_num_rows($result_query2);
			if ($count_query2!=0) 
			{
		   		header("Location: controller/admin.php");
				exit();
		   	} 		
		   	else
		   	 {
		   	 	echo '<script>alert("Incorrect Credentials Entered"); location.replace(document.referrer);</script>';

			 }

	}

//echo $email;
//echo '</br>';
//echo $password;



ob_end_flush();*/
?>