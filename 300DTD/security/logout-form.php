<?php

session_name('jbrownSecurityDemo');
session_start();
session_destroy();
header('location: index.php');

Reset

?>

