
<!--- Credits : Below examples from https://www.guru99.com/php-regular-expressions.html -->
<?php


/* 
A]What is a Regular Expressions?
1.Regular expressions are powerful pattern matching algorithm that
can be performed in a single expression.

2.Regular expressions use arithmetic operators such as (+,-,^) to create complex expressions.

3.Regular expressions help you accomplish tasks such as validating email addresses, IP address etc

B]Regular expressions in PHP:-
PHP has built in functions that allow us to work with regular functions.
 Let’s now look at the commonly used regular expression functions in PHP.

1.preg_match – this function is used to perform a pattern match on a string. 
It returns true if a match is found and false if a match is not found.

2.preg_split – this function is used to perform a pattern match on a string
 and then split the results into a numeric array
 
3.preg_replace – this function is used to perform a pattern match on a string
 and then replace the match with the specified text.


C] Why to use regular expressions

1.Regular expressions simplify identifying patterns in string data by calling a 
single function. This saves us coding time.

2.When validating user input such as email address, domain names, telephone numbers, IP addresses,

3.Highlighting keywords in search results

4.When creating a custom HTML template. Regular expressions can be used to identify the template tags and replace them with actual data.
 
 
D]Below is the syntax for a regular expression function such as preg_match,preg_split or preg_replace.

<?php
function_name('/pattern/',subject);
?>
HERE,

1. "function_name(...)" is either preg_match, preg_split or preg_replace.
2. "/.../" The forward slashes denote the beginning and end of our regular expression
3. "'/pattern/'" is the pattern that we need to matched
4. "subject" is the text string to be matched against 
 
 */ 


//PHP Preg_match 
 echo '<h3>'."<br><i>  PHP Preg_match  <br>".'</h3>';
	$my_url = "www.guru99.com";
	if (preg_match("/guru/", $my_url))
	{
		echo "the url $my_url contains guru";
	}
	else
	{
		echo "the url $my_url does not contain guru";
	}
//PHP Preg_split 
 echo '<h3>'."<br><br><i>  PHP Preg_split <br>".'</h3>';
	$my_text="I Love Regular Expressions";

	$my_array  = preg_split("/ /", $my_text);

	print_r($my_array );

 
//PHP Preg_replace & Highlighting 
  echo '<h3>'."<br><br><i>  PHP Preg_replace & Highlighting  <br>".'</h3>';
  
	$text = "We at Guru99 strive to make quality education affordable to the masses. Guru99.com";

	$text = preg_replace("/e/", '<span style="background:yellow">e</span>', $text);

	echo $text;

//PHP check the validity of an email address 
   echo '<h3>'."<br><br><i>  PHP check the validity of an email address <br>".'</h3>';
 
	$my_email = "name@company.com";
	if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $my_email))
		{
			echo "$my_email is a valid email address";
		}
	else
		{
			echo "$my_email is NOT a valid email address";
		}

?>

<!--
Meta characters:-
The above examples used very basic patterns; metacharacters simply allow us to perform more
complex pattern matches such as test the validity of an email address. 
Let’s now look at the commonly used metacharacters.

Metacharacter	Description													Example
.				Matches any single character except a new line				/./ matches anything that has a single character
^				Matches the beginning of or string / excludes characters	/^PH/ matches any string that starts with PH
$				Matches pattern at the end of the string					/com$/ matches guru99.com,yahoo.com Etc.
*				Matches any zero (0) or more characters						/com*/ matches computer, communication etc.
+				Requires preceding character(s) appear at least once		/yah+oo/ matches yahoo
\				Used to escape meta characters	/							yahoo+\.com/ treats the dot as a literal value
[...]			Character class												/[abc]/ matches abc
a-z				Matches lower case letters									/a-z/ matches cool, happy etc.
A-Z				Matches upper case letters									/A-Z/ matches WHAT, HOW, WHY etc.
0-9				Matches any number between 									0 and 9	/0-4/ matches 0,1,2,3,4
  The above list only gives the most commonly used metacharacters in regular expressions.
-->
