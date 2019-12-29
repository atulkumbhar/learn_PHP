
<?php
// Concatenation Operator program
$name="DYP Salokhenagar";

echo "Hello =$name <br>";

echo 'Hello =' . $name."<br>"; // here . is period or dot operator  which concatenates the strings 

echo '<a href="https://coes.dypgroup.edu.in">DYPSN Link</a>'; // using double Quote it give error as it cannot read after =" at href
// so use single quote
// Hence using HTML tags use single quote &
// Using variable use double quote for echo.
echo "<br>";

$collegeweb='DYPSN WEBSITE';

echo '<a href="https://coes.dypgroup.edu.in">'. $collegeweb.'</a>';

?>
