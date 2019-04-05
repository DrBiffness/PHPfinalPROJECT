<!DOCTYPE html>
<html>
<head>
	
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="stylesheet.css" rel="stylesheet" type="text/css">
	
</head>
	
	
<body>

<?php
  include("inc_header_custom_pc.php");
  include("inc_data.php");
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
	
	<h2 align="center">Begin your build from the list below</h2>
	
<button type="button" class="accordion">Case</button>
<div class="panel">
  <p>This is information on all the different types of cases that are offered by J&M Electronics</p>
  <div class="wrapper">
  
  <?php
    
    while ($row = mysqli_fetch_assoc($caseResult)){
      //printf(stripslashes($row["NAME"]));
      //echo "<br>";
      
      echo "<div><img src='" . $row["PIC1"] . "' alt='" . $row["NAME"]
      . " Pic'" . " /><br>";
      echo "<h5>" . $row["NAME"] . "</h5>";
      echo "<p>Price:&nbsp;&nbsp;&nbsp;$" . $row["PRICE"] . "</p>";
      echo "<button class='btnAdd' type='button' name='test' value='add to cart'>Add to Cart</button>"; 
      echo "</div>"; 
    } 
  ?>
  </div>
</div>

<button type="button" class="accordion">Processor</button>
<div class="panel">
  <p>This is a list of information on all the "top of the line" processors that are offered by J&M Electronics</p>
  <p>AMD or Intel....pick your poison.</p>
    <div class="wrapper">
  <?php
    
    while ($row = mysqli_fetch_assoc($cpuResult)){
      //printf(stripslashes($row["NAME"]));
      //echo "<br>";
      
      echo "<div><img src='" . $row["PIC1"] . "' alt='" . $row["CPU"]
      . " Pic'" . " /><br>";
      echo "<h5>" . $row["CPU"] . "</h5>";
      echo "<p>Price:&nbsp;&nbsp;&nbsp;$" . $row["PRICE"] . "</p>";
      echo "<button class='btnAdd' type='button' value='add to cart'>Add to Cart</button>"; 
      echo "</div>"; 
    } 
  ?>
  </div>
</div>

<button type="button" class="accordion">Motherboard</button>
<div class="panel">
  <p>This is information on all Motherboards that will fit with your prior selections.</p>

  <div class="wrapper">
  <?php
    
    while ($row = mysqli_fetch_assoc($moboResult)){
      //printf(stripslashes($row["NAME"]));
      //echo "<br>";
      
      echo "<div><img src='" . $row["PIC1"] . "' alt='" . $row["MOBO"]
      . " Pic'" . " /><br>";
      echo "<h5>" . $row["MOBO"] . "</h5>";
      echo "<p>Price:&nbsp;&nbsp;&nbsp;$" . $row["PRICE"] . "</p>";
      echo "<button class='btnAdd' type='button' value='add to cart'>Add to Cart</button>"; 
      echo "</div>"; 
    } 
  ?>
  </div>
</div>

<button type="button" class="accordion">Memory</button>
<div class="panel">
  <p>Choose your memory.....don't skimp!</p>
  <div class="wrapper">
  <?php
    
    while ($row = mysqli_fetch_assoc($ramResult)){
      //printf(stripslashes($row["NAME"]));
      //echo "<br>";
      
      echo "<div><img src='" . $row["PIC1"] . "' alt='" . $row["NAME"]
      . " Pic'" . " /><br>";
      echo "<h5>" . $row["NAME"] . "</h5>";
      echo "<p>Price:&nbsp;&nbsp;&nbsp;$" . $row["PRICE"] . "</p>";
      echo "<button class='btnAdd' type='button' value='add to cart'>Add to Cart</button>"; 
      echo "</div>"; 
    } 
  ?>
  </div>
</div>

