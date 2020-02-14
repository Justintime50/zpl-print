<?php
//////////////////
// Upload logic //
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$zplFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$redirect = "<br /><a href=\"index.php\">Return to Home</a>";
require "config.php";
// Create uploads directory if it doesn't exists
if (!is_dir("uploads")) {
    mkdir("uploads", 0775, true);
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.".$redirect;
    $uploadOk = 0;
}
// Check file size
if ($_FILES["file"]["size"] > 500000) {
    echo "Sorry, your file is too large.".$redirect;
    $uploadOk = 0;
}
// Allow certain file formats
if($zplFileType != "zpl") {
    echo "Sorry, only ZPL files are allowed.".$redirect;
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.".$redirect;

// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.".$redirect;
    } else {
        echo "Sorry, there was an error uploading your file.".$redirect;
    }
}

/////////////////
// Print logic //
// TODO: Add logic to test if the print worked or not and display 
exec("lpr -P $printer -o raw $target_dir" . basename( $_FILES["file"]["name"]));
exec("sleep 5 && rm -f $target_dir" . basename( $_FILES["file"]["name"]));
