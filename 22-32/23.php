<?php

$my_array = [3,6,2,9,8];
echo "Original Array :";	
print_r($my_array);
echo "<br>";

//1.count()
echo "<b>Count of array : </b>" . count($my_array). "<br>";

//2. sort()
echo "<b>Sorted array :</b>";
print_r($my_array);
echo "<br>";

//3. array_push()
echo "<b>Pushing into array :</b>";
array_push($my_array, 34);
print_r($my_array);
echo "<br>";


//4.array_reverse()
echo "<b>Reverseing the array :</b>";
$reversedArray = array_reverse($my_array);
print_r($reversedArray);
echo "<br>";

//5.array_pop()
echo "<b>Poping from array : </b>";
$popedArray = array_pop($my_array);
print_r($popedArray);
echo "<br>";

//6.array_merge
echo "<b>Merging arrays : </b>";
$array_2 = [2,7,39,1];
$merged = array_merge($my_array, $array_2);
print_r($merged);
echo "<br>";


//7.array_sum
echo "<b>Sum of arrays : </b>";
$sumed = array_sum($merged);
print_r($sumed);
echo "<br>";


//8. array_unique
echo "<b>Uniques: </b>";
$dup = [1,4,5,5,6,3,2,2,1];
$uniq= array_unique($my_array);
print_r($uniq);
echo "<br>";

?>