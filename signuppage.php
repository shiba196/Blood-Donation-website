<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>BLOOD DONATION</title>
</head>
<link rel="stylesheet" type="text/css" href="signuppagecss.css">
<body>
	<div class="hero-image">
		<center><img src="C:/Users/subha/Desktop/website/iamges/cenurion blood donation logo.png"
	alt="logo"
	style="width:250px;height:200px;"></center>
	<div class ="header">
	<h1><p style="color: white;">DARE TO DONATE</p></h1>
</div>
<!--<ul>
<li><a class="active" href="#home">Home</a></li>
<li><a href="#news">News</a></li>
<li><a href="#contact">Contact</a></li>
</ul>-->
	<!--<div class ="topnav">
		<a href="#">Link</a>
		<a href="#">Link</a>
		<a href="#">Link</a>
	</div>-->
	<div class="actual-body">
	<center><button class="button" style="vertical-align:middle"><a href="index.php"><span><strong><em><font style="color: antiquewhite;">LOG  IN</font></em></strong></span></button></center><br><br>
	<center><button class="button" style="vertical-align:middle"><a href="register.php"><span><strong><em><font style="color: antiquewhite;">SIGN  UP </font></em></strong></span></button></center><br><br>
	</div></div>

    <!--<div class="row">
		<div class="column">
			<h2>Column</h2>
			<p></p>
		</div>

		<div class="column">
		 <h2>Column</h2>
		 <p></p>
		</div>

		<div class="column">
		 <h2>Column</h2>
		 <p></p>
		</div>
	</div>-->

	<div class="footer">
		<p style="background-color:Tomato;"></p>
	</div>
</div>


</body>
</html>