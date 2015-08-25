<?php  

require_once 'product_array.php';

$p_id = '';
$qty = '';
$p_name = '';
$msg = '';

if (isset($_GET['qty']) && is_numeric($_GET['qty']) && $_GET['qty'] > 0) {
    $qty = $_GET['qty'];
} else {
    exit('Improper Input');
}

if (isset($_GET['p_id']) && is_numeric($_GET['p_id']) && $_GET['p_id'] >= 0){
    $p_id = $_GET['p_id'];
} else {
    exit('Improper Input');
}




//===================================================================

if (isset($products[$p_id])) {
   $p_name = $products[$p_id];
    if ($p_id == 0 && $qty >= 7) {
        $msg = "You can't buy more than 6 Macs";
    } else {
        $msg = "You bought $qty $p_name";
    }

} else {
    $msg = 'out of range';
}



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

        <?php echo $msg; ?>

    </main>

    <?php require_once "footer.php" ?>

</body>
</html>