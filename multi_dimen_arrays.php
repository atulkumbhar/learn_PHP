
<?php
// Multidimensional Arrays in PHP
/*
Students
Name    Age     weight
Raju    16      41  
Walkar  13      33
Candu   08      23 

*/




$students=array(array('Raju',16,41),
				array('Walkar',13,33),
				array('Candu',8,23)); //Array inside array


echo $students[0][0];
 
 echo "<br>";
print_r($students); // Prints all array elements with their index/values

echo "<br>"; 
// display using each element through echo

echo $students [0][0].' ';echo $students [0][1].' ';echo $students [0][2].'<br>';
echo $students [1][0].' ';echo $students [1][1].' ';echo $students [1][2].'<br>';
echo $students [2][0].' ';echo $students [2][1].' ';echo $students [2][2].'<br>';

// Declaration of an array using Associative Property i.e. define your own key
$students=array(array('Name'=>'Raju',
						'Age'=>16,
						'Weight'=>41),
				array('Name'=>'Walkar',
						'Age'=>13,
						'Weight'=>33),
				array('Name'=>'Candu',
						'Age'=>8,
						'Weight'=>23)); //Associative Arrays Property
 
// display using each element's index and Key  through echo 
echo "<br>"."<br>";
echo "display using each element's index with Keys"."<br>";

echo $students [0]['Name'].' ';echo $students [0]['Age'].' ';echo $students [0]['Weight'].'<br>';
echo $students [1]['Name'].' ';echo $students [1]['Age'].' ';echo $students [1]['Weight'].'<br>';
echo $students [2]['Name'].' ';echo $students [2]['Age'].' ';echo $students [2]['Weight'].'<br>';
 
 ?>