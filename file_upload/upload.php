<?php
/*
$target_dir = "uploads/" - specifies the directory where the file is going to be placed
$target_file specifies the path of the file to be uploaded
$uploadOk=1 is not used yet (will be used later)
$imageFileType holds the file extension of the file (in lower case)
Next, check if the image file is an actual image or a fake image
Note: You will need to create a new directory called "uploads_" in
 the directory where "upload.php" file resides. 
The uploaded files will be saved there.

*/
$target_dir = "uploads_/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}



// Check if file already exists
/*
check if the file already exists in the "uploads" folder. 
If it does, an error message is displayed, and $uploadOk is set to 0:
*/
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}



// Check file size
/* The file input field in HTML form above is named "fileToUpload".

Now,check the size of the file. If the file is larger than 500KB,
 an error message is displayed, and $uploadOk is set to 0:
(what is our size limit allowed in php.ini ???)
*/
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}


// Allow certain file formats
/* The code below only allows users to upload JPG,
 JPEG, PNG, and GIF files. All other file types gives 
 an error message before setting $uploadOk to 0:
 */
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}



// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>