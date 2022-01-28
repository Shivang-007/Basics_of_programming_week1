<?php
$n=(int)readline();
$a=explode(' ', readline(),$n);
$temp=(int)($a[$n-1])%10;
if($temp==0){
echo "Yes";
}
else{
echo "No";
}
?>
