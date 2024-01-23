
<!DOCTYPE html>
<html>
<head>
<title>Oder Confirmation</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Oder Con form" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</head>
<body class="agileits_w3layouts">
	<input type="button" name="button" value="Home" id="home" onclick="location.href='\htdocs\final\index.html'">
    <h1 class="agile_head text-center">Confirm Order</h1>
    <div class="w3layouts_main wrap">
	  <h3>Please help us to serve you better by taking a couple of minutes. </h3>
	    <form action="feedback.php" method="post" class="agile_form">
		  <h2>Please Select one Event</h2>
		  <h2> If Event Not Listed Please Mention In Address Box</h2>
			 <ul class="agile_info_select">
				 <li><input type="radio" name="view" value="Pre-Wedding" id="excellent" required=""> 
				 	  <label for="excellent">Pre-Wedding</label>
				      <div class="check w3"></div>
				 </li>
				 <li><input type="radio" name="view" value="Wedding" id="good"> 
					  <label for="good"> Wedding</label>
				      <div class="check w3ls"></div>
				 </li>
				 <li><input type="radio" name="view" value="Engagement" id="neutral">
					 <label for="neutral">Engagement</label>
				     <div class="check wthree"></div>
				 </li>
				 <li><input type="radio" name="view" value="Indoor/Outdoor" id="poor"> 
					  <label for="poor">Indoor/Outdoor</label>
				      <div class="check w3_agileits"></div>
				 </li>
			 </ul>	  
			<h2>please write Address with pin Code ...</h2>
			
			<input type="text" minlength="3"placeholder="Enter Your Name " name="name" required />
			<input type="email" placeholder="Enter Your Email " name="email" required=""/>
			<input type="text"  minlength="10" placeholder="Enter Your Number " name="num" required/><br>
			<textarea placeholder="Please Mention Your Event Address" class="w3l_summary" name="comments" required=""></textarea>
			<center><input type="submit" value="Placed Order" class="agileinfo" /></center>
	  </form>
	</div>
	<div class="agileits_copyright text-center">
			<p>Copyrights © 2022 by S.R Photography </p>
	</div>

	<style>
		#home{
			
			background-color: goldenrod;
			color: black;
			font-weight: bold;
			outline-color:yellow;
			
		}
	</style>
</body>
</html>

