<?php
session_start();
if ( isset( $_SESSION['password'] ) ) {
} else {
	$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
    header("Location: ../login/login.php");
}
?>

<html>
<head>
	<title>Tshirt4 </title>
	<link rel="shortcut icon" type="image/x-icon" href="../images/logo1.png" />
	<script src="../js/javascript.js"> </script>
	<script>
		function confirmorder()
		{
  			window.confirm("Are you sure you want to place this order?");
		}
	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../styles/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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



	<div>
	<table class="clearfix" align="center">
      <tr>
      	
        <td><button class="button" style="vertical-align:middle" onclick="adminlogin()"><span>Admin Login</span></button></td>
        <td><button class="button" style="vertical-align:middle" onclick="window.location.href='../login/logout.php'"><span>Log Out</span></button></td>
        <td><button class="button" style="vertical-align:middle" onclick="window.location.href='#contact'"><span>Contact Us</span></button></td>
      </tr>
    </table>

	<?php ///connecting nsbmtshirts database
	
	$connection= mysqli_connect("localhost","root","");
	$db=mysqli_select_db($connection,"nsbmtshirts"); //selecting the database
	?>

	
	

	</div>
	<hr>

	

	<div id="tright"> 
		<?php
			//selecting the tshirt_details table in database where prodID='SE1001'
			$result= mysqli_query($connection,"select * from tshirts where prodID='SE1004'");
		
			//Retriving the data & display on the page
	
			while($row = mysqli_fetch_array($result))
		{
			?>
	

	<form name="tshirt_details" action="storingorderdetails.php"  method="POST">
	<table id="tshirtdetails" border="0">
	<h2 id="themename"> <?php echo $row["Theme"]; ?></h2>
	<hr>

	
		
	<tr>
		<td class="tdpadding1">Student ID:</td>
		<td class="tdpadding2"> <input class="box_border" type="text" id="stid" name="stid" placeholder="Student ID" required></td>
	</tr> 

	<tr>
		<td class="tdpadding1">Gender: </td> 
		<td class="tdpadding2"><input type="radio" id="gender" name="gender" value="Male" required>Male <input type="radio" id="gender" name="gender" value="Female" required>Female</td>
	</tr> 






	<tr>
		<td class="tdpadding1">Contact No: </td> 
		<td class="tdpadding2"><input class="box_border" type="text" id="contno" name="contno" placeholder="Contact No" required></td>
	</tr> 

	<tr>
		<td class="tdpadding1">Theme name:</td>
		<td class="tdpadding2"> <input class="hideborder" type="text" name="theme" id="theme" readonly="readonly"  value=<?php echo $row["Theme"]; ?>></td>
	</tr> 


	<tr>
		<td class="tdpadding1">Product ID: </td> 
		<td class="tdpadding2"><input class="hideborder" id="pid" name="pid" readonly="readonly"  value=<?php echo $row["prodID"]; ?> ></td>
	</tr> 


	<tr>
		<td class="tdpadding1">Material: </td> 
		<td class="tdpadding2">
			<input class="hideborder" id="Material" name="Material" readonly="readonly"  value=<?php echo $row["Material"];?> >
		</td>
	</tr> 

	<tr>
		<td class="tdpadding1">Color: </td> 
		<td class="tdpadding2"> <select name="color" required>
			<option value="">-Select- </option>
			<option name="color1" style="background:<?php echo $row["Color1"];?>;color:<?php echo $row["Color1"];?>"> <?php echo $row["Color1"];?></option>
			<option name="color2" style="background:<?php echo $row["Color2"];?>;color:<?php echo $row["Color2"];?>"> <?php echo $row["Color2"];?></option>
			<option name="color3" style="background:<?php echo $row["Color3"];?>;color:<?php echo $row["Color3"];?>"> <?php echo $row["Color3"];?></option>
			<option name="color4" style="background:<?php echo $row["Color4"];?>;color:<?php echo $row["Color4"];?>"> <?php echo $row["Color4"];?></option>
		</select>

		</td>
	</tr>

	<tr>
		<td class="tdpadding1">Size: </td> 
		<td class="tdpadding2"> <select name="size" required>
			<option value="">-Select- </option>
			<option name="size1">S </option>
			<option name="size2">M</option>
			<option name="size2">L</option>
			<option name="size3">XL</option>
			<option name="size4">XXL </option>
		</select>
		</td>
	</tr>

	<tr>
<td class="tdpadding1">Price: </td> <td class="tdpadding2"><input class="hideborder" id="prices" name="prices" readonly="readonly"  value=Rs.<?php  echo  $row["Prices"]; }?>>  </td>
	</tr>		


	<tr>
		<td><input class="button2" type="submit" value="Order Now" name="order" onclick="confirmorder()"> </td><td> <input class="button2" type="reset" value="Reset" name="reset"> 
		<a href="sizechart.html"><input class="button2" type="button" value="Size Chart" name="checks"></a></td>
	</tr>
</form>
</table>
		
	</div>

	<div id="tleft">
	<table id="tshirttable" border="0" align="right">
	<tr>
		<td>
	<a href="../images/pink front.JPG"><img class="timg" src="../images/pink front.JPG"></a>
		</td>

		<td>
	<a href="../images/pink rear.JPG"><img class="timg" src="../images/pink rear.JPG"></a>
		</td>
	</tr>

	<tr>
		<td  id="thirdrow" colspan="2">
	<a href="../images/pink right.JPG"><img id="thirdimg" src="../images/pink right.JPG"></a>
		</td>
	</tr>
</table>
</div>
<hr>
<div id="contact" class="contact"><!--contacting options-->
	<p ><u><center>Contact Us</center></u></p>
	<p><center>tshirts@nsbm.com</center></p>
	<p><center>011-1231235</center></p>
</div>

	





</body>
</html>