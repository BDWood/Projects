 <?php  

    $product = $_GET['product'];
    
    if ($product == '1') {
        $message = "You chose the Mac";
    } else if ($product == '2') {
        $message = "You chose Ubuntu";
    } else if ($product == '3'){
        $message = "You chose Windows";
    } else {
        $message = "The product you're looking for does not exist.";
    }
 ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="product_page.css">
</head>
<body>
    <?php require_once "header.php" ?>
    
    <main>
        <?php echo $message ?>
    </main>

    <?php require_once "footer.php" ?>
</body>
</html>