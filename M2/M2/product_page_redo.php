<?php 

$product_id = '';
$quantity = '';
$error_message; '';

if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
} else {
    $error_message = 'Please enter a product_id<br>'
}

if (isset($_GET['quantity'])) {
    $quantity = $_GET['quantity'];
} else {
    $error_message .= 'Please enter a quantity'
}

if ($product_id && $quantity) {
    if ($product_id == 0) {
        echo 'mac';
    }
}