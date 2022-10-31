<?php 

include 'config.php';

error_reporting(0);

session_start();


?>


<!DOCTYPE php>
<php>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="homepagecss.css">
	<meta charset="utf-8">
	<title>Home page</title>
  
  <div class="dropdown">
  
  <button class="dropbtn">MENU</button>
  <div class="dropdown-content">
  
  <a href="donorform.php">Donate For A Cause</a>
  <a href="recipientform.php">Need Of Blood</a>
  <a href="invallblgrp.php">Blood Inventory (All Blood Group)</a>
  <a href="inventory.php">Blood Bank Inventory</a>
  <a href="#">Gallery</a>
 </div>
 </div>
 <button class="button6" > <a href="index.php">LOGOUT </a>
 </button>
 <center><img src="C:\Users\subha\Desktop\website\iamges\cenurion blood donation logo.png" height="200px" width="200px"></center>
	<center><h1><font color="red">Centurion</font> Blood <font color="red";>Bank</font></h1></center>
  <img src="C:\Users\subha\Desktop\website\iamges\heartbeat.png" height="80px" width="1500px">
	<center><img src="https://www.iconsdb.com/icons/preview/red/home-3-xxl.png" style="width: 40px;height: 40px;"></center>
  <!--<img src="C:\Users\subha\Desktop\website\iamges\RIP.png"height="80px" width="600px" align="right">-->
</head>
<body>
<center><h1>Welcome to the website of Centurion Blood Bank Management System.</h1></center>
<center class="SHADOW" style="font-size:26px;"><strong>This is a portal that help Donors and Recipients to easily know the information of the user in case of urgency.<br>
 While taking into account of a large range of accidents happening in the society, there is always a shortage of blood in case of need due to which many valuable lives are lost in no time.<br> This initiative will help you to know the details of doner or recipient, so that they can be easily available in case of emergency.</center></strong>
<center><a href="donorform.php"><img src="C:\Users\subha\Desktop\website\iamges\DONOR BUTTON.png"></a>
<a href="recipientform.php"><img src="C:\Users\subha\Desktop\website\iamges\RECIPIENT BUTTON.png"></a></center>

	<!--<center><button class="button button1" style='margin-right: 60px ;'>Donor</button>
    <button class="button button1" style='margin-left: 20px;'>Recipient</button></center>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="C:\Users\subha\Desktop\website\iamges\sign up.png">
      <img src="C:\Users\subha\Desktop\website\iamges\sign up.png" alt="Cinque Terre" width="600" height="200">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="C:\Users\subha\Desktop\website\iamges\sign up.png">
      <img src="C:\Users\subha\Desktop\website\iamges\sign up.png" alt="Forest" width="600" height="200">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="C:\Users\subha\Desktop\website\iamges\sign up.png">
      <img src="C:\Users\subha\Desktop\website\iamges\sign up.png" alt="Northern Lights" width="600" height="200">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="C:\Users\subha\Desktop\website\iamges\sign up.png">
      <img src="C:\Users\subha\Desktop\website\iamges\sign up.png" alt="Mountains" width="400" height="200">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>



<div class="clearfix"></div>-->

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="C:\Users\subha\Desktop\website\iamges\sign up.png" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="C:\Users\subha\Desktop\website\iamges\sign up.png" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="C:\Users\subha\Desktop\website\iamges\sign up.png" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


<div class="inset">
<img src="C:\Users\subha\Desktop\website\iamges\HOME.png" height="600px" width="600px" align="left"></div> <p align ="right" style="font-size:20px">
 <center><h1 style="color:#FF2156; font-size: 40PX;">“People Who Donate Blood<br></h1 > <h1 style="color:#FF2156; font-size: 35PX;">Are The Reason For A Smile On A Mother’s Face</h1><h1 style="color:#FF2156; font-size: 30PX;"> Who Needs Blood To Save Her Son’s Life.”</h1></center><br><br>

<center><h1 style="color:; font-size: 35PX;">“You Can’t Buy A Life For Someone With Money,</h1> <h1 style="color:; font-size: 25PX;">But You Can Save A Life Of Someone By Donating Blood To Him.”</h1></center><br>

<center><h1 style="color: #FF2156; font-size: 30PX;">DONATE BLOOD</h1><h1 style="font-size: 25PX;">SAVE A LIFE....</h1></center></p><br><br><br><br><br><br><br><br><br><br><br><br><br>
<h2> About Blood Donation </h2>
<ul style="circle" >
  <h3><li><a href="beingadonor.php"> Being a donor </a></li>
  <li><a href="eligibilityreq.php"> Eligibility Requirements</a></li>
  <li><a href="donprcs.php"> Donation Process</a></li>
  <li><a href="imprtndts.php"> Important  Dates</a></li>
<li><a href="imprtndts.php">Contact Details<</a>/li>
<li>Query</li></ul></h3>
<h2><center>Get in Touch</center></h2>
<center><a href="www.gmail.com">Email us</a></center>
</body>
</html>
</php>