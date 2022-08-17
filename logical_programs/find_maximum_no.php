<?php

// find maximum no from array element

$nums = array(1,3,5,4,2,6,7,11,29);
$maximum = $nums[0];
for($i=0;$i<count($nums);$i++){

	if($nums[$i] > $maximum){
    	$maximum = $nums[$i];
    }
}
echo $maximum;

?>