<!-- Header typically has the site name which links to home page -->

<h1>
    <a href="<?= SITE_BASE ?>">
        <?= SITE_NAME ?>
    </a>
</h1>

<?php if ($loggedIn) {
    echo '<p>Hello, ' . $_SESSION['user']['forename'] . '<p>';
}

?>
