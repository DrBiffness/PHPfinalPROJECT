<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 60%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 20px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {	
  
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}

.wide {
		width: 100%;
		margin: 0 auto;
		}

.left {
		width: 30%;
		float: left;		
		}

.center {
		width: 60%;
		float: left;		
		}

</style>
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
    echo "Poop";
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