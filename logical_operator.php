
<?php
// Logical Operations
$number1=45;
$number2='45';
$number3=26;

echo ' Logical Operations on : '.$number1.' ,  \''.$number2.'\''.' and '.$number3.'<br>'; 
echo "<br>";
echo "Logical Operator and or && : <br>";

// example for AND && 

if ( ($number1==$number2) and ($number2!=$number3))
	echo "<b>True</b> that : ".'($number1==$number2) and ($number2!=$number3)'.'<br>'; 
else 
	echo "<b>False</b> that : ".'($number1==$number2) and ($number2!=$number3)'.'<br>';

// wRITE for or,||,,xor,!    
 ?>