
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
    $dbConnect = mysqli_connect('127.0.0.1','root','Greyfox38','MF_TECHNOLOGY');

    $caseResult = mysqli_query($dbConnect,$caseString);
    $cpuResult = mysqli_query($dbConnect,$cpuString);
    $moboResult = mysqli_query($dbConnect,$moboString);
    $ramResult = mysqli_query($dbConnect,$ramString);
    $coolResult = mysqli_query($dbConnect,$coolString);
    $m2Result = mysqli_query($dbConnect,$m2String);
    $sataResult = mysqli_query($dbConnect,$sataString);
    $gpuResult = mysqli_query($dbConnect,$gpuString);
    $psuResult = mysqli_query($dbConnect,$psuString);


    /*while ($row = mysqli_fetch_assoc($caseResult)){
        printf(stripslashes($row["NAME"]));
        echo "<br>";
    }*/
?>
