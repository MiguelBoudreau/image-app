<?php
//create a list of pizza toppings
$pizza_toppings = array( 'Mushrooms', 'Onions', 'Bell Peppers' );
$pizza_toppings[] = 'Fresh Basil';

shuffle($pizza_toppings);


//count all the toppings
$number = count( $pizza_toppings);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza!</title>
</head>
<body>
    <h1>Your <?php echo $number; ?> Pizza Toppings:</h1>

    <ul class="toppings_list">
        <?phpforeach( $pizza_toppings AS $value ){
            echo "<li>$Value</li>";
        } ?>
        <li>NAME</li>
    </ul>

    <pre><?php print_r( $pizza_toppings ); ?></pre>

    The first item is <?php echo $pizza_toppings[0]; ?>
    
</body>
</html>