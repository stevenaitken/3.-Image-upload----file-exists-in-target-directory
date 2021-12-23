<?php

include 'includes/errors.php';

//set up variables
// target directory for images
$target_dir = "images/"; //
// file and pathname of image
$target_file = $target_dir . basename($_FILES["uploaded-image"]["name"]);
// flag to track whether file can be uploaded

// has the submit button been posted

if(isset($_POST["submit"])) {    

// check if file exists
if (file_exists($target_file)) {  

    exit("File already exists.");
}

// check if 0 is returned and do not upload

    if (move_uploaded_file($_FILES["uploaded-image"]["tmp_name"], $target_file)) {

        echo "File uploaded successfully." ;
          
    } 
// comments go here - fully document this conditional statement
	else {
       
        exit("There was an error uploading your file.");
    }

} // end of isset()
?>

