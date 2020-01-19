<?php
session_start();
if ( isset( $_SESSION['password'] ) ) {
} else {
	$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
    header("Location: ../login/login2.php");
}
?>

<html>
<head>
	<title>Tshirt1 </title>
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
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 500px;
  position: relative;
  margin-left: 180px;
  margin-top: 35px;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}



/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
	
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
      	<td><button class="button" style="vertical-align:middle" onclick="window.history.back()"><span>Back to T-shirt</span></button></td>
      	<td><button class="button" style="vertical-align:middle" onclick="window.location.href='../login/logout.php'"><span>Log Out</span></button></td>
        <td><button class="button" style="vertical-align:middle" onclick="window.location.href='../admin/adminlogin.php'"><span>Admin Login</span></button></td>
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
			$result= mysqli_query($connection,"select * from tshirts where prodID='SE1001'");
		
			//Retriving the data & display on the page
	
			while($row = mysqli_fetch_array($result))
		{
			?>
	

	<form name="tshirt_details" action="storingorderdetails.php"  method="POST">
	<table id="tshirtdetails" border="0" align="left">
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
		<table border="0" align="right">
			<tr><td>
	<div class="slideshow-container">

<div class="mySlides fade">

  <img src="../images/black 2 front.jpg" style="width:500px;height:480px" >
  <div class="text">Front View</div>
</div>

<div class="mySlides fade">

  <img src="../images/black 2 rear.jpg" style="width:500px;height:480px">
  <div class="text">Back View</div>
</div>

<div class="mySlides fade">

  <img src="../images/black 2 left.jpg" style="width:500px;height:480px">
  <div class="text">Side View</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</td>
</tr>
</table>

</div>
<br>


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</div>

<br>
<br>
<div id="contact" class="contact"><!--contacting options-->
	<br>
	<p ><u><center>Contact Us</center></u></p>
	<p><center>tshirts@nsbm.com</center></p>
	<p><center>011-1231235</center></p>
	<br>
</div>


</body>
</html>