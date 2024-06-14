<body>

    <h1>Doughnut</h1>

    <form method="post"
          action="add-picture.php"
          enctype="multipart/form-data">

        <h2>Add a New Doughnut</h2>

        <label>Title</label>
        <input type="text" name="title" required>

        <label>Image File</label>
        <input type="file"
               name="image"
               accept="image/*"
               required>

        <input type="submit" value="Add">
    </form>

    <main>

<?php

    require_once 'utils.php';

    $db = connectToDB();

    // Get the picture associated info, but NOT the image data
    $query = 'SELECT id, title FROM pictures ORDER BY id DESC';

    try {
        $stmt = $db->prepare($query);
        $stmt->execute();
        $pictures = $stmt->fetchAll();
    }
    catch (PDOException $e) {
        consoleLog($e->getMessage(), 'DB Fetch Pictures', ERROR);
        die('There was an error getting pictures from the database');
    }

    // Work through all pictures
    foreach ($pictures as $picture) {

        $imageURL = 'image.php?id=' . $picture['id'];

        echo '<div>';
        echo   '<h2>' . $picture['title'] . '</h2>';
        echo   '<img src="' . $imageURL . '">';
        echo '</div>';
    }
?>
</main>
</body>
</html>

