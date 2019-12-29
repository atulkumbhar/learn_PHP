
<?php
// While Loop and Do while loop
// example : print a string multiple times

$counter=1; // counter for while loop

while ($counter<11) // here condition should be true to go insde while loop
	{
		echo "I <b>Love my Country ".$counter." <br>";
		$counter++;
	}
$counter=1; // counter for while loop

echo "<br><br> Do While loop <br>";
do     
	{
		echo "I <b>Love my Country ".$counter." <br>";
		$counter++;
	}while ($counter<11); // here condition should be true to go insde while loop
  
 ?>