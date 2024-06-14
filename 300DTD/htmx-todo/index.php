<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTMX To Do</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://unpkg.com/htmx.org@1.9.10" integrity="sha384-D1Kt99CQMDuVetoL1lrYwg5t+9QdHe7NLX/SoJYkXDFfX37iInKRy5xLSi8nO7UC" crossorigin="anonymous"></script>
</head>
<body>
    <h1>HTMX TODO</h1>
    <h2>Time to put in the work!!!!</h2>

    <div 
        id="product-list"
        hx-trigger="load"
        hx-get="list.php"
        hx-swap="innerHTML"
    >Please wait....</div>
    

<form 
hx-trigger="submit"
hx-post="add.php"
hx-target="#product-list"
hx-on::after-request="this.reset()" 
 >
        <label>task</label>
        <input name="name" type="text">
 
        <input type="submit">
    </form>

</body>
</html>