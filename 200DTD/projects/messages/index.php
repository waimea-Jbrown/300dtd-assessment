<?php
    require_once 'common-functions.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>message board</title>
</head>
<body>
    <header>
        <h1>message board</h1>
    </header>
    
    <main>
        <section>
        <form method="POST" action="process-new-message.php"> 
            <label> Your Name</label>
            <input name="name" type="text" required>
           
            <input name="title" type="text" required>
            <label> Message Title</label>
           
            <textarea name="body" required></textarea>
            <label> Message Body</label>
            
            <input type="submit" value="post message">
        </form>
        </section>
        
<?php

    $sql = 'SELECT *
            FROM messages
            ORDER BY datetime DESC';
     $messages = getRecords( $sql );

    // echo '<pre>';
    // print_r( $messages );
    // echo '<pre>';
    

    echo '<h2>List of messages...</h2>';
    $nummessages = count( $messages ); 
    
   
    
   
    echo '<section id="message-list">';
    foreach ($messages as $message) {
        echo '<div class="message">';
        echo    '<header>';
        echo        '<h3>' .$message['title'].'</h3>';
        echo    '</header>';

        echo    '<P>' .$message['body'].'</h2>';

        echo    '<footer>';
        echo        '<p>posted by' .$message['author'];
        echo        ' on '.niceDate( $message['datetime'] );
        echo        ' at '.niceTime( $message['datetime'] ). '</p>';
        echo    '</footer>';
        echo '</div>';
    }


    echo '</section>';

?>

    </main>
</body>
</html>