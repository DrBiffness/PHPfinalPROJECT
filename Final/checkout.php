
<?php
session_start();
include ("inc_data.php");
$disCart = $_SESSION['cart'];
if (isset($_POST['submit']))
{
		
	function test_input($data) 
	{
  	$data = trim($data);
  	$data = stripslashes($data);
  	$data = htmlspecialchars($data);
  	return $data;
	}

	//define variables and set to empty variable
	$fnameErr = $emailErr = $addressErr = $cityErr = $stateErr = $zipErr = "";
		
	$cnameErr = $ccnumErr = $expmonthErr = $expyearErr = $cvvErr = "";
		
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
  	if (empty($_POST["fname"])) 
	{
    $fnameErr = "is required";
  	} 
	else 
	{
    $fname = test_input($_POST["fname"]);
  	}
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	if (empty($_POST["email"])) 
	{
    $emailErr = "is required";
  	} 
	else 
	{
    $email = test_input($_POST["email"]);
	}
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{	
	if (empty($_POST["address"])) 
	{
    $addressErr = "is required";
  	} 
	else 
	{
    $address = test_input($_POST["address"]);
  	}
	}
		
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	if (empty($_POST["city"])) 
	{
    $cityErr = "is required";
  	} 
	else 
	{
    $city = test_input($_POST["city"]);
  	}
	}
		
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	if (empty($_POST["zip"])) 
	{
    $zipErr = "is required";
  	} 
	else 
	{
    $zip = test_input($_POST["zip"]);
  	}
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	if (empty($_POST["state"])) 
	{
    $stateErr = "is required";
  	} 
	else 
	{
    $state = test_input($_POST["state"]);
  	}
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	if (empty($_POST["cname"])) 
	{
    $cnameErr = "is required";
  	} 
	else 
	{
    $cname = test_input($_POST["cname"]);
  	}
	}
		
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	if (empty($_POST["ccnum"])) 
	{
    $ccnumErr = "is required";
  	} 
	else 
	{
    $ccnum = test_input($_POST["ccnum"]);
  	}
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	if (empty($_POST["expmonth"])) 
	{
    $expmonthErr = "is required";
  	} 
	else 
	{
    $expmonth = test_input($_POST["expmonth"]);
  	}
	}
		
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	if (empty($_POST["expyear"])) 
	{
    $expyearErr = "is required";
  	} 
	else 
	{
    $expyear = test_input($_POST["expyear"]);
  	}
	}
		
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	if (empty($_POST["cvv"])) 
	{
    $cvvErr = "is required";
  	} 
	else 
	{
    $cvv = test_input($_POST["cvv"]);
  	}
	}
	
	$error = $fnameErr . $emailErr . $addressErr . $cityErr . $stateErr . $zipErr . $cnameErr . $ccnumErr . $expmonthErr . $expyearErr . $cvvErr;
		
	if (strlen ($error) == 0)
	{	
		$paystring = "INSERT INTO PAYMENT (fullname, email, address, city, state, zip, cname, ccnum, expmonth, expyear, cvv)
VALUES ('$_POST[fname]', '$_POST[email]', '$_POST[address]', '$_POST[city]', '$_POST[state]', '$_POST[zip]', '$_POST[cname]', '$_POST[ccnum]', '$_POST[expmonth]', '$_POST[expyear]', '$_POST[cvv]')";

	$dbConnect = mysqli_connect('127.0.0.1','root','newpwd','MF_TECHNOLOGY');
	
	if ($dbConnect->connect_error) {
die("Connection failed: " . $dbConnect->connect_error);
}
echo "Connected successfully";

	if ($dbConnect->query($paystring) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $paystring . "<br>" . $dbConnect->error;
}$dbConnect->close();

	header("Location: thanks.php");
		
	}
	else{
		
	?>

<!DOCTYPE html>
<html>
<head>
	
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="stylesheet.css" rel="stylesheet" type="text/css">
	
</head>
	
	
<body>

<?php
	include("inc_header_checkout.php");
?>

<div class="wide">

<div class="left">

	<br/>
	
<table>
            <tr>
                <td>
                    Filter Results
                </td>
                
            </tr>


            <tr>
                <td>
                    Price
                </td>
                
            </tr>
</table>

</div>



<div class="center">

	<br/>
	
	<h2 align="center">Checkout Form</h2>
	
	<p><span class="error">* required field</span></p>
		
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="" method="post">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name <span class="error"><?php echo $fnameErr;?></span></label> 
            <input type="text" id="fname" name="fname" placeholder="John M. Doe">
			  <span class="error">* </span>
			  
            <label for="email"><i class="fa fa-envelope"></i> Email <span class="error"><?php echo $emailErr;?></span></label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
			  <span class="error">* </span>
			  
            <label for="adr"><i class="fa fa-address-card-o"></i> Address <span class="error"><?php echo $addressErr;?></span></label>
            <input type="text" id="adress" name="address" placeholder="542 W. 15th Street">
			  <span class="error">* </span>
			  
            <label for="city"><i class="fa fa-institution"></i> City <span class="error"><?php echo $cityErr;?></span></label>
            <input type="text" id="city" name="city" placeholder="Lancaster">
			  <span class="error">*</span>

            <div class="row">
              <div class="col-50">
                <label for="state">State <span class="error"><?php echo $stateErr;?></span></label>
                <input type="text" id="state" name="state" placeholder="PA">
				  <span class="error">*</span>
              </div>
				
              <div class="col-50">
                <label for="zip">Zip <span class="error"> <?php echo $zipErr;?></span></label>
                <input type="text" id="zip" name="zip" placeholder="17602">
				  <span class="error">* </span>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
			  
            <label for="cname">Name on Card <span class="error"><?php echo $cnameErr;?></span>
</label>
            <input type="text" id="cname" name="cname" placeholder="John More Doe">
			  <span class="error">* </span>
			  
            <label for="ccnum">Credit card number <span class="error"><?php echo $ccnumErr;?></span></label>
            <input type="text" id="ccnum" name="ccnum" placeholder="1111-2222-3333-4444">
			  <span class="error">* </span>
			  
            <label for="expmonth">Exp Month <span class="error"><?php echo $expmonthErr;?></span></label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
			  <span class="error">* </span>
			  
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year <span class="error"><?php echo $expyearErr;?></span></label>
                <input type="text" id="expyear" name="expyear" placeholder="2019">
				  <span class="error">* </span>
              </div>
				
              <div class="col-50">
                <label for="cvv">CVV <span class="error"> <?php echo $cvvErr;?></span></label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
				  <span class="error">* </span>
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" name="submit" value="Submit Order" class="btn">
      </form>
    </div>
  </div>
	
</div>
</div>
	
	<?php
		include("inc_cart_right.php");
	?>


</div>

</body>
</html>

<?php
	}
}
	else
	{
		
	//define variables and set to empty variable
	$fnameErr = $emailErr = $addressErr = $cityErr = $stateErr = $zipErr = "";
		
	$cnameErr = $ccnumErr = $expmonthErr = $expyearErr = $cvvErr = "";
		
?>

<!DOCTYPE html>
<html>
<head>
	
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="stylesheet.css" rel="stylesheet" type="text/css">
	
</head>
	
	
<body>

<?php
	include("inc_header_checkout.php");
?>

<div class="wide">

<div class="left">

	<br/>
	
<table>
            <tr>
                <td>
                    Filter Results
                </td>
                
            </tr>


            <tr>
                <td>
                    Price
                </td>
                
            </tr>
</table>

</div>



<div class="center">

	<br/>
	
	<h2 align="center">Checkout Form</h2>
	
	<p><span class="error">* required field</span></p>
		
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="" method="post">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="fname" placeholder="John M. Doe">
			  <span class="error">* <?php echo $fnameErr; ?> </span>
			  
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
			  <span class="error">* <?php echo $emailErr;?></span>
			  
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
			  <span class="error">* <?php echo $addressErr;?></span>
			  
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">
			  <span class="error">* <?php echo $cityErr;?></span>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
				  <span class="error">* <?php echo $stateErr;?></span>
              </div>
				
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
				  <span class="error">* <?php echo $zipErr;?></span>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
			  
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cname" placeholder="John More Doe">
			  <span class="error">* <?php echo $cnameErr;?></span>
			  
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="ccnum" placeholder="1111-2222-3333-4444">
			  <span class="error">* <?php echo $ccnumErr;?></span>
			  
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
			  <span class="error">* <?php echo $expmonthErr;?></span>
			  
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
				  <span class="error">* <?php echo $expyearErr;?></span>
              </div>
				
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">

				  <span class="error">* <?php echo $cvvErr;?></span>
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" name="submit" value="Submit Order" class="btn">
      </form>
    </div>
  </div>
	
</div>
</div>
	
	<?php
		include("inc_cart_right.php");
	?>


</div>

</body>
</html>

<?php
		
}
?>