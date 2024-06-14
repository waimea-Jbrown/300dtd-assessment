<?php

require_once '_session.php'
require_once '_functions.php'
require_once 'list-users.php'


$isAdmin = $_SESSION['user']['admin'] ?? false;
$ismanager = $_SESSION['user']['admin'] ?? false;   

$db = connectToDB();
$query = 'DELETE * FROM users WHERE id = ?';
$stmt = $db->prepare($query);
$stmt->execute([$isAdmin]);
$userData = $stmt->fetch();


if($isAdmin) {
    '<ul>'
   echo '<h1>delete users</h1>'
    echo '<p>you are an admin</p>';

    echo '<a href="list-users.php">User List</a>';
} 




