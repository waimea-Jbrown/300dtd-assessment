<?php

require_once '_functions.php';

consoleLog($_POST);

$itemName = $_POST['name'];
$itemCost = $_POST['cost'];

$db = connectToDB();

$query = 'INSERT INTO items (name, cost) VALUES (?, ?)';

try {
    $stmt = $db->prepare($query);
    $stmt->execute([$itemName, $itemCost]);
}

catch (PDOException $e) {
    consoleLog($e->getMessage(), 'DB Insert', ERROR);
    die('There was an error adding the item to the database');
}

require 'list.php';