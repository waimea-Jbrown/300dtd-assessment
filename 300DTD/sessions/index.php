<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
    <script src="https://unpkg.com/htmx.org@1.9.10" integrity="sha384-D1Kt99CQMDuVetoL1lrYwg5t+9QdHe7NLX/SoJYkXDFfX37iInKRy5xLSi8nO7UC" crossorigin="anonymous"></script>
</head>
</head>
<body>
    
<?php

session_name('jbrownSessionDemo');
session_start();

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0
} 





$_SESSION['count'] = $_SESSION['count'] + 1;
$_SESSION['name'] = 'Steve';

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

?>



<button
hx-trigger="click"
hx-post="reset.php"
hx-swap="none"
>
    Reset
</button>



</body>
</html>