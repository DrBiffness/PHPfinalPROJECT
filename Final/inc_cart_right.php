<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	
<div class="right">

<br/>
<br/>
<br/>
<br/>
<br/>

  <div class="col-25">
	  
    <div class="container">
      <h4>Cart 
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
          <b>4</b>
        </span>
      </h4>
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
	
	<br/>
	
	<input type="submit" value="Proceed to Checkout" class="btn" onClick="openCheckout()">
	
  </div>


</div>
	
<script>
  function openCheckout() {
  var myWindow = window.open("checkout.php", "_parent", "");
}
</script>
	
</body>
</html>