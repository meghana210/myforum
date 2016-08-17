<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body>
		<div id="blueBox" >

		</body>


<?php
  session_start();
 include("config.php");
 include("menu/menu.php");

 
 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
// username and password sent from form
$username=mysqli_real_escape_string($conn,$_POST['username']);
$password=mysqli_real_escape_string($conn,$_POST['password']);
$selectsqli="SELECT id FROM details WHERE username='$username' and password='$password'";
$result=mysqli_query($conn,$selectsqli);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if($count==1)
{
$_SESSION['login_user']=$username;
header('location:desk.php');
}
else
{
$error="Your username or Password is incorrect";
}
}

?>
