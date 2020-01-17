<?php
session_start();
if ( isset( $_SESSION['adminpw'] ) ) 
{}
else 
{
	//$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
	header("Location: adminlogin.php");
	exit;
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<link rel="shortcut icon" type="image/x-icon" href="../images/logo1.png" />
	<link rel="stylesheet" type="text/css" href="../styles/style.css">
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
	<table class="nav clearfix" align="center">
      <tr>
        <td><button class="button clearfix" style="vertical-align:middle" onclick="window.location.href = 'adminlogout.php'"><span>Log Out</span></button></td>
        <td><button class="button clearfix" style="vertical-align:middle" onclick="window.location.href = 'orders.php'"><span>Check Orders</span></button></td>
      </tr>
    </table>
	</div>

    <div class="beaker"> 
<form method="post" action="added_tshirt.php">


	<table class="g" align="center"></table>
	<table class="admin_content" align="center">
		<tr>
			<td>Product ID:</td>
			<td><input type="text" name="prodID" id="prodID" required></td>
		</tr>

		<tr>
			<td>Event/Theme:</td>
			<td><input type="text" name="theme" id="theme" required></td>
		</tr>
		
		<tr>
			<td>Available Colours:</td>
			<td><input type="color" id="color1" name="color1" required><input type="color" id="color2" name="color2"><input type="color" id="color3" name="color3"><input type="color" id="color4" name="color4">
			</td>
		</tr>



		<tr>
			<td>Available Materials:</td>
			<td>
				<select name="materials" required>
					<option></option>
					<option>Synthetic materials</option>
					<option>Cotton</option>
					<option>Cellulosic fibres/viscose</option>
					<option>Wool</option>
					<option>Silk</option>
					<option>Leather</option>
					<option>Bast fibres</option>
					<option>Experimental fabrics</option>
					<option>Notions and hardware</option>
					<option>Other</option>
				</select>
			</td>
		</tr>

		<tr>
			<td>Price:</td>
			<td><input type="text" name="price" id="price" required></td>
		</tr>
		<tr>
			<td>Description:</td>
			<td><input type="text" name="description" id="description"></td>
		</tr>
		<tr>
			<td>Contact Number:</td>
			<td><input type="tel" name="contno" minlength="10" maxlength="10" id="contno" required></td>
		</tr>
		<tr>
			<td>Upload an image of the front view of the T-shirt here:</td>
			<td><input type="file" name="tfront" id="tfront" ></td>
		</tr>
		<tr>
			<td>Upload an image of the back view of the T-shirt here:</td>
			<td><input type="file" name="tback" id="tback" ></td>
		</tr>
		<tr>
			<td>Upload an image of the side view of the T-shirt here:</td>
			<td><input type="file" name="tback" id="tside" ></td>
		</tr>
		<tr>
			<td></td><td><input type="reset" name="reset" value="reset" class="reset"><input type="submit" name="submit" value="submit" class="submit"></td>
		</tr>
		
		</table>
	
</form>
</div>
</body>
</html>

