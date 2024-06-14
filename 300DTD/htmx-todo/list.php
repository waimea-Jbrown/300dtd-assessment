<?php

define('DEBUG', true);

require_once '_functions.php';
$db = connectToDB();

$query = 'SELECT * FROM task';

try {

$stmt = $db->prepare($query);
$stmt->execute();
$todos = $stmt->fetchALL();
}
catch (PDOException $e) {
    consoleLog($e->getMessage(), 'DB Connect', ERROR);
    die('There was an error when connecting to the database');
}

consoleLog($todos);

echo '<ul>';
foreach ($todos as $todo) {
    echo '<li>' . $todo['task'] . '</li>';
    echo    ' ';
    
    echo       'X';
   
    echo    '<button
    hx-trigger="click"
    hx-post="del.php"
    hx-target="#todo-list"
        >';

    echo    '</button>';

    echo    '</form>';
}
echo '</ul>';

