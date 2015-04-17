<?php 

require_once 'product_array.php';


$options = '';
foreach($products as $key => $product) {
    $options .= "<option value=\"$key\">$product</option>";
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
    
<?php require_once 'header.php' ?>

<main>
    <h1>Browse Products</h1>
    <form action="product_page.php"> Products:
       <select name="product_id">
            <?php echo $options; ?>
        </select> Quantity:
        <input type="text" name="quantity">
        <input type="submit">
    </form>
    </main>
 
<?php require_once 'footer.php' ?>

</body>
</html> 