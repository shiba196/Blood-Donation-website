<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link  rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
	<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
	

    <link rel="stylesheet" type="text/css" href="invallblgrp.css">
<div style="background-image:url('inventory.jpg'); height: 300px;">
<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
        <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
        <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
        <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
        <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
        
        <h1><center><font color="white" size="20px">BLOOD</font><font size="20px"> BANK</font><font color="white" size="20px"> INVENTORY</font></center></h1>
		<h3><center><font color="white" size="5px">DONOR</font><font size="5px"> AND</font><font color="white" size="5px"> RECIPIENT</font></center></h3>
        <h3><center><font color="white" size="5px">LIST</font></h3>
</div>
</head>


<body>

<?php

			
include 'donorconfig.php';

error_reporting(0);

session_start();

			$query = " select * from donordetails ";
			$query_run =mysqli_query($conn,$query);
?>
<center>
<a class="side">
<table donor_name="datatablename" class="table table-dark table-hover">

			<h1><p class="login-text" style="font-size: 2rem; font-weight: 800;">DONOR LIST</p></h1>
  <thead>
    <tr>
      <th scope="col"><h4>ID</h4></th>
      <th scope="col"><h4>DONOR NAME</h4></th>
      <th scope="col"><h4>EMAIL</h4></th>
      <th scope="col"><h4>MOBILE NO.</h4></th>
	  <th scope="col"><h4>BLOOD GROUP</h4></th>
	  <th scope="col"><h4>ADDRESS</h4></th>
    </tr>
  </thead>
 <?php
		if($query_run)
			{
				foreach($query_run as $row)
				{
?>
  <tbody>
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['donor_name']; ?> </td>
      <td><?php echo $row['donor_email']; ?> </td>
	  <td><?php echo $row['donor_mobno']; ?> </td>
	  <td><?php echo $row['donor_blgrp']; ?> </td>
	  <td><?php echo $row['donor_address']; ?> </td>
    </tr>
   
  </tbody>
<?php				
				}
			}
			else
			{
				echo "No Records Found";
			}

?>

</table></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<?php

			
include 'recipientconfig.php';

error_reporting(0);

session_start();

			$query = " select * from recipientdetails ";
			$query_run =mysqli_query($conn,$query);
?>

<a class="side">
<table recipient_name="datatablename" class="table table-dark table-hover">

		<h1>	<p class="login-text" style="font-size: 2rem; font-weight: 800;">RECIPIENT LIST</p></h1>

  <thead>
    <tr>
      <th scope="col"><h4>ID</h4></th>
      <th scope="col"><h4>RECIPIENT NAME</h4></th>
      <th scope="col"><h4>EMAIL</h4></th>
      <th scope="col"><h4>MOBILE NO.</h4></th>
	  <th scope="col"><h4>BLOOD GROUP</h4></th>
	  <th scope="col"><h4>ADDRESS</h4></th>
    </tr>
  </thead>
 <?php
		if($query_run)
			{
				foreach($query_run as $row)
				{
?>
  <tbody>
    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['recipient_name']; ?> </td>
      <td><?php echo $row['recipient_email']; ?> </td>
	  <td><?php echo $row['recipient_mobno']; ?> </td>
	  <td><?php echo $row['recipient_blgrp']; ?> </td>
	  <td><?php echo $row['recipient_address']; ?> </td>
    </tr>
   
  </tbody>
<?php				
				}
			}
			else
			{
				echo "No Records Found";
			}

?>

</table></a>
        </center>
</body>

<script>
				$(document).ready(function() {
    			$('#datatablename').DataTable();
				} );
	</script>

</html>