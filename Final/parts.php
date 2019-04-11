<?php
session_start();
extract($_REQUEST);
$qty1 = array_diff($qty,[1]);
$qty2 = array_values($qty1);
//var_dump($qty2);
if (isset($clear) and ($clear == 'clear')) {
	$_SESSION['cart'] = array();
	$_SESSION['items'] = 0;
	$_SESSION['total'] = 0.00;
}


if  ((isset($_SESSION['hit'])) and ($_SESSION['hit'] > 0)) {
$_SESSION['hit']++;
//echo $selCase;
//echo $_SESSION['hit'];

	if (! empty($cart)) {
		$selCase = explode(';',$cart);
		if (!empty($qty1)){
		$selCase = array_merge($selCase,$qty1);
		$_SESSION['items'] += $qty2[0];
		}
		else{
			$selCase[] = 1;
			$_SESSION['items']++;
		}
	}
	if ( (empty($_SESSION['cart'])) and ($_SESSION['hit'] > 1)){
		$_SESSION['cart'] = $selCase;
		$selCase = array();
		//var_dump($_SESSION['cart']);
	}
	else {
		if (! empty($selCase)){
			$_SESSION['cart'] = array_merge($_SESSION['cart'],$selCase);
			$selCase = array();
			if (! empty($qty1)){
				//$_SESSION['cart'] = array_merge($_SESSION['cart'],$qty1);
			}
			else{
				//$_SESSION['cart'][] = 1;
			}
			//var_dump($_SESSION['cart']);
		}
		else {
			//session_destroy();
		}
	}
}
else {
	$_SESSION['cart'] = array();
	$_SESSION['hit']++;
};
//session_destroy();
//var_dump($_SESSION['cart']);
$qty = array(1,2,3,4,5,6,7,8,9,10);
?>
<script type="text/javascript" src="jquery.js"></script>

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
	include_once("inc_data.php");
?>
<form action="parts.php" method="get">
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
	
<button type="button" class="accordion">Case</button>
<div class="panel">
  <p>This is information on all the different types of cases that are offered by J&M Electronics</p>
  <div class="wrapper">
  
  <?php
    
    while ($row = mysqli_fetch_assoc($caseResult)){
      //printf(stripslashes($row["NAME"]));
      //echo "<br>";
		//$a = 0;
		//$name["$a"] = $row["NAME"];
		//$pic1["$a"] = $row["PIC1"];
		//$price["$a"] = $row["PRICE"];
		
      
      echo "<div><img src='" .  $row["PIC1"] . "' alt='" . $row["NAME"]
      . " Pic'" . " /><br>";
      echo "<h5>" . $row["NAME"] . "</h5>";
      echo "<p>Price:&nbsp;&nbsp;&nbsp;$" . $row["PRICE"] . "</p>";
	  echo "<select name='qty[]'>";
	  foreach ($qty as $q) {
		  echo "<option value='$q'>$q</option>";
	  }
	  echo "</select>";
      echo "<button class='btnAdd' type='submit' name='cart' value=" . '"' . $row["PIC1"] . ";" . $row["NAME"] . ";" .$row["PRICE"] . '"'  . ">Add to Cart</button>"; 
      echo "</div>"; 
		//$i++;
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
    echo "<select name='qty[]'>";
		foreach ($qty as $q) {
		  echo "<option value='$q'>$q</option>";
	  }
	  echo "</select>";  
	echo "<button class='btnAdd' name='cart' value=" . '"' . $row["PIC1"] . ";" . $row["CPU"] . ";" .$row["PRICE"] . '"'  . ">Add to Cart</button>"; 
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
      echo "<select name='qty[]'>";
		foreach ($qty as $q) {
		  echo "<option value='$q'>$q</option>";
	  }
	  echo "</select>";
		echo "<button class='btnAdd' name='cart' value=" . '"' . $row["PIC1"] . ";" . $row["MOBO"] . ";" .$row["PRICE"] . '"'  . ">Add to Cart</button>"; 
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
      echo "<select name='qty[]'>";
		foreach ($qty as $q) {
		  echo "<option value='$q'>$q</option>";
	  }
	  echo "</select>";
		echo "<button class='btnAdd' name='cart' value=" . '"' . $row["PIC1"] . ";" . $row["NAME"] . ";" .$row["PRICE"] . '"'  . ">Add to Cart</button>"; 
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
      echo "<select name='qty[]'>";
		foreach ($qty as $q) {
		  echo "<option value='$q'>$q</option>";
	  }
	  echo "</select>";
		echo "<button class='btnAdd' name='cart' value=" . '"' . $row["PIC1"] . ";" . $row["NAME"] . ";" .$row["PRICE"] . '"'  . ">Add to Cart</button>"; 
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
      echo "<select name='qty[]'>";
		foreach ($qty as $q) {
		  echo "<option value='$q'>$q</option>";
	  }
	  echo "</select>";
		echo "<button class='btnAdd' name='cart' value=" . '"' . $row["PIC1"] . ";" . $row["NAME"] . ";" .$row["PRICE"] . '"'  . ">Add to Cart</button>"; 
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
      echo "<select name='qty[]'>";
		foreach ($qty as $q) {
		  echo "<option value='$q'>$q</option>";
	  }
	  echo "</select>";
		echo "<button class='btnAdd' name='cart' value=" . '"' . $row["PIC1"] . ";" . $row["NAME"] . ";" .$row["PRICE"] . '"'  . ">Add to Cart</button>"; 
      echo "</div>"; 
    } 
  ?>
  </div>
