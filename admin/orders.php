<?php
session_start();
if ( isset( $_SESSION['adminpw'] ) ) 
{}
else 
{
	//$_SESSION['current_page2'] = $_SERVER['REQUEST_URI'];
	header("Location: adminlogin.php");
	exit;
}
?>


<html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Check orders </title>
    <link rel="shortcut icon" type="image/x-icon" href="../images/logo1.png" />
    
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
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
        <td><button class="button" style="vertical-align:middle" onclick="window.location.href='adminpage.php'"><span>Back</span></button></td>
        <td><button class="button clearfix" style="vertical-align:middle" onclick="window.location.href = 'adminlogout.php'"><span>Log Out</span></button></td>
        <td><button class="button" style="vertical-align:middle" onclick="window.location.href='#contact'"><span>Contact Us</span></button></td>
      </tr>
    </table>
</div>
    <hr>

	<br>
	<br>





        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <script src="" async defer></script>
        
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "nsbmtshirts";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            //echo "Connected successfully";
        ?>
        <div>
        <form method="get" action="#">
        <table border='1' id="countorders" align="center">
            <tr>
                <th colspan=2>View Order Count</th>
            </tr>
            <tr>
                <th>Product ID</th>
                <td><input type="text" name="productid"></td>   
            </tr>
            <tr>
                <td colspan='2'><input class="button3" type="submit" name="Submit" value="Get colors"></td>
            </tr>
        </form>
        <form method="post" action="#">
            
            <tr>
                <th>Color</th>
                <td>
                    <?php
                    error_reporting(0);
                    $conn = mysqli_connect("localhost", "root", "", "nsbmtshirts");
                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }

                    $productid = $_GET['productid'];
                    //echo $productid;

                    $sql = "SELECT `Color1`, `Color2`, `Color3`, `Color4` FROM `tshirts` WHERE `prodID` = '$productid';";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                
                    echo"<select name=\"color\">
                            <option value=\"null\">Choose Color</option>
                            <option value=\"".$row["Color1"]."\" style=\"background-color: ".$row["Color1"].";\";>'".$row["Color1"]."'</option>
                            <option value=\"".$row["Color2"]."\" style=\"background-color: ".$row["Color2"].";\";>'".$row["Color2"]."'</option>
                            <option value=\"".$row["Color3"]."\" style=\"background-color: ".$row["Color3"].";\";>'".$row["Color3"]."'</option>
                            <option value=\"".$row["Color4"]."\" style=\"background-color: ".$row["Color4"].";\";>'".$row["Color4"]."'</option>
                        </select>";

                        }
                    } else { echo "0 results"; }
                   $conn->close();

                    //echo "<tr><td>" . $row["Color3"]. "</td><td>" . $row["Color1"] . "</td><td>"
                    //. $row["Color2"]. "</td></tr>";
                    
                    ?>
                </td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><input type="radio" name="gender" value="Male"> Male
                    <input type="radio" name="gender" value="Female"> Female</td>
            </tr>
            <tr>
                <th>Size</th>
                <td><input type="radio" name="size" value="S">S   
                    <input type="radio" name="size" value="M">M
                    <input type="radio" name="size" value="L">L
                    <input type="radio" name="size" value="XL">XL
                    <input type="radio" name="size" value="XXL">XXL</td>
            </tr>
            <tr>
                <td colspan=2><input class="button3" type="submit" name="submit" value="View Order Count"></td>
                </form>
            </tr>
            <tr>
                <th colspan=2>

                <?php
                    $con=mysqli_connect("localhost","root","","nsbmtshirts");
                    // Check connection
                    if (mysqli_connect_errno())
                    {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }

                    $pid = $_REQUEST['productid'];
                    $color = $_REQUEST['color'];
                    $gender = $_REQUEST['gender'];
                    $size = $_REQUEST['size'];


                    $sql="SELECT * FROM `orders` WHERE `ProductID`='$pid' AND `Color`='$color' AND `Size`='$size' AND `Gender`='$gender';";

                   // $sql="SELECT , $color, $gender, $size FROM orders;";

                    if ($result=mysqli_query($con,$sql))
                    {
                    // Return the number of rows in result set
                    $rowcount=mysqli_num_rows($result);

                    printf(" %d Orders.\n",$rowcount);
                    // Free result set
                    mysqli_free_result($result);
                    }

                    mysqli_close($con);
                ?>







                </th>  
            </tr>



            </table>
        </form>
    </div>

<br>
<div id="contact" class="contact"><!--contacting options-->
    <p ><u><center>Contact Us</center></u></p>
    <p><center>tshirts@nsbm.com</center></p>
    <p><center>011-1231235</center></p>
</div>
        


    </body>
</html>
