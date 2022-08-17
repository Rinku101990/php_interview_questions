<?php

// find minimum no from array element

$nums = array(1,3,5,4,2,6,7);
$minimum = $nums[0];
for($i=0;$i<count($nums);$i++){

	if($nums[$i] < $minimum){
    	$minimum = $nums[$i];
    }
}
echo $minimum;

?>