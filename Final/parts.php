<!DOCTYPE html>
<html>
<head>
	
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="stylesheet.css" rel="stylesheet" type="text/css">
	
</head>
	
	
<body>

<?php
	include("inc_header_parts.php");
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
	
	<h2 align="center">Choose your parts from the list below</h2>
	
<button class="accordion">Case</button>
<div class="panel">
  <p>This is information on all the different types of cases that are offered by J&M Electronics</p>
</div>

<button class="accordion">Processor</button>
<div class="panel">
  <p>This is a list of information on all the "top of the line" processors that are offered by J&M Electronics</p>
  <p>AMD or Intel....pick your poison.</p>
</div>

<button class="accordion">Motherboard</button>
<div class="panel">
  <p>This is information on all Motherboards that will fit with your prior selections.</p>
</div>

<button class="accordion">Memory</button>
<div class="panel">
  <p>Choose your memory.....don't skimp!</p>
</div>

<button class="accordion">Processor Cooling</button>
<div class="panel">
  <p>Don't be a fool...keep your s*** cool!</p>
</div>

<button class="accordion">Storage</button>
<div class="panel">
  <p>How many gigs of storage do you need?</p>
</div>

<button class="accordion">Video Card</button>
<div class="panel">
  <p>This is what sets apart the men from the boys</p>
</div>

<button class="accordion">Power Supply</button>
<div class="panel">
  <p></p>
</div>

</div>
</div>
	
	<?php
		include("inc_cart_right.php");
	?>
	
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