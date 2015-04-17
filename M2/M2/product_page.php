<?php  

require_once 'product_array.php';

$product_id = '';
$quantity = '';
$error_message = '';
$product_name = '';
$message = 'Please choose a quantity.';

if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
} else {
    $message = $error_message = 'Please enter a product_id<br>';
}
if (isset($products[$product_id])) {
    $product_name = $products[$product_id];
} else {
    $message = $error_message = 'Please choose one of our products.';
}

if (isset($_GET['quantity'])) {
    $quantity = $_GET['quantity'];
} else {
    $message = $error_message .= 'Please enter a quantity';
}



//===================================================================

if ($product_id !== '' && $quantity) {
    //$message = $product_name;
    if ()
        if ($quantity > 0) {
            $message = "You bought $quantity $product_name computers.";
            if ($product_id == 0 ) {
                if ($quantity >= 7) {
                    $message = "You cannot buy more than 6 $product_name computers.";
                }
            }
        }
}




    // if ($product_id == 1) {
    //         $message = "You bought $quantity Ubuntu Disks.";     
    // } else if ($product_id == 2) {
    //     $message = "You bought $quantity Windows PCs.";
    // } else if ($product_id == 0) {
    //     if ($quantity <= 6) {
    //         $message = "You bought $quantity Macs.";
    //     } else if ($quantity >= 7) {
    //         $message = "You cannot buy 7 or more Macs";
    //     }           
    // } else {
    //     $message = "The product you chose does not exist.";
    // }
// } else {
//     $message = $error_message;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <?php require_once 'links.php' ?>
    
</head>
<body>
    
    <?php require_once "header.php" ?>
    
    <main class="products">

        <?php echo $message; ?>

    </main>

    <?php require_once "footer.php" ?>

</body>
</html>