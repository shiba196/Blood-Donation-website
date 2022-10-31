<?php 

include 'donorconfig.php';
session_start();
error_reporting(0);

@$donor_blgrp=$_POST['bloodgroup'];
@$apos_donor_blgrp=$_POST['A+ve'];
@$aneg_donor_blgrp=$_POST['A-ve'];
@$bpos_donor_blgrp=$_POST['B+ve'];
@$bneg_donor_blgrp=$_POST['B-ve'];
@$abpos_donor_blgrp=$_POST['AB+ve'];
@$abneg_donor_blgrp=$_POST['AB-ve'];
@$opos_donor_blgrp=$_POST['O+ve'];
@$oneg_donor_blgrp=$_POST['O-ve'];

if (isset($_POST['submit'])) {
  $donor_name = $_POST['donor_name'];
	$donor_email = $_POST['donor_email'];
	$donor_mobno = $_POST['donor_mobno'];
  $donor_address = $_POST['donor_address'];


  $sql = "SELECT * FROM donordetails WHERE donor_name='$donor_name'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO donordetails (donor_name, donor_email, donor_mobno, donor_blgrp, donor_address)
					VALUES ('$donor_name', '$donor_email', '$donor_mobno', '$donor_blgrp', '$donor_address')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";

        

       


  
  // A+ve Blood Group Database.


  if ($apos_donor_blgrp == $donor_blgrp) {
        $sql1 = "SELECT * FROM apositivedonordetail WHERE apos_donor_name='$donor_name'";
        $result1 = mysqli_query($conn, $sql1);
        if (!$result1->num_rows > 0) {
			$sql1 = "INSERT INTO apositivedonordetail (apos_donor_name, apos_donor_email, apos_donor_mobno, apos_donor_address)
					VALUES ('$donor_name', '$donor_email', '$donor_mobno', '$donor_address')";
			$result1 = mysqli_query($conn, $sql1);
			if ($result1) {
				
				$donor_name = "";
        $donor_email ="";
        $donor_mobno = "";
        $_POST['$donor_blgrp'] = "";
        $_POST['apos_donor_blgrp']= "";
        $donor_address = "";
			} 
		} 
  }
      

  // A-ve Blood Group Database.

   if ($aneg_donor_blgrp == $donor_blgrp) {
		$sql2 = "SELECT * FROM anegetivedonordetail WHERE aneg_donor_name='$donor_name'";
		$result2 = mysqli_query($conn, $sql2);
		if (!$result2->num_rows > 0) {
			$sql2 = "INSERT INTO anegetivedonordetail (aneg_donor_name, aneg_donor_email, aneg_donor_mobno, aneg_donor_address)
					VALUES ('$donor_name', '$donor_email', '$donor_mobno', '$donor_address')";
			$result2 = mysqli_query($conn, $sql2);
			if ($result2) {
				
				$donor_name = "";
        $donor_email ="";
        $donor_mobno = "";
        $_POST['$donor_blgrp'] = "";
        $_POST['aneg_donor_blgrp']= "";
        $donor_address = "";
			} 
		} 
		
	}

  // B+ve Blood Group Database.

  if ($bpos_donor_blgrp == $donor_blgrp) {
		$sql3 = "SELECT * FROM bpositivedonordetail WHERE bpos_donor_name='$donor_name'";
		$result3 = mysqli_query($conn, $sql3);
		if (!$result3->num_rows > 0) {
			$sql3 = "INSERT INTO bpositivedonordetail (bpos_donor_name, bpos_donor_email, bpos_donor_mobno, bpos_donor_address)
					VALUES ('$donor_name', '$donor_email', '$donor_mobno', '$donor_address')";
			$result3 = mysqli_query($conn, $sql3);
			if ($result3) {
				
				$donor_name = "";
        $donor_email ="";
        $donor_mobno = "";
        $_POST['$donor_blgrp'] = "";
        $_POST['bpos_donor_blgrp']= "";
        $donor_address = "";
			} 
		} 
		
	}

  // B-ve Blood Group Database.

   if ($bneg_donor_blgrp == $donor_blgrp) {
		$sql4 = "SELECT * FROM bnegetivedonordetail WHERE bneg_donor_name='$donor_name'";
		$result4 = mysqli_query($conn, $sql4);
		if (!$result4->num_rows > 0) {
			$sql4 = "INSERT INTO bnegetivedonordetail (bneg_donor_name, bneg_donor_email, bneg_donor_mobno, aneg_donor_address)
					VALUES ('$donor_name', '$donor_email', '$donor_mobno', '$donor_address')";
			$result4 = mysqli_query($conn, $sql4);
			if ($result4) {
				
				$donor_name = "";
        $donor_email ="";
        $donor_mobno = "";
        $_POST['$donor_blgrp'] = "";
        $_POST['bneg_donor_blgrp']= "";
        $donor_address = "";
			} 
		} 
		
	}

  // AB+ve Blood Group Database.

   if ($abpos_donor_blgrp == $donor_blgrp) {
		$sql5 = "SELECT * FROM abpositivedonordetail WHERE abpos_donor_name='$donor_name'";
		$result5 = mysqli_query($conn, $sql5);
		if (!$result5->num_rows > 0) {
			$sql5= "INSERT INTO abpositivedonordetail (abpos_donor_name, abpos_donor_email, abpos_donor_mobno, abpos_donor_address)
					VALUES ('$donor_name', '$donor_email', '$donor_mobno', '$donor_address')";
			$result5 = mysqli_query($conn, $sql5);
			if ($result5) {
				
				$donor_name = "";
        $donor_email ="";
        $donor_mobno = "";
        $_POST['$donor_blgrp'] = "";
        $_POST['abpos_donor_blgrp']= "";
        $donor_address = "";

			} 
		} 
		
	}

  // AB-ve Blood Group Database.

   if ($abneg_donor_blgrp == $donor_blgrp) {
		$sql6 = "SELECT * FROM abnegetivedonordetail WHERE abneg_donor_name='$donor_name'";
		$result6 = mysqli_query($conn, $sql6);
		if (!$result6->num_rows > 0) {
			$sql6 = "INSERT INTO abnegetivedonordetail (abneg_donor_name, abneg_donor_email, abneg_donor_mobno, abneg_donor_address)
					VALUES ('$donor_name', '$donor_email', '$donor_mobno', '$donor_address')";
			$result6 = mysqli_query($conn, $sql6);
			if ($result6) {
				
				$donor_name = "";
        $donor_email ="";
        $donor_mobno = "";
        $_POST['$donor_blgrp'] = "";
        $_POST['abneg_donor_blgrp']= "";
        $donor_address = "";
			} 
		} 
		
	}

    // O+ve Blood Group Database.

   if ($opos_donor_blgrp == $donor_blgrp) {
		$sql7 = "SELECT * FROM opositivedonordetail WHERE opos_donor_name='$donor_name'";
		$result7 = mysqli_query($conn, $sql7);
		if (!$result7->num_rows > 0) {
			$sql7 = "INSERT INTO opositivedonordetail (opos_donor_name, opos_donor_email, opos_donor_mobno, opos_donor_address)
					VALUES ('$donor_name', '$donor_email', '$donor_mobno', '$donor_address')";
			$result7 = mysqli_query($conn, $sql7);
			if ($result7) {
				
				$donor_name = "";
        $donor_email ="";
        $donor_mobno = "";
        $_POST['$donor_blgrp'] = "";
        $_POST['opos_donor_blgrp']= "";
        $donor_address = "";
			} 
		} 
		
	}

    // O-ve Blood Group Database.

   if ($oneg_donor_blgrp == $donor_blgrp) {
		$sql8 = "SELECT * FROM onegetivedonordetail WHERE oneg_donor_name='$donor_name'";
		$result8 = mysqli_query($conn, $sql8);
		if (!$result8->num_rows > 0) {
			$sql8 = "INSERT INTO onegetiveedonordetail (oneg_donor_name, oneg_donor_email, oneg_donor_mobno, oneg_donor_address)
					VALUES ('$donor_name', '$donor_email', '$donor_mobno', '$donor_address')";
			$result8 = mysqli_query($conn, $sql8);
			if ($result8) {
				
				$donor_name = "";
        $donor_email ="";
        $donor_mobno = "";
        $_POST['$donor_blgrp'] = "";
        $_POST['oneg_donor_blgrp']= "";
        $donor_address = "";
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
	<img src="Donorlogo.png" style="width: 720px; height: 700px;" alt="Donor Logo" /></div>
	<title> Donor Form</title>
</head>

  <body>
    <div class="container">
      <form action="" method="POST"  class="login-email">
              <p class="login-text" style="font-size: 2rem; font-weight: 800;">Donate</p>
        <div class="input-group">
          <input type="text"  name="donor_name" placeholder="Name Of The User.." value="<?php echo $donor_name; ?>" required>
        </div>
        <div class="input-group">
          <input type="email"  name="donor_email" placeholder="Email Id.." value="<?php echo $donor_email; ?>" required>
        </div>
        <div class="input-group">
          <input type="text"  name="donor_mobno" placeholder="Mobile Number.." value="<?php echo $donor_mobno; ?>" required>
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


</div>
        
        <div class="input-group">
          <input type="text"  name="donor_address" placeholder="Address.." value="<?php echo $donor_address; ?>" required>
        </div>
        <div class="input-group">
          <button name="submit" class="btn">Register As A Doner</button>
        </div>
        <p class="doner-recipient-text">Do Not Have an account? <a href="register.php">Sign Up Here</a>.</p>
      </form>
    </div>
  </body>
</html>