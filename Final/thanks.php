<?php
session_start();

$dbConnect = mysqli_connect('127.0.0.1','root','newpwd','MF_TECHNOLOGY');
$orderString = 'select PAYID from payment WHERE UPPER(FULLNAME) LIKE UPPER(\''.$_SESSION['fname'].'\')';
$orderResult = mysqli_query($dbConnect,$orderString);
$payid = mysqli_fetch_assoc($orderResult);
//print_r($_SESSION['fname']);
//print_r($orderResult);
//echo $payid["PAYID"];
$orderString2 = 'INSERT INTO ORDERS(PAYID,TOTAL) VALUES('.$payid["PAYID"].','.($_SESSION['total'] * 1.06).')';
$orderResult2 = mysqli_query($dbConnect,$orderString2);
if (! empty($orderResult2)) {
	//echo "Hooray";
	session_destroy();
}
//echo "poop";  
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
	include("inc_header_support.php");
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
	
	<h2 align="center">Order Details</h2>
	<h3 align="center">	Thank you for your order</h3>
	
	<?php
					extract($_REQUEST);
				
						echo "<table align='center'>
									<tr>
										<td>
											Name:
										</td>										
										<td>
											&nbsp&nbsp".$_SESSION['fname']."
										</td>
									</tr>
									
									<tr>
										<td>
											Card Number:
										</td>
										<td>				&nbsp&nbsp".str_pad(substr(substr($_SESSION['ccnum'],-16),-4),16,'*',STR_PAD_LEFT). "
										</td>
									</tr>
									
									<tr>
										<td>
											Total:
										</td>										
										<td>
											&nbsp&nbsp$".number_format(($_SESSION['total'] * 1.06),2)."
										</td>
									</tr>

									
							</table>";						
					
			?>
	
</div>

	

</div>
	



</body>
</html>