</div>

<button type="button" class="accordion">Video Card</button>
<div class="panel">
  <p>This is what sets apart the men from tfhe boys</p>

  <div class="wrapper">
  <?php
    
    while ($row = mysqli_fetch_assoc($gpuResult)){
      //printf(stripslashes($row["NAME"]));
      //echo "<br>";
      
      echo "<div><img src='" . $row["PIC1"] . "' alt='" . $row["NAME"]
      . " Pic'" . " /><br>";
      echo "<h5>" . $row["NAME"] . "</h5>";
      echo "<p>Price:&nbsp;&nbsp;&nbsp;$" . $row["PRICE"] . "</p>";
      echo "<select name='qty[]'>";
		foreach ($qty as $q) {
		  echo "<option value='$q'>$q</option>";
	  }
	  echo "</select>";
		echo "<button class='btnAdd' name='cart' value=" . '"' . $row["PIC1"] . ";" . $row["NAME"] . ";" .$row["PRICE"] . '"'  . ">Add to Cart</button>"; 
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
      echo "<select name='qty[]'>";
		foreach ($qty as $q) {
		  echo "<option value='$q'>$q</option>";
	  }
	  echo "</select>";
		echo "<button class='btnAdd' name='cart' value=" . '"' . $row["PIC1"] . ";" . $row["NAME"] . ";" .$row["PRICE"] . '"'  . ">Add to Cart</button>"; 
      echo "</div>"; 
    } 
  ?>
  </div>
</div>
</div>
</div>
	
	<?php
		include("inc_cart_right.php");
	?>
	
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
	
<script>
	/*$(document).ready(function(){
        $(function(){
        $('parts.php').submit(function(e){
            alert('Success');    
			e.preventDefault();
                var form = $(this);
                var post_url = form.attr('action');
                var post_data = form.serialize();
                //$('#loadright', form).html('<img src="../../images/ajax-loader.gif" />       Please wait...');
                $.ajax({
                    type: 'POST',
                    url: post_url, 
                    data: post_data,
                    success: function(msg) {
                        $(form).fadeOut(800, function(){
                            
							form.html(msg).fadeIn().delay(2000);

                        });
                    }
                });
            });
        });
         });
	*/
	/*$(document).ready( function() {
		$(.btnAdd).click(function()){
						var page = $(this).attr
						 }
	})*/
	</script>
	
	<script>

/*function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("loadright").innerHTML =
      this.responseText;
		
    }
  };
  xhttp.open("POST", "inc_cart_right.php", true);
  xhttp.send();
return false;
};
</script>
	



</body>
</html>