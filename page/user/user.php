<?php 
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
    <a href="https://web.facebook.com/Ions.Revolutionz" target="_blank">
        <img src="images/contactUs.jpg" alt="" width="600" height="200" class="img-responsive">
    </a>
    <br>
    <br>
    <p style="font-size: 20px;"><a href="https://web.facebook.com/Ions.Revolutionz" target="_blank" style="text-decoration: none;"></a>
    </p>
</center>
</body>
</html>