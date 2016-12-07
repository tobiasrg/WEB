<?php
$file = $_FILES["file"];
$file_name = $_FILES["file"]["name"];
$file_tmp = $_FILES["file"]["tmp_name"];
$file_type = $_FILES["file"]["type"];
$valid_files = array("image/jpeg", "image/png", "text/plain");

echo $file_type;

$file_dir = "uploads/" . $file_name;


if (!move_uploaded_file($file_tmp, $file_dir)) {
    die('Error uploading file');
}
foreach ($file_type as $file) {
    if (!in_array($file, $valid_files)) {
        die("fel format");
    }else{
        echo "<img src = $file_dir>";
    }
}
/*
if ($file_type != "image/jpeg") {
    die("fel format mothafucka");
} else {
    echo "<img src = $file_dir>";
}
*/


