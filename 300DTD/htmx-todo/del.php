<?php

require_once '_functions.php';

consoleLog($_POST);

$todoTask = $_POST['name'];


$db = connectToDB();

$query = 'DELETE FROM todos (task) VALUES (?)';

try {
    $stmt = $db->prepare($query);
    $stmt->execute([$todoTask]);
}

catch (PDOException $e) {
    consoleLog($e->getMessage(), 'DB Insert', ERROR);
    die('There was an error adding the item to the database');
}

require 'list.php';