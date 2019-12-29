
<?php
// Foreach loop

//Example: Dispaly names from an string array 
$names=array('Arya','Bhavya','Kavya','Chaya','Maya','Saya');
 
 
foreach($names as $name)
	{
		echo $name." <br>";
		 
	}
 
//Example: Multidimentional Array
 
$students=array(array('Name'=>'Raju',
						'Age'=>16,
						'Weight'=>41),
				array('Name'=>'Walkar',
						'Age'=>13,
						'Weight'=>33),
				array('Name'=>'Candu',
						'Age'=>8,
						'Weight'=>23)); //Associative Arrays Property
	echo  " <br> This is Foreach example for multidimentional Array named Students <br>";
foreach($students  as $student=> $innerArray)
	{
		//echo $student." <br>"; // shows index values 
		echo '<br>'.$student."<br>"; 
		foreach( $innerArray as $item)
		{
				echo $item.'<br>';
		}
	}



 ?>