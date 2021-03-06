
<html>
   
   <head>
      <style>
         .error {color: #FF0000;}
      </style>
   </head>
   
   <body> 
      <?php
         // define variables and set to empty values
         $nameErr = $emailErr = $genderErr = $websiteErr = "";
         $name = $email = $gender = $class = $course = $subject = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
               $nameErr = "Name is required";
            }else {
               $name = test_input($_POST["name"]);
            }
            
            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
            }else {
               $email = test_input($_POST["email"]);
               
               // check if e-mail address is well-formed
              // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               //   $emailErr = "Invalid email format"; 
				// Email validation using Regular Expression  
				if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $email))
					{
						echo "$email is a valid email address";
					} 
				else 
				{
					 $emailErr = "Invalid email format (Checked by Regular Expression)"; 
				}
               //}
            }
            
            if (empty($_POST["course"])) {
               $course = "";
            }else {
               $course = test_input($_POST["course"]);
            }
            
            if (empty($_POST["class"])) {
               $class = "";
            }else {
               $class = test_input($_POST["class"]);
            }
            
            if (empty($_POST["gender"])) {
               $genderErr = "Gender is required";
            }else {
               $gender = test_input($_POST["gender"]);
            }
            
            if (empty($_POST["subject"])) {
               $subjectErr = "You must select 1 or more";
            }else {
               $subject = $_POST["subject"];	
            }
         }
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>
		
      <h2>Absolute classes registration</h2>
      
      <p><span class = "error">* required field.</span></p>
	  <!--
	  In a form on a PHP page, you can use:

		<form action="< ?php echo $_SERVER['PHP_SELF']; ?>" ...>
		or

		<form action="#" ...>
		or

		<form action="" ...>
		in the action attribute of the form. 
		Since echo $_SERVER['PHP_SELF'] does not pass variables for using GET 
	  -->
      
      <form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <table>
            <tr>
               <td>Name:</td>
               <td><input type = "text" name = "name">
                  <span class = "error">* <?php echo $nameErr;?></span>
               </td>
            </tr>
            
            <tr>
               <td>E-mail: </td>
               <td><input type = "text" name = "email">
                  <span class = "error">* <?php echo $emailErr;?></span>
               </td>
            </tr>
            
            <tr>
               <td>Time:</td>
               <td> <input type = "text" name = "course">
                  <span class = "error"><?php echo $websiteErr;?></span>
               </td>
            </tr>
            
            <tr>
               <td>Classes:</td>
               <td> <textarea name = "class" rows = "5" cols = "40"></textarea></td>
            </tr>
            
            <tr>
               <td>Gender:</td>
               <td>
                  <input type = "radio" name = "gender" value = "female">Female
                  <input type = "radio" name = "gender" value = "male">Male
                  <span class = "error">* <?php echo $genderErr;?></span>
               </td>
            </tr>
            
            <tr>
               <td>Select:</td>
               <td>
                  <select name = "subject[]" size = "4" multiple>
                     <option value = "Android">Android</option>
                     <option value = "Java">Java</option>
                     <option value = "C#">C#</option>
                     <option value = "Data Base">Data Base</option>
                     <option value = "Hadoop">Hadoop</option>
                     <option value = "VB script">VB script</option>
                  </select>
               </td>
            </tr>
            
            <tr>
               <td>Agree</td>
               <td><input type = "checkbox" name = "checked" value = "1"></td>
               <?php if(!isset($_POST['checked'])){ ?>
               <span class = "error">* <?php echo "You must agree to terms";?></span>
               <?php } ?> 
            </tr>
            
            <tr>
               <td>
                  <input type = "submit" name = "submit" value = "Submit"> 
               </td>
            </tr>
            
         </table>
      </form>
      
      <?php
         echo "<h2>Your given values are as :</h2>";
         echo ("<p>Your name is $name</p>");
         echo ("<p> your email address is $email</p>");
         echo ("<p>Your class time at $course</p>");
         echo ("<p>your class info $class </p>");
         echo ("<p>your gender is $gender</p>");
         
         for($i = 0; $i < count($subject); $i++) {
            echo($subject[$i] . " ");
         }
      ?>
      
   </body>
</html>

<!--
	  Using PHP_SELF in the action field of a form
		In this article shows the usage of PHP_SELF variable and how to avoid PHP_SELF exploits.

	What is PHP_SELF variable?
	PHP_SELF is a variable that returns the current script being executed. This variable returns the name and path of the current file (from the root folder). You can use this variable in the action field of the FORM. There are also certain exploits that you need to be aware of. We shall discuss all these points in this article. We will now see some examples. echo $_SERVER['PHP_SELF'];

		a) Suppose your php file is located at the address: http://www.yourserver.com/form-action.php

		In this case, PHP_SELF will contain: "/form-action.php"

b) Suppose your php file is located at the address: http://www.yourserver.com/dir1/form-action.php

For this URL, PHP_SELF will be : "/dir1/form-action.php"

Using the PHP_SELF variable in the action field of the form
A common use of PHP_SELF variable is in the action field of the <form> tag. The action field of the FORM instructs where to submit the form data when the user presses the "submit" button. It is common to have the same PHP page as the handler for the form as well.

However, if you provide the name of the file in the action field, in case you happened to rename the file, you need to update the action field as well; or your forms will stop working.

Using PHP_SELF variable you can write more generic code which can be used on any page and you do not need to edit the action field.
	  -->
