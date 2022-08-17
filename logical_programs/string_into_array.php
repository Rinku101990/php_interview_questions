<?php
/* Longest Substring Without Repeating Characters */ 
function stringToArray($item){

    $temp = array();
    for($i=0; $i<strlen($item); $i++){

        if(!in_array($item[$i], $temp)){

            $temp[] = $item[$i];

        }
    }
    return count($temp);
    //return $temp;
}

$strings = "abcabcbb";
echo "<pre>";
print_r(stringToArray($strings));

?>