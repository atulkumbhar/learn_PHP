
<?php
// Comparison Operations
$number1=45;
$number2='45';

echo ' Comparison Operations on : '.$number1.' &  \''.$number2.' \''.'<br>'; 
echo "<br>";
echo "Comparison Operator == : <br>";

// example for == for equality 

if ($number1==$number2)
	echo '$number1  equal to  \''.$number2.' \''.'<br>'; 
else 
	echo '$number1  is not equal to \''.$number2.' \''.'<br>';   


echo "Comparison Operator === : <br>";

// example for === Identical Operator means data and its data types are same.

if ($number1===$number2)
{
		echo $number1.'  is Identical to  \''.$number2.' \''.'<br>'; 
}
else
{
		echo $number1.'  is not Identical to \''.$number2.' \''.'<br>';  
}
 // Example for Not Equal  != or <>
 
if ($number1<>$number2)
{
		echo $number1.' is not equal to using <> operator  \''.$number2.' \''.'<br>'; 
}
else
{
		echo $number1.' is equal to using <> operator  \''.$number2.' \''.'<br>';  
} 
 ?>