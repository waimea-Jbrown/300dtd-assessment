<!-- Main navigation menu. Can add logic for user type / access -->

<ul hx-boost="true">

    <li><a href="<?= SITE_BASE ?>/things"    class="<?= $route=='things'    ? 'active' : '' ?>">Things</a>
    <li><a href="<?= SITE_BASE ?>/about"     class="<?= $route=='about'     ? 'active' : '' ?>">About</a>
    <li><a href="<?= SITE_BASE ?>/contact"   class="<?= $route=='contact'   ? 'active' : '' ?>">Contact</a>
    <li><a href="<?= SITE_BASE ?>/signup"   class="<?= $route=='signup'   ? 'active' : '' ?>">signup</a>
    <li><a href="<?= SITE_BASE ?>/newThing"   class="<?= $route=='newThing'   ? 'active' : '' ?>">newThing</a>
    
    <?php if ($loggedIn): ?>

    <li><a href="<?= SITE_BASE ?>/logout"   class="<?= $route=='logout'   ? 'active' : '' ?>">logout</a>
        <?php else: ?>
    <li><a href="<?= SITE_BASE ?>/login"   class="<?= $route=='login'   ? 'active' : '' ?>">login</a>

<?php endif ?>
</ul>
