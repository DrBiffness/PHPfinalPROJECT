
<?php
    $caseString = 'select * from CASES';
    $cpuString = 'select * from processors';
    $moboString = 'select * from motherboards';
    $ramString = 'select * from ram';
    $coolString = 'select * from cooler';
    $m2String = 'select * from m2';
    $sataString = 'select * from sata';
    $gpuString = 'select * from gpu';
    $psuString = 'select * from psu';
    $dbConnect = mysqli_connect('127.0.0.1','root','newpwd','MF_TECHNOLOGY');

    $caseResult = mysqli_query($dbConnect,$caseString) or die();
    $cpuResult = mysqli_query($dbConnect,$cpuString) or die();
    $moboResult = mysqli_query($dbConnect,$moboString) or die();
    $ramResult = mysqli_query($dbConnect,$ramString) or die();
    $coolResult = mysqli_query($dbConnect,$coolString) or die();
    $m2Result = mysqli_query($dbConnect,$m2String) or die();
    $sataResult = mysqli_query($dbConnect,$sataString) or die();
    $gpuResult = mysqli_query($dbConnect,$gpuString) or die();
    $psuResult = mysqli_query($dbConnect,$psuString) or die();

	function cartCase($name,$price,$pic1){
		$GLOBALS['case1'] = array($pic1,$name,$price);
		
	}
	
	function addCase(){
		if (! empty($case1)){
		$i = 0;
		echo "<p><img src='$case1[$i]' alt='pic1' width='20px' height='20px' />";
		$i++;
		echo "&nbsp;<b>$case1[$i]</b>";
		$i++;
		echo "<span class='price'>$$case1[$i]</span></p>";
		}
		else {
			echo "poop";
		}
	}

	
    /*while ($row = mysqli_fetch_assoc($caseResult)){
        printf(stripslashes($row["NAME"]));
        echo "<br>";
    }*/
?>
