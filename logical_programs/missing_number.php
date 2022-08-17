<?php
/* Find missing no from array element */

$nums = array(1,2,3,4,5,6,8,9);
$total=0;
$sum=0;
$missingNumber;
$total = (count($nums) + 1) * ( count($nums) +2 )/2;
for($i=0; $i<count($nums); $i++){
	$sum = $sum + $nums[$i];
}
echo "Total = ".$total."<br>";
echo "Sum = ".$sum."<br>";
$missingNumber = $total - $sum;
echo "Missing No =".$missingNumber;

?>