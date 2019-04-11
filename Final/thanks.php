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
											&nbsp&nbsp$fname
										</td>
									</tr>
									
									<tr>
										<td>
											Card Number:
										</td>
										<td>				&nbsp&nbsp" .str_pad(substr(substr($ccnum,-16),-4),16,'*',STR_PAD_LEFT). "
										</td>
									</tr>
									
									
							</table>";						
					
			?>
	
</div>

	

</div>
	



</body>
</html>