<?php


// ID of image should be in URL
$id = $_GET['id'] ?? null;

$db = connectToDB();

// Get the image type and binary data
$query = 'SELECT id, name, description 
FROM things 
WHERE id=?';

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


echo '<h2>' . $thing['name'] . '</h2>'

$imageURL = SITE_BASE . '/image/' . $thing['id']
echo '<img src="' . $imageURL . '">';

echo'<p>' . $thing['description'] . '</p>'


// Got here, so all went well. Pass back the image data as a response
/*header('Content-type: ' . $image['type']);
echo $image['image'];

*/
?>