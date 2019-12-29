
<?php
// Associative Arrays in PHP
 // Example : Keys as names and Values of those keys as numbers
$names=array('Atul'=>105,'Prajot'=>75,'Ram'=>71);
 
echo $names['Ram'];

 echo "<br>";

$names[3]='Shaurya';
$names[4]='Kush';
print_r($names); // Prints all array elements with their index/values

echo "<br>";
echo "Weight of Atul is ".$names['Atul']. " Kgs";

 
 ?>