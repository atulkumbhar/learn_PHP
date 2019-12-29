
<?php
// Arrays in PHP
 
$names=array('Atul','Prajot','Ram');
// values are called elements in array here, Atul, Projot,Ram are elements of array names
// with positions 0,1,2 within array names respectively 

echo $names[0];

// Assign value at runtime
echo "<br>";

$names[3]='Shaurya';
$names[4]='Kush';
print_r($names); // Prints all array elements with their index


 ?>