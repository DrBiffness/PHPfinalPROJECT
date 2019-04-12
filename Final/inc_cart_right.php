<?php
//echo $_SERVER['PHP_SELF'];

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body id="demo">
	

<div id="loadright" class="right">
<?php
//extract($_REQUEST);
//$_SESSION['case'] = $case;
	$disCart = $_SESSION['newCart'];
	//$disCart1 = array_chunk($disCart,4);
	//var_dump($disCart1);
	//$_SESSION['items'] = sizeof($disCart) / 3;
?>
<br/>
<br/>
<br/>
<br/>
<br/>

  <div class="col-25">
	  
    <div class="container1">
      <h4>Cart 
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
          <b><?php echo $_SESSION['items'] ;?></b>
        </span>
      </h4>
      <?php 
		if (! empty($disCart)){
			$i = 0;
			$price;
			$total = 0.00;
			//$item = 0;
			while (! $disCart[$i] === FALSE) {
		echo "<p><img src='$disCart[$i]' alt='pic' /></p>";
				$i++;
		echo "<p><b>$disCart[$i]</b>";
				$i++;
				$i++;
		echo "<input type='text' id='quantity' name='quantity' value='$disCart[$i]' />";
		$i--;
				$price[] = ($disCart[$i] *= $disCart[$i+1]);
		echo "<span class='price'>$".number_format((end($price)),2)."</span></p>";
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
    
	  <?php
			if ($_SERVER['PHP_SELF'] == '/final/checkout.php'){
			
		}
	  else {
		echo "<p><button class='btnAdd' name='clear' value='clear'>Clear Cart</button></p>";
		?>
	  </div>
	
	<br/>
	
	<input type="button" value="Proceed to Checkout" class="btn" onClick="openCheckout()">
	<?php
	 };
	  ?>
  </div>


</div>
	
<script>
  function openCheckout() {
  var myWindow = window.open("support.php", "_parent", "");
}
</script>
	
	
</body>
</html>