<?php

require_once '_sessions.php';
require_once '_funtions.php';


$db = connectToDB();
$query = 'SELECT FROM users WHERE username = ?';
$stmt = $db->prepare($query);
$stmt->execute([$user]);
$userData = $stmt->fetch();


consoleLog($user, 'DB Data');



