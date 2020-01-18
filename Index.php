<?php
session_start();
if ( isset( $_SESSION['password'] ) ) 
{}
else 
{
	header("Location: login/login.php");
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="images/logo1.png" />
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<script src="../js/javascript.js"></script>
	<title>Customer Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<table class="site">
	<tr class="top">
		<td class="head"><!--Name of the site-->
			<img src="images/tshirtlogo.png"style="width:310px;height: auto;" >
		</td>
		<td class="logo"><!--logo class-->
			<img src="images/nsbmlogo.png"style="width:310px;height: auto;" >
		</td>
	</tr>
	
</table>

	<div>

	<table class="clearfix" align="center">
      <tr>
      	
        <td><button class="button" style="vertical-align:middle" onclick="window.location.href='admin/adminlogin.php'"><span>Admin Login</span></button></td>
        <td><button class="button" style="vertical-align:middle" onclick="window.location.href='login/logout.php'"><span>Log Out</span></button></td>
        <td><button class="button" style="vertical-align:middle" onclick="window.location.href='#contact'"><span>Contact Us</span></button></td>
      </tr>
    </table>
	</div>
	
</div>
<br>
<div class="slideshow-container clearfix">

<div class="mySlides fade clearfix ">
  <div class="numbertext">1 / 3</div>
  <img src="images/1.jpg" style="width:1000px;height: 400px;">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade clearfix">
  <div class="numbertext">2 / 3</div>
  <img src="images/2.jpg" style="width:1000px;height: 400px;">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade clearfix">
  <div class="numbertext">3 / 3</div>
  <img src="images/3.jpg" style="width:1000px;height:400px;">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}
</script>
</div>

<div class="imgs clearfix"> <!-- selling items-->
	<center><table>
	<tr><td class="cols"><!--linked images-->
		<a href="tshirts/Tshirtpage1.php"><img src="images/black 2 front.jpg" alt="tshirt1" style="width:300px;height:300px" class="zoom";> <h3><center>Event 1</center></h3>
		</a>
		</td>
		<td class="cols"><!--linked images-->
		<a href="tshirts/Tshirtpage2.php"><img src="images/black front.jpg" alt="tshirt2" style="width:300px;height:300px" class="zoom";><h3><center>Event 2</center></h3>
		</a>
		</td>
		<td class="cols"><!--linked images-->
		<a href="tshirts/Tshirtpage3.php"><img src="images/blue front.jpg" alt="tshirt3" style="width:300px;height:300px"class="zoom";><h3><center>Event 3</center></h3>
		</a>
		</td>
	</tr>
	<tr><td class="cols"><!--linked images-->
		<a href="tshirts/Tshirtpage4.php"><img src="images/pink front.jpg" alt="tshirt4" style="width:300px;height:300px" class="zoom";><h3><center>Event 4</center></h3>
		</a>
		</td>
		<td class="cols"><!--linked images-->
		<a href="tshirts/Tshirtpage5.php"><img src="images/red front.jpg" alt="tshirt5" style="width:300px;height:300px"class="zoom";><h3><center>Event 5</center></h3>
		</a>
		</td>
		<td class="cols"><!--linked images-->
		<a href="#"><img src="images/noimg.jpeg" alt="tshirt6" style="width:300px;height:300px"class="zoom";><h3><center>Event 6</center></h3>
		</a>
		</td>
	</tr>
	<tr><td class="cols"><!--linked images-->
		<a href="#"><img src="images/noimg.jpeg" alt="tshirt7" style="width:300px;height:300px"class="zoom";><h3><center>Event 7</center></h3>
		</a>
		</td>
		<td class="cols"><!--linked images-->
		<a href="#"><img src="images/noimg.jpeg" alt="tshirt8" style="width:300px;height:300px"class="zoom";><h3><center>Event 8</center></h3>
		</a>
		</td>
		<td class="cols"><!--linked images-->
		<a href="#"><img src="images/noimg.jpeg" alt="tshirt9" style="width:300px;height:300px"class="zoom";><h3><center>Event 9</center></h3>
		</a>
		</td>
	</tr>
	</table></center>

<div id="contact" class="contact"><!--contacting options-->
	<p ><u><center>Contact Us</center></u></p>
	<p><center>tshirts@nsbm.com</center></p>
	<p><center>011-1231235</center></p>
</div>


</body>
</html>
