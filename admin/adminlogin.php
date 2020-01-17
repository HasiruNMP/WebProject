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
		<form method="post" id="loginpage" name="frm_1" action="#"><center>
			<td><P>Username</P></td>
			<td><input type="text" name="uname" placeholder="            Enter Username"></td>
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

//error_reporting(0);

if (isset($_POST["uname"]) AND isset($_POST["adminpw"])) 
{
$adminun= $_POST['uname'];
$adminpw= $_POST['adminpw'];

echo $adminun , $adminpw;

$adminun2 = 'admin';
$adminpw2 = 'admin';


if ($adminun = $adminun2 && $adminpw = $adminpw2) 
{
   $_SESSION['valid'] = true;
   $_SESSION['timeout'] = time();
   $_SESSION['adminun'] = $adminun;
   $_SESSION['adminpw'] = $adminpw;
   
   //echo 'You have entered valid use name and password';
   header("Location: adminpage.php");
}
else 
{
   echo 'Wrong username or password';
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