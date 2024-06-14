<!-- Handle the message data from the form, e.g. add to database -->

<?php

$db = connectToDB();

$query = 'INSERT INTO messages (`from`, message) VALUES (?, ?)';

try {
    $stmt = $db->prepare($query);
    $stmt->execute([$name, $message]);
}

catch (PDOException $e) {
    consoleLog($e->getMessage(), 'DB Insert Message', ERROR);
    die('There was an error adding the item to the database');
}


?>

<h2>Thank you for your message!</h2>
