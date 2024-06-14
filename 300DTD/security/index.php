<?php

require_once '_session.php';

require_once '_funtions.php';

$loggedIn = $_SESSION['loggedIn'] ?? false;
$isAdmin = $_SESSION['user']['admin'] ?? false;
$ismanager = $_SESSION['user']['manager'] ?? false;


if ($loggedIn) {
    $name = $_SESSION['forename']. ' ' . $_SESSION['surname'];
    echo '<h1>Welcome, ' . $name . '</h1>';
    echo '<ap><a href="logout-form.php">Logout</a></p>';

}
    
if($isAdmin) {
    echo '<p>you are an admin</p>';

    echo '<p><a href="list-users.php">User List</a></p>';
} 



else {
    echo '<h1>Hello, Guest!</h1>';
    echo '<p>Please login...</p>';
    echo '<ap><a href="login-form.php">Login</a></p>';
}


if ($isAdmin) {
    '<ul>';
    echo '<h1>Admin</h1>';

    echo '<p>Please do some administration</p>';

    echo '<p><a href="toggle-admin.php">toggle</a></p>';




}



?>
