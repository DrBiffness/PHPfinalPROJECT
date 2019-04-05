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
  width: 100%;
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
		width: 20%;
		float: left;		
		}

.center {
		width: 60%;
		float: left;		
		}

.wrapper {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-auto-rows: 300px;
}

.wrapper {
  border: 2px solid #f76707;
  border-radius: 5px;
  background-color: #fff4e6;
}

.wrapper > div {
  border: 2px solid #ffa94d;
  border-radius: 1px;
  background-color: #ffd8a8;
  padding: 1em;
  color: #d9480f;
  text-align: center;
}

.wrapper > div > img{
  width: 100px;
  height: 100px;
  display: block;
  margin: auto;
}
</style>
</head>
<body>

<?php
  include("inc_header_custom_pc.php");
  include("inc_data.php");
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
	
	<h2 align="center">Begin your build from the list below</h2>
	
<button class="accordion">Case</button>
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
      echo "<button type='submit' value='add to cart'>Add to Cart</button>"; 
      echo "</div>"; 
    } 
  ?>
  </div>
</div>

<button class="accordion">Processor</button>
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
      echo "<button type='submit' value='add to cart'>Add to Cart</button>"; 
      echo "</div>"; 
    } 
  ?>
  </div>
</div>

<button class="accordion">Motherboard</button>
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
      echo "<button type='submit' value='add to cart'>Add to Cart</button>"; 
      echo "</div>"; 
    } 
  ?>
  </div>
</div>

<button class="accordion">Memory</button>
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
      echo "<button type='submit' value='add to cart'>Add to Cart</button>"; 
      echo "</div>"; 
    } 
  ?>
  </div>
</div>

<button class="accordion">Processor Cooling</button>
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
      echo "<button type='submit' value='add to cart'>Add to Cart</button>"; 
      echo "</div>"; 
    } 
  ?>
  </div>
</div>

<button class="accordion">Storage</button>
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
      echo "<button type='submit' value='add to cart'>Add to Cart</button>"; 
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
      echo "<button type='submit' value='add to cart'>Add to Cart</button>"; 
      echo "</div>"; 
    } 
  ?>
  </div>
</div>

<button class="accordion">Video Card</button>
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
      echo "<button type='submit' value='add to cart'>Add to Cart</button>"; 
      echo "</div>"; 
    } 
  ?>
  </div>
</div>

<button class="accordion">Power Supply</button>
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
      echo "<button type='submit' value='add to cart'>Add to Cart</button>"; 
      echo "</div>"; 
    } 
  ?>
  </div>
</div>

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