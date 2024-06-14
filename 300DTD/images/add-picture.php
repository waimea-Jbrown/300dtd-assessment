<?php

require_once 'functions.php';

consoleLog($_POST, 'POST');
consoleLog($_FILES, 'FILES');

if(empty($_POST) && empty($_FILES)) die ('There was a problem uploading the file (probably too large)');

// Get image data and type of uploaded file
[
    'data' => $imageData,
    'type' => $imageType
] = uploadedImageData($_FILES['image']);

// Get other data from form
$title = $_POST['title'];

// Insert the image into the database
$db = connectToDB();

$query = 'INSERT INTO pictures (title, type, image) VALUES (?, ?, ?)';

try {
    $stmt = $db->prepare($query);
    $stmt->execute([$title, $imageType, $imageData]);
}
catch (PDOException $e) {
    consoleLog($e->getMessage(), 'DB Upload Picture', ERROR);
    die('There was an error adding picture to the database');
}


// If we get here, it worked!
echo 'Success!!!';

// Back to the home page
header('location: index.php');
