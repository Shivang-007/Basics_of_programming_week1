<?php
fscanf(STDIN, "%d\n", $d);
fscanf(STDIN, "%d %d %d\n", $Oc, $Of,$Od);
fscanf(STDIN, "%d %d %d %d\n", $Cs, $Cb, $Cm, $Cd);
$Online_taxi=($Oc+($d-$Of)*$Od);
$Classic_taxi=($Cb+(($d/$Cs)*$Cm)+($d*$Cd));
if($Online_taxi<$Classic_taxi){
    echo "Online Taxi";
}
if($Online_taxi>$Classic_taxi){
    echo "Classic Taxi";
}
?>
