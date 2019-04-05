<!DOCTYPE html>
<html>
<head>
	
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="stylesheet.css" rel="stylesheet" type="text/css">
	
</head>
	
	
<body>

<?php
	include("inc_header_home.php");
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
	
	<p>
		This is the home page!	
	</p>
  
  <?php
    include("inc_data.php");
  ?>
	</div>

</div>
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