<<?php 

include 'recipientconfig.php';
session_start();
error_reporting(0);


@$recipient_blgrp=$_POST['bloodgroup'];
@$apos_recipient_blgrp=$_POST['A+ve'];
@$aneg_recipient_blgrp=$_POST['A-ve'];
@$bpos_recipient_blgrp=$_POST['B+ve'];
@$bneg_recipient_blgrp=$_POST['B-ve'];
@$abpos_recipient_blgrp=$_POST['AB+ve'];
@$abneg_recipient_blgrp=$_POST['AB-ve'];
@$opos_recipient_blgrp=$_POST['O+ve'];
@$oneg_recipient_blgrp=$_POST['O-ve'];

if (isset($_POST['submit'])) {
    $recipient_name = $_POST['recipient_name'];
    $recipient_email = $_POST['recipient_email'];
    $recipient_mobno = $_POST['recipient_mobno'];
    $recipient_address = $_POST['recipient_address'];


    $sql = "SELECT * FROM recipientdetails WHERE recipient_name='$recipient_name'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO recipientdetails (recipient_name, recipient_email, recipient_mobno, recipient_blgrp, recipient_address)
					VALUES ('$recipient_name', '$recipient_email', '$recipient_mobno', '$recipient_blgrp', '$recipient_address')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
      


  
  // A+ve Blood Group Database.


  if ($apos_recipient_blgrp == $recipient_blgrp) {
        $sql1 = "SELECT * FROM apositiverecipientdetail WHERE apos_recipient_name='$recipient_name'";
        $result1 = mysqli_query($conn, $sql1);
        if (!$result1->num_rows > 0) {
			$sql1 = "INSERT INTO apositiverecipientdetail (apos_recipient_name, apos_recipient_email, apos_recipient_mobno, apos_recipient_address)
					VALUES ('$recipient_name', '$recipient_email', '$recipient_mobno', '$recipient_address')";
			$result1 = mysqli_query($conn, $sql1);
			if ($result1) {
				
				$recipient_name = "";
        $recipient_email ="";
        $recipient_mobno = "";
        $_POST['$recipient_blgrp'] = "";
        $_POST['apos_recipient_blgrp']= "";
        $recipient_address = "";
			} 
		} 
  }
      

  // A-ve Blood Group Database.

   if ($aneg_recipient_blgrp == $recipient_blgrp) {
		$sql2 = "SELECT * FROM anegetiverecipientdetail WHERE aneg_recipient_name='$recipient_name'";
		$result2 = mysqli_query($conn, $sql2);
		if (!$result2->num_rows > 0) {
			$sql2 = "INSERT INTO anegetiverecipientdetail (aneg_recipient_name, aneg_recipient_email, aneg_recipient_mobno, aneg_recipient_address)
					VALUES ('$recipient_name', '$recipient_email', '$recipient_mobno', '$recipient_address')";
			$result2 = mysqli_query($conn, $sql2);
			if ($result2) {
				
				$recipient_name = "";
        $recipient_email ="";
        $recipient_mobno = "";
        $_POST['$recipient_blgrp'] = "";
        $_POST['aneg_recipient_blgrp']= "";
        $recipient_address = "";
			} 
		} 
		
	}

  // B+ve Blood Group Database.

  if ($bpos_recipient_blgrp == $recipient_blgrp) {
		$sql3 = "SELECT * FROM bpositiverecipientdetail WHERE bpos_recipient_name='$recipient_name'";
		$result3 = mysqli_query($conn, $sql3);
		if (!$result3->num_rows > 0) {
			$sql3 = "INSERT INTO bpositiverecipientdetail (bpos_recipient_name, bpos_recipient_email, bpos_recipient_mobno, bpos_recipient_address)
					VALUES ('$recipient_name', '$recipient_email', '$recipient_mobno', '$recipient_address')";
			$result3 = mysqli_query($conn, $sql3);
			if ($result3) {
				
				$recipient_name = "";
        $recipient_email ="";
        $recipient_mobno = "";
        $_POST['$recipient_blgrp'] = "";
        $_POST['bpos_recipient_blgrp']= "";
        $recipient_address = "";
			} 
		} 
		
	}

  // B-ve Blood Group Database.

   if ($bneg_recipient_blgrp == $recipient_blgrp) {
		$sql4 = "SELECT * FROM bnegetiverecipientdetail WHERE bneg_recipient_name='$recipient_name'";
		$result4 = mysqli_query($conn, $sql4);
		if (!$result4->num_rows > 0) {
			$sql4 = "INSERT INTO bnegetiverecipientdetail (bneg_recipient_name, bneg_recipient_email, bneg_recipient_mobno, aneg_recipient_address)
					VALUES ('$recipient_name', '$recipient_email', '$recipient_mobno', '$recipient_address')";
			$result4 = mysqli_query($conn, $sql4);
			if ($result4) {
				
				$recipient_name = "";
        $recipient_email ="";
        $recipient_mobno = "";
        $_POST['$recipient_blgrp'] = "";
        $_POST['bneg_recipient_blgrp']= "";
        $recipient_address = "";
			} 
		} 
		
	}

  // AB+ve Blood Group Database.

   if ($abpos_recipient_blgrp == $recipient_blgrp) {
		$sql5 = "SELECT * FROM abpositiverecipientdetail WHERE abpos_recipient_name='$recipient_name'";
		$result5 = mysqli_query($conn, $sql5);
		if (!$result5->num_rows > 0) {
			$sql5= "INSERT INTO abpositiverecipientdetail (abpos_recipient_name, abpos_recipient_email, abpos_recipient_mobno, abpos_recipient_address)
					VALUES ('$recipient_name', '$recipient_email', '$recipient_mobno', '$recipient_address')";
			$result5 = mysqli_query($conn, $sql5);
			if ($result5) {
				
				$recipient_name = "";
        $recipient_email ="";
        $recipient_mobno = "";
        $_POST['$recipient_blgrp'] = "";
        $_POST['abpos_recipient_blgrp']= "";
        $recipient_address = "";
			} 
		} 
		
	}

  // AB-ve Blood Group Database.

   if ($abneg_recipient_blgrp == $recipient_blgrp) {
		$sql6 = "SELECT * FROM abnegetiverecipientdetail WHERE abneg_recipient_name='$recipient_name'";
		$result6 = mysqli_query($conn, $sql6);
		if (!$result6->num_rows > 0) {
			$sql6 = "INSERT INTO abnegetiverecipientdetail (abneg_recipient_name, abneg_recipient_email, abneg_recipient_mobno, abneg_recipient_address)
					VALUES ('$recipient_name', '$recipient_email', '$recipient_mobno', '$recipient_address')";
			$result6 = mysqli_query($conn, $sql6);
			if ($result6) {
				
				$recipient_name = "";
        $recipient_email ="";
        $recipient_mobno = "";
        $_POST['$recipient_blgrp'] = "";
        $_POST['abneg_recipient_blgrp']= "";
        $recipient_address = "";
			} 
		} 
		
	}

    // O+ve Blood Group Database.

   if ($opos_recipient_blgrp == $recipient_blgrp) {
		$sql7 = "SELECT * FROM opositiverecipientdetail WHERE opos_recipient_name='$recipient_name'";
		$result7 = mysqli_query($conn, $sql7);
		if (!$result7->num_rows > 0) {
			$sql7 = "INSERT INTO opositiverecipientdetail (opos_recipient_name, opos_recipient_email, opos_recipient_mobno, opos_recipient_address)
					VALUES ('$recipient_name', '$recipient_email', '$recipient_mobno', '$recipient_address')";
			$result7 = mysqli_query($conn, $sql7);
			if ($result7) {
				
				$recipient_name = "";
        $recipient_email ="";
        $recipient_mobno = "";
        $_POST['$recipient_blgrp'] = "";
        $_POST['opos_recipient_blgrp']= "";
        $recipient_address = "";
			} 
		} 
		
	}

    // O-ve Blood Group Database.

   if ($oneg_recipient_blgrp == $recipient_blgrp) {
		$sql8 = "SELECT * FROM onegetiverecipientdetail WHERE oneg_recipient_name='$recipient_name'";
		$result8 = mysqli_query($conn, $sql8);
		if (!$result8->num_rows > 0) {
			$sql8 = "INSERT INTO onegetiveerecipientdetail (oneg_recipient_name, oneg_recipient_email, oneg_recipient_mobno, oneg_recipient_address)
					VALUES ('$recipient_name', '$recipient_email', '$recipient_mobno', '$recipient_address')";
			$result8 = mysqli_query($conn, $sql8);
			if ($result8) {
				
				$recipient_name = "";
        $recipient_email ="";
        $recipient_mobno = "";
        $_POST['$recipient_blgrp'] = "";
        $_POST['oneg_recipient_blgrp']= "";
        $recipient_address = "";
			} 
		} 
		
	}

  
} else {
  echo "<script>alert('Woops! Something Wrong Went.')</script>";
}
} else {
echo "<script>alert('Woops! Email Already Exists.')</script>";
}
      
}	



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="formstyle.css">
  <div style="opacity:0.8;">
	<img src="Recipientlogo.png" style="width: 720px; height: 700px;" alt="Ricipient Logo" /></div>
	<title> Recipient Form</title>
