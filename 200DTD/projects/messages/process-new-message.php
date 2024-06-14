<?php

require_once 'common-functions.php';

echo '<pre>';
print_r( $_POST );
echo '</pre>';

$messageAuthor = $_POST['author'];
$messageTitle = $_POST['title'];
$messageBody = $_POST['body'];

echo '<p> Posting message...</p>';
echo '<p>Author: '.$messageAuthor;
echo '<p>Title: '.$messagetitle;
echo '<p>Body: '.$messagebody;

echo '<h2>Adding data to database...</h2>';

$sql = 'INSERT INTO messages (author, title, body)
        VALUES (?, ?, ?)';


modifyRecords( $sql, 'sss', [$messageAuthor, $messageTitle, $messageBody]);

header( 'location: index.php' );

?>
             