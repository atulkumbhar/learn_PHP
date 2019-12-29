 
<?php
// Using $_GET Variable in PHP 
// $_ is super user variable or Variable by PHP SCript  in php


//Example:   Returing Value from Browser
if(isset($_GET["student_name"]) && isset($_GET["student_age"]) && isset($_GET["student_weight"]))
{
	$name=$_GET["student_name"];
	$age=$_GET["student_age"];
	$weight=$_GET["student_weight"];

	if(!empty($name)&&!empty($age)&&!empty($weight))
	{
		echo "Following information collected from student.php";
		echo "<br>";
		echo 'Name :'.$_GET["student_name"];
		echo "<br>";
		echo 'Age :'.$_GET["student_age"];
		echo "<br>";
		echo 'Weight :'.$_GET["student_weight"];
		echo "<br>";
	}
	else
	{
		echo " please enter all fields ";
	}
}

 ?>