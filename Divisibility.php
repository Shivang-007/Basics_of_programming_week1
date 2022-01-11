<?php
$n=readline();     //read input
$a=array($n);      //read input
while($n!=0){
    $lastDigit=$a[$n-1];
    $n--; 
}
if($lastDigit%10==0){
    echo "yes";
}else{
    echo "No";
}
?>