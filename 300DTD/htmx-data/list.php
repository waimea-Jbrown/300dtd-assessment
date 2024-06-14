<?php

// in reality this would be a myaql queery
include 'data.php';
echo '<ul>';

foreach ($products as $id => $product) {
    echo '<li
        hx-get="info.php?id=' .  $id . '"
        hx-target="#product-info"
        hx-trigger="click"
    >' . $product['name'] . '</li>';
}

echo '</ul>';
