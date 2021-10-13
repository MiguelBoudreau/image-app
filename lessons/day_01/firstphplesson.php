<?php
//define some variables
$breakfast = 'coffee';
$dynamic_class = 'special';

$message = "breakfast sounds delicious";

$first = 'this is the first half';
$second = 'This is the second half';

$combined = $first . 'This is a string' . 100 . $second;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>My First PHP Thing</title>
    <style type="text/css">
    h1{
        color: hotpink;
    }

    .special{
        background-color: limegreen;
    }

    </style>
</head> class="<?php echo $dynamic_class; ?>"
<body>
    <h1><?php echo $breakfast; ?></h1>
    <div> This is a normal div</div>

<?php

echo ('<h1>this will show up in the browser</h1>');

echo 'don\'t forget the semicolon';

?>

</body>
</html>
