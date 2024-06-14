<?php

define('DEBUG', true);

require '_functions.php';

//$priorityFilter = $GET['priority'] ?? false;
//consoleLog($priorityFilter, 'Priority filter');

/*if ($priorityFilter) {
    $query .= 'WHERE priority = ?';
    $data = [$priorityFilter];
}

else {
    $data = [];

}

if ($sortFilter == 'asc') {
    $query .= 'ORDER BY priority ASC';

}

else {
    $query .= 'ORDER BY priority DESC';

}
*/

$db = connectToDB();

$query = 'SELECT * FROM items';

try {

$stmt = $db->prepare($query);
$stmt->execute();
$items = $stmt->fetchALL();
}
catch (PDOException $e) {
    consoleLog($e->getMessage(), 'DB Connect', ERROR);
    die('There was an error when connecting to the database');
}

consoleLog($items);

echo '<ul>';
foreach ($items as $item) {
    echo '<li>' . $item['name'] .  ' (' . $item['cost'] . ')</li>';
}
echo '</ul>';

