
<?php
// Switch Statement 

//Example:  using number
 
 $number=3;
 echo "<br> Example: Using Numbers<br>";
 switch($number)
 {
	 case 1: 
	 echo "Number is One";
	 break;
	 case 2: 
	 echo "Number is Two";
	 break;
	 case 3: 
	 echo "Number is Three";
	 break;
	 case 4: 
	 echo "Number is Four";
	 break;
	 default:
	 echo "Number not present";
	 
 }

//Example:  using Character 
echo "<br> Example: Using Character<br>";

$Grade='A';
 
 switch($Grade)
 {
	 case 'a':
	 case 'A':	 
	 echo "Excellent : Grade A";
	 break;
	 case 'b':
	 case 'B':
	 echo "Very Good : Grade B";
	 break;
	 case 'c':
	 case 'C':
	 echo "Need Improvement : Grade C";
	 break;
	 case 'd':
	 case 'D':
	 echo "VERY VERY POOR: Grade D";
	 break;
	 default:
	 echo "No Grades Found";
	 
  }
 ?>