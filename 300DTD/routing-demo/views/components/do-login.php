<?php

require_once '_session.php';
require_once 'utils.php';

consoleLog($_POST, 'Form Data');

$user = $_POST['user'];
$pass = $_POST['pass'];


$db = connectToDB();
$query = 'SELECT * FROM users WHERE username = ?';
$stmt = $db->prepare($query);
$stmt->execute([$user]);
$userData = $stmt->fetch();

consoleLog($userData);

if ($userData == false) die('no user account');

if ($pass != $userData['password']) die('Incorrect password');

$_SESSION['user']['admin'] = $userData['admin'];
$_SESSION['loggedIn'] = true;
$_SESSION['forename'] = $userData['forename'];
$_SESSION['surname'] = $userData['surname'];

header('location: index.php');