<button type="button" class="accordion">Processor Cooling</button>
<div class="panel">
  <p>Don't be a fool...keep your s*** cool!</p>

  <div class="wrapper">
  <?php
    
    while ($row = mysqli_fetch_assoc($coolResult)){
      //printf(stripslashes($row["NAME"]));
      //echo "<br>";
      
      echo "<div><img src='" . $row["PIC1"] . "' alt='" . $row["NAME"]
      . " Pic'" . " /><br>";
      echo "<h5>" . $row["NAME"] . "</h5>";
      echo "<p>Price:&nbsp;&nbsp;&nbsp;$" . $row["PRICE"] . "</p>";
      echo "<button class='btnAdd' type='button' name='Test' value='add to cart'>Add to Cart</button>"; 
      echo "</div>"; 
    } 
  ?>
  </div>
</div>

<button type="button" class="accordion">Storage</button>
<div class="panel">
  <p>How many gigs of storage do you need?</p>
  <h4>M.2 Drives</h4>

  <div class="wrapper">
  <?php
    
    while ($row = mysqli_fetch_assoc($m2Result)){
      //printf(stripslashes($row["NAME"]));
      //echo "<br>";
      
      echo "<div><img src='" . $row["PIC1"] . "' alt='" . $row["NAME"]
      . " Pic'" . " /><br>";
      echo "<h5>" . $row["NAME"] . "</h5>";
      echo "<p>Price:&nbsp;&nbsp;&nbsp;$" . $row["PRICE"] . "</p>";
      echo "<button class='btnAdd' type='button' value='add to cart'>Add to Cart</button>"; 
      echo "</div>"; 
    } 
  ?>
  </div>

  <h4>SATA III Drives</h4>

  <div class="wrapper">
  <?php
    
    while ($row = mysqli_fetch_assoc($sataResult)){
      //printf(stripslashes($row["NAME"]));
      //echo "<br>";
      
      echo "<div><img src='" . $row["PIC1"] . "' alt='" . $row["NAME"]
      . " Pic'" . " /><br>";
      echo "<h5>" . $row["NAME"] . "</h5>";
      echo "<p>Price:&nbsp;&nbsp;&nbsp;$" . $row["PRICE"] . "</p>";
      echo "<button class='btnAdd' type='button' value='add to cart'>Add to Cart</button>"; 
      echo "</div>"; 
    } 
  ?>
  </div>
</div>

<button type="button" class="accordion">Video Card</button>
<div class="panel">
  <p>This is what sets apart the men from the boys</p>

  <div class="wrapper">
  <?php
    
    while ($row = mysqli_fetch_assoc($gpuResult)){
      //printf(stripslashes($row["NAME"]));
      //echo "<br>";
      
      echo "<div><img src='" . $row["PIC1"] . "' alt='" . $row["NAME"]
      . " Pic'" . " /><br>";
      echo "<h5>" . $row["NAME"] . "</h5>";
      echo "<p>Price:&nbsp;&nbsp;&nbsp;$" . $row["PRICE"] . "</p>";
      echo "<button class='btnAdd' type='button' value='add to cart'>Add to Cart</button>"; 
      echo "</div>"; 
    } 
  ?>
  </div>
</div>

<button type="button" class="accordion">Power Supply</button>
<div class="panel">
  <p>Gotta have tha POWAAAAA!</p>

  <div class="wrapper">
  <?php
    
    while ($row = mysqli_fetch_assoc($psuResult)){
      //printf(stripslashes($row["NAME"]));
      //echo "<br>";
      
      echo "<div><img src='" . $row["PIC1"] . "' alt='" . $row["NAME"]
      . " Pic'" . " /><br>";
      echo "<h5>" . $row["NAME"] . "</h5>";
      echo "<p>Price:&nbsp;&nbsp;&nbsp;$" . $row["PRICE"] . "</p>";
      echo "<button class='btnAdd' type='button' value='add to cart'>Add to Cart</button>"; 
      echo "</div>"; 
    } 
  ?>
  </div>
</div>

</div>
	
	<?php
		include("inc_cart_right.php");
	?>
	
</div>
	</form>
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