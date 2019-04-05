<!doctype html>
<html>
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
<title>Untitled Document</title>
	
<link href="tab.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.tabs.min.css" rel="stylesheet" type="text/css">
<script src="jQueryAssets/jquery-1.11.1.min.js"></script>
<script src="jQueryAssets/jquery.ui-1.10.4.tabs.min.js"></script>
	
</head>

<body>
	
	
	<div id="London" class="tabcontent">
  <h1>J&M Electronics</h1>
  <h3>The leader in custom PC configuration!</h3>
</div>

<div id="Paris" class="tabcontent">
  <h1>Custom PC Builder</h1>
  <h3>Build your own custom gaming PC!</h3> 
</div>

<div id="Tokyo" class="tabcontent">
  <h1>Parts</h1>
  <h3>Pick your own parts, 'a la carte'</h3>
</div>

<div id="Oslo" class="tabcontent">
  <h1>Shopping Cart</h1>
  <h3>You don't have enough stuff in there yet!</h3>
</div>

<button class="tablink" onClick="openHome()" >Home</button>
<button class="tablink" onClick="openCustom()">Custom PC Builder</button>
<button class="tablink" id="defaultOpen" onClick="openCity('Tokyo', this, 'blue')" >Parts</button>
<button class="tablink" onClick="openSupport()">Shopping Cart</button>
	
	<script>
  function openHome() {
  var myWindow = window.open("home.php", "_parent", "");
}
function openCustom() {
  var myWindow = window.open("custom_PC.php", "_parent", "");
}
function openSupport() {
  var myWindow = window.open("support.php", "_parent", "");
}
</script>
	
<script type="text/javascript">
	function openCity(cityName, elmnt, color) {
  // Hide all elements with class="tabcontent" by default */
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Remove the background color of all tablinks/buttons
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }

  // Show the specific tab content
  document.getElementById(cityName).style.display = "block";

  // Add the specific color to the button used to open the tab content
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

</script>
</body>
</html>
