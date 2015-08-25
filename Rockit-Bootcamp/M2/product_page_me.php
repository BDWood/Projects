<?php  

require_once 'product_array.php';

$p_id = '';
$qty = '';
$p_name = '';
$msg = '';

if (isset($_GET['qty']) && is_numeric($_GET['qty'])) {
    $qty = $_GET['qty'];
} 

if (isset($_GET['p_id'])) {
    $p_id = $_GET['p_id'];
}

if (isset($products[$p_id])) {
    $p_name = $products[$p_id];
}


//===================================================================

if ($p_id !== '' && $qty && $p_name) {
    if ($qty > 0) {
        $msg = "You bought $qty $p_name.";
        if ($p_id == 0 ) {
            if ($qty >= 7) {
                $msg = "You cannot buy more than 6 $p_name.";
            }
        }
    }
} else {
    $msg = "We are sorry, but there is an error in your selection.";
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