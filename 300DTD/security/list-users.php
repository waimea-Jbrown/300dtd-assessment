<?php

include 'styles.php';
include '_session.php';
include '_funtions.php';

include 'toggle-admin.php';

$db = connectToDB();
$query = 'SELECT * FROM users WHERE username = ?';
$stmt = $db->prepare($query);
$stmt->execute([$user]);
$userData = $stmt->fetch();


consoleLog($user, 'DB Data');

echo '<h1>Users list</h1>';

echo '<ul>';
foreach ($user as $users) {
    echo '<li>';
    echo    $user['forename'] . ' ' . $user['surname'];
    echo    ' (' . $user['username'] . ')';
    if ($user) {
        
    }

}

?>
