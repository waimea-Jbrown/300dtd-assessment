<?php

$id = $_GET['id'];


include 'data.php';

$product = $products[$id];

echo '<h3>' . $product['name'] . '</h3>';
echo '<p>' . $product['desc'] . '</p>';
echo '<p>' . $product['cost'] . 'each</p>';