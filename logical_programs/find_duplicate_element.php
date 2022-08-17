<?php

// Find duplicate element from an array

function duplicateElement($item){
	
    $temp = array();
    foreach($item as $itm){
    	if(!in_array($itm, $temp)){
        	$temp[] = $itm;
        }else{
        	echo "Duplicate Element = ".$itm."<br>";
        }
    }
    return $temp;
}

$nums = array(1,3,5,1,2,6,3);
duplicateElement($nums);

?>