<?php
$a=array();                       
$b=(int)readline();
for($i=0;$i<$b;$i++){
   $a[$i]=(int)readline();
}

function countBits($num){
   $count=0;
   while($num){
      $count=$count+($num&1);
      $num=$num>>1;
   }
   return $count;
}
for($i=0;$i<$b;$i++){
   echo (countBits($a[$i])."\n");
}
?>