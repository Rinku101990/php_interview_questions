<?php

// Sort an array element from array in ascending and descending
$nums = array(1,3,5,4,2,6,7,11,29);
$temp = 0;
for($i=0; $i<count($nums); $i++){
    for($j=$i+1; $j<count($nums); $j++){
        if($nums[$i] > $nums[$j]){
            $temp = $nums[$i];
            $nums[$i] = $nums[$j];
            $nums[$j] = $temp;
        }
    }
}
echo "<pre>";
print_r($nums);

?>