<?php

require_once 'functions.php';

// ID of image should be in URL
$id = $_GET['id'] ?? null;

$db = connectToDB();

// Get the image type and binary data
$query = 'SELECT type, image FROM pictures WHERE id=?';

try {
    $stmt = $db->prepare($query);
    $stmt->execute([$id]);
    $image = $stmt->fetch();

    // Failed to get an image back?
    if (!$image) throw new Exception();
}
catch (Exception $e) {
    // Failed, so 404
    http_response_code(404);
    die();
}

// Got here, so all went well. Pass back the image data as a response
header('Content-type: ' . $image['type']);
echo $image['image'];

?>