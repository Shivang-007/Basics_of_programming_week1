<?php
$string=readline();               //read input
$length=strlen($string);
$j=0;
while($j<10){
    $count=0;
    for($i=0;$i<$length;$i++)
    {
        if($j==($string[$i])){
            $count++;
        }
    }
    echo $j." ".$count;
    echo "\n";
    $j++;
}
?>