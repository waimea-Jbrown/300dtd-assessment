<?php
    require_once 'common-functions.php';
    require_once 'common-top.php';

?>

<h2>New Guide</h2>

<form method="POST" action="process-new-project.php">

    <label>Guide Name</label>
    <input name="name" type="text" required>

    <label>steps / Description</label>
    <textarea name="description" required></textarea>

    <label>Date should be completed by</label>
    <input name="due" type="date" min="<?= Date('Y-m-d') ?>" required>

    <input type="submit" value="Add Project">

</form>

<?php
    require_once 'common-bottom.php';
?>