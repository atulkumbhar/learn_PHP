
<?php
// If Else statements 
$number1=45;
$number2=60;

echo "If Else Operations on : $number1 & $number2"; 
echo "<br>";
echo "Comparison Operator == : <br>";

if ($number1==$number2)
	echo "$number1  equal to $number2".'<br>';  
else 
	echo "$number1  is not equal to $number2".'<br>';  

echo "Nested IF else example <br>";


if ($number1==$number2)
{
		echo "$number1  equal to $number2".'<br>';  
}
else if ($number1>$number2) 
{
		echo "$number1  is greater than $number2".'<br>';  
}
else 
echo "$number1 is less than $number2".'<br>';

 ?>