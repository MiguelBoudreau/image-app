<?php 
require('CONFIG.php');
//create a list of all products
$products = array(

    1 => array(
        'title' => 'Laptop',
        'price' => 29.95,
        'image' => 'https://picsum.photos/id/0/200/200',
        ),
    2 => array(
        'title' => 'Pug Blanket',
        'price' => 75.00,
        'image' => 'https://picsum.photos/id/1025/200/200',
        ),
    3 => array(
        'title' => 'Sneakers',
        'price' => 49.45,
        'image' => 'https://picsum.photos/id//200/200',
        ),
    4 => array(
        'title' => 'Strawberry',
        'price' => 6.00,
        'image' => 'https://picsum.photos/id/1025/200/200',
        ),
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-dimensional array example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.min.css" integrity="sha512-xiunq9hpKsIcz42zt0o2vCo34xV0j6Ny8hgEylN3XBglZDtTZ2nwnqF/Z/TTCc18sGdvCjbFInNd++6q3J0N6g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style type="text/css">

    .grid{
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    </style>
</head>
<body>


<?php
if( isset( $_GET['product_id'] ) ){
    $id = $_GET['product_id'];
?>
<div class="message">You just added <?php echo $products[$id]['title']; ?> to your cart</div>

<?php } ?>

<h1>Product Catalog</h1>
    <div class="container grid">
        <?php foreach( $products AS $id => $product ){ ?>
            <div class="product">
                <img src="<?php echo $product['image'] ?>">
                <h2><?php echo $product['title']; ?></h2>
                <span class="Price">$<?php echo $product['price']; ?></span>
                <br>
                <a href="?product_id=<?php echo $id; ?>" class="button">Buy Now</a>
        </div>
        <?php } ?>

   
    </div>

<?php include('debug-output.php'); ?>
    
</body>
</html>