</head>
<body>
	
<body>
    <div class="container">
      <form action="" method="POST" class="login-email">
              <p class="login-text" style="font-size: 2rem; font-weight: 800;">Resister For Blood</p>
        <div class="input-group">
          <input type="text"  name="recipient_name" placeholder="Name Of The User.." value="<?php echo $recipient_name; ?>" required>
        </div>
        <div class="input-group">
          <input type="email"  name="recipient_email" placeholder="Email Id.." value="<?php echo $recipient_email; ?>" required>
        </div>
        <div class="input-group">
          <input type="text"  name="recipient_mobno" placeholder="Mobile Number.." value="<?php echo $recipient_mobno; ?>" required>
        </div>
        <div>
    
    <p class="login-text" style="font-size: 2rem; font-weight: 200;">Blood Group</p>
    <div >

    <input class="input-radio" type="radio"  id="A+ve" name="bloodgroup" value="A+ve" >
        <label for="A+ve">A+ve</label><br> 

        <input class="input-radio" type="radio"  id="A-ve" name="bloodgroup"  value="A-ve" >
        <label for="A-ve">A-ve</label><br>


        <input class="input-radio" type="radio" id="B+ve" name="bloodgroup" value="B+ve" >
        <label for="B+ve">B+ve</label><br>

    <input class="input-radio" type="radio" id="B-ve" name="bloodgroup" value="B-ve" >
        <label for="B-ve">B-ve</label><br>


    <input class="input-radio" type="radio" id="AB+ve" name="bloodgroup" value="AB+ve" >
        <label for="AB+ve">AB+ve</label><br>

    <input class="input-radio" type="radio" id="AB-ve" name="bloodgroup" value="AB-ve" >
        <label for="AB-ve">AB-ve</label><br>


    <input class="input-radio" type="radio" id="O+ve" name="bloodgroup" value="O+ve" >
        <label for="O+ve">O+ve</label><br>

    <input class="input-radio" type="radio" id="O-ve" name="bloodgroup" value="O-ve" >
        <label for="O-ve">O-ve</label><br>

