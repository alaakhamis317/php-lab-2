<?php
// task 1
echo "Hello " ."<br>"."World";
echo"<br>";

// task 2 
$str = "Hello World!";
echo strrev($str);
echo"<br>";
echo strtoupper($str);
echo"<br>";
echo strtolower($str);
echo"<br>";

// task 3
$num = [12,45,10,25];
print_r($num);
echo"<br>";
echo "The sum is: ". array_sum($num);
function calculateAverage($num) {
    return array_sum($num) / count($num);
}
$average = calculateAverage($num);
echo"<br>";
echo "The average is: " . $average;
echo"<br>";
print_r(array_reverse($num));
echo"<br>";

// task 4

$age = array("sara"=>31, "john"=>41, "walaa"=>39, "ramy"=>40);
asort($age);
print_r($age);
echo"<br>";
ksort($age);
print_r($age);
echo"<br>";
arsort($age) ;
print_r($age);
echo"<br>";
krsort($age);
print_r($age);
?>
<!-- task 5 -->

<pre><?php print_r($_SERVER); ?></pre>


