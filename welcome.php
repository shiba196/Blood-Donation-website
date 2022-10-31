<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: signuppage.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <center><title>LOGOUT TO GO TO THE SIGN UP PAGE</title></center>
</head>
<body>
   <center> <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a></center>
</body>
</html>