</div>
</div>
         
<div>

<p class="login-text" style="font-size: 2rem; font-weight: 200;"> Confirm Blood Group</p>
<div >

<input class="input-radio" type="radio"  id="A+ve" name="A+ve" value= "A+ve" >
        <label for="A+ve">A+ve</label><br> 

        <input class="input-radio" type="radio"  id="A-ve" name="A-ve" value="A-ve" >
        <label for="A-ve">A-ve</label><br>


        <input class="input-radio" type="radio" id="B+ve" name="B+ve" value="B+ve" >
        <label for="B+ve">B+ve</label><br>

<input class="input-radio" type="radio" id="B-ve" name="B-ve" value="B-ve" >
        <label for="B-ve">B-ve</label><br>


<input class="input-radio" type="radio" id="AB+ve" name="AB+ve" value="AB+ve" >
        <label for="AB+ve">AB+ve</label><br>

<input class="input-radio" type="radio" id="AB-ve" name="AB-ve" value="AB-ve" >
        <label for="AB-ve">AB-ve</label><br>

<input class="input-radio" type="radio" id="O+ve" name="O+ve" value="O+ve" >
        <label for="O+ve">O+ve</label><br>

<input class="input-radio" type="radio" id="O-ve" name="O-ve" value="O-ve" >
        <label for="O-ve">O-ve</label><br><br>

</div>

        <div class="input-group">
          <input type="text"  name="recipient_address" placeholder="Address.." value="<?php echo $recipient_address; ?>" required>
        </div>
        <div class="input-group">
          <button name="submit" class="btn">Register As A Recipient</button>
        </div>
        <p class="recipient-recipient-text">Do Not Have an account? <a href="register.php">Sign Up Here</a>.</p>
        
      </form>
    </div>
  </body>
</html>
