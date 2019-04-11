<?php
session_start();
extract($_REQUEST);

//var_dump($cart);
//echo $clear;
if (isset($clear) and ($clear == 'clear')) {
	$_SESSION['cart'] = array();
	$_SESSION['items'] = 0;
	$_SESSION['total'] = 0.00;
}
$cart = @($_SESSION['cart']);
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
<form action="support.php" method="get">
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
	
	<h2 align="center">Shopping Cart</h2>
	<h3 align="center">	Review your order</h3>
	
	  <div class="container1">
      <h4>Cart 
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
          <b><?php echo $_SESSION['items'] ;?></b>
        </span>
      </h4>
      <?php 
		if (! empty($cart)){
			$i = 0;
			$price;
			$total = 0.00;
			//$item = 0;
			while (! $cart[$i] === FALSE) {
		echo "<p><img src='$cart[$i]' alt='pic' /></p>";
				$i++;
				//$_SESSION['order']
		echo "<p><b>$cart[$i]</b>";
				$i++;
				$i++;
		echo "<input type='text' value='$cart[$i]' />";
		$i--;
				$price[] = @($cart[$i] *= $cart[$i+1]);
		echo "<span class='price'>$".end($price)."</span></p>";
				$i++;$i++;
				
 		}}
		else {
			echo "<h4>Your cart is empty!</h4>";
			$total = 0.00;
		};
		foreach ($price as $p) {
			$total += $p;
		}
		$_SESSION['total'] = number_format($total,2);
		?>
      
      <hr>
      <p>Total <span class="price" style="color:black"><b>$<?php echo $_SESSION['total'] ?></b></span></p>
    
	  
		  <p><button class="btnAdd" name="clear" value="clear">Clear Cart</button></p>
		  
	  </div>
	<br/>
	<?php
	if (! empty($cart)) {
	?>
	<input type="button" value="Proceed to Checkout" class="btn" onClick="openCheckout()">
	<?php
	};
	?>
	</form>
</div>

	<?php
		//include("inc_cart_right.php");
	?>

</div>
	
<script>
  function openCheckout() {
  var myWindow = window.open("checkout.php", "_parent", "");
}
</script>
	
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>


</body>
</html>