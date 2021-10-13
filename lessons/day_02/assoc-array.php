<?php
//make a whole pizza
$pizza = array( 
    'crust'     => 'Cripsy thin crust',
    'sauce'     => 'Red Sauce',
    'Cheese'    => 'mozarella',
    'size'      => '14 imch',
    'vegans'    => true,
);
//add an item
$pizza['dip'] = 'jalepeno ranch';

//change a value
$pizza['sauce'] = 'Alfredo Sauce';

//alphabetize by value
asort($pizza);

//alphabetize by keys
//ksort($pizza);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>

<h1> Your pizza order</h1>

<ul class="pizza">
    <?php foreach( $pizza AS $key => $value ){ ?>   
    <li>
        <b><?php echo $key; ?></b>
        <?php echo $value; ?>
    </li>
    <?php } ?>
</ul>

<pre><?php print_r($pizza); ?></pre>

    
</body>
</html>