<?php

// Find the array indexes from array to equal of target

$nums = array(1,3,11,14,5);
$target = 8;

for( $i=0; $i<count($nums); $i++){
	for($j=$i+1; $j<count($nums); $j++){
   
   	if($nums[$i] + $nums[$j] == $target){
       	echo $i.' , '.$j;
       }
   
   }
}

?>