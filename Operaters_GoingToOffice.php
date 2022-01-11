<?php
$d=(int)readline();           //read input
echo "\n";
$Oc=(int)readline();          //read input
echo "\t";
$Of=(int)readline();          //read input
echo "\t";
$Od=(int)readline();          //read input
echo "\n";
$Cb=(int)readline();          //read input
echo "\t"; 
$Cb=(int)readline();          //read input
echo "\t";
$Cm=(int)readline();          //read input
echo "\t";
$Cd=(int)readline();          //read input
$Online_taxi=($Oc+($d-$Of)*$Od);
$Classic_taxi=($Cb+($d/$Cs)*1+$d*$Cd);
if($Online_taxi<$Classic_taxi || $Online_taxi=$Classic_taxi){
    echo "Online Taxi";
}
if($Online_taxi>$Classic_taxi){
    echo "Classic Taxi";
}
?>