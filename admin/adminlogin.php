<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="../images/logo1.png" />
	<link rel="stylesheet" type="text/css" href="../styles/style.css">
	<title>Admin Login</title>
	<script src="../js/javascript.js"></script>
</head>
<body>
	<table class="site">
	<tr class="top">
		<td class="head"><!--Name of the site-->
			<img src="../images/tshirtlogo.png"style="width:310px;height: auto;" >
		</td>
		<td class="logo"><!--logo class-->
			<img src="../images/nsbmlogo.png"style="width:310px;height: auto;" >
		</td>
	</tr>
</table>

	<table class="log" align="center">
		<tr><td colspan="2">

		<center><h1>LOGIN HERE</h1></center></td>
		<tr>
		<form method="post" id="loginpage" name="frm_1" action="adminlogin.php"><center>
			<td><P>Username</P></td>
			<td><input type="text" name="adminun" placeholder="            Enter Username"></td>
		</tr>
		<tr>
			<td><p>Password</p></td>
			<td><input type="password" name="adminpw" placeholder="             Enter Password"></td>
		</tr>
		<tr><td colspan="2" align="center">
			<input type="submit" class="submit" name="submit" value="Login">

		</form>

		</center>
		</td></tr>
	</table>
	<center><a href="../index.php">Customer Page</a></center>
	<div>


<?php
   ob_start();
   session_start();

error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nsbmtshirts";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
   die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

if (isset($_POST["adminun"]) AND isset($_POST["adminpw"])) {
$adminun= $_POST['adminun'];
$adminpw= $_POST['adminpw'];

$sql = "SELECT * FROM `admins` WHERE `username` = '$adminun' AND `password` = '$adminpw';";
//echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
$row = $result->fetch_assoc();
//echo $row['username'];
//echo $row['password'];
$adminun2 = $row['username'];
$adminpw2 = $row['password'];
}

//echo $adminun2;
//echo $adminpw2;

if ($adminun = $adminun2 && $adminpw = $adminpw2)
{
   $_SESSION['adminun'] = $adminun2;
   $_SESSION['adminpw'] = $adminpw2;

   echo 'You have entered valid username and password';
   header("Location: adminpage.php");
}
else
{
   echo "<br><p style='background-color:rgba(255,0,0,0.5); width: 50%; text-align: center; color='red';'> <b>Wrong username or password!<br>Enter again! </b>";
}
}
?>



<div id="contact" class="contact"><!--contacting options-->
	<p ><u><center>Contact Us</center></u></p>
	<p><center>tshirts@nsbm.com</center></p>
	<p><center>011-1231235</center></p>
</div>



</body>
</html>
