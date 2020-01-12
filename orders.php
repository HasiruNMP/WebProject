<html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
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
            echo "Connected successfully";
        ?>

        <form method="get" action="#">
        <table border='1'>
            <tr>
                <td colspan=2>View Order Count</td>
            </tr>
            <tr>
                <td>Product ID</td>
                <td><input type="text" name="productid"></td>   
            </tr>
            <tr>
                <td colspan='2'><input type="submit" name="Submit" value="Get colors"></td>
            </tr>
        </form>
        <form method="post" action="#">
            
            <tr>
                <td>Color</td>
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
                            <option value=\" ".$row["Color1"]." \" style=\"background-color: ".$row["Color1"].";\";>'".$row["Color1"]."'</option>
                            <option value=\" ".$row["Color2"]." \" style=\"background-color: ".$row["Color2"].";\";>'".$row["Color2"]."'</option>
                            <option value=\" ".$row["Color3"]." \" style=\"background-color: ".$row["Color3"].";\";>'".$row["Color3"]."'</option>
                            <option value=\" ".$row["Color4"]." \" style=\"background-color: ".$row["Color4"].";\";>'".$row["Color4"]."'</option>
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
                <td>Gender</td>
                <td><input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female</td>
            </tr>
            <tr>
                <td>Size</td>
                <td><input type="radio" name="size" value="S">S   
                    <input type="radio" name="size" value="M">M
                    <input type="radio" name="size" value="L">L
                    <input type="radio" name="size" value="XL">XL
                    <input type="radio" name="size" value="XXL">XXL</td>
            </tr>
            <tr>
                <td colspan=2><input type="submit" name="submit" value="View Order Count"></td>
                </form>
            </tr>
            <tr>
                <td colspan=2>

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


                    $sql="SELECT * FROM 'orders' WHERE 'ProdID' = $pid AND 'Color' = $color AND 'Gender' = $gender AND 'Size' = $size;";

                   // $sql="SELECT , $color, $gender, $size FROM orders;";

                    if ($result=mysqli_query($con,$sql))
                    {
                    // Return the number of rows in result set
                    $rowcount=mysqli_num_rows($result);
                    echo $rowcount;
                    printf("Result set has %d rows.\n",$rowcount);
                    // Free result set
                    mysqli_free_result($result);
                    }

                    mysqli_close($con);
                ?>







                </td>  
            </tr>



            </table>
                
            











    </body>
</html>