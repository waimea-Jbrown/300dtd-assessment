<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTMX Database Demo</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://unpkg.com/htmx.org@1.9.10" integrity="sha384-D1Kt99CQMDuVetoL1lrYwg5t+9QdHe7NLX/SoJYkXDFfX37iInKRy5xLSi8nO7UC" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Todo list</h1>
    <h2>Do these things</h2>


    <nav>
        filter:
        <button
            hx-trigger="click"
            hx-get="list.php"
            hx-target="product-list"
        
        >All</button>
        <button
        hx-trigger="click"
            hx-get="list.php?priority=1.00"
            hx-target="product-list"
        >P1</button>
        <button
        hx-trigger="click"
            hx-get="list.php?priority=2.00"
            hx-target="product-list"
            >P2</button>
        <button
        hx-trigger="click"
            hx-get="list.php?priority=3.00"
            hx-target="product-list"
            >P3</button>
    </nav>
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
        <label>Name</label>
        <input name="name" type="text">
 
        <label>Priority</label>
        <input name="cost" type="number" step="1" min=1 max=3 require>
 
        <input type="submit">
    </form>

</body>
</html>