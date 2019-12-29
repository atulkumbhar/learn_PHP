<?php
$value=34; // Numerical Variable
$name="String data stored"; // String Variable
echo "$value";
echo"<br>";
// Arithmetic Operations
$value=($value*4);
echo "34 * 4 is ";
echo "$value"; // $value is rendered to actual value due to Double Quote "" . 
 echo"<br>";
 
 echo $name,$value; // echo without ""
 echo "<br>";
 echo "34 * 4=",$value; // with ,
 echo "<br>";
 
 echo "34 * 4=$value"; // without ,

 echo "<br>";
 
 echo '34 * 4=$value'; // with ' SINGLE QUOTE it will be considered As It Is. 

?>
