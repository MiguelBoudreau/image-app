<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>form processor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.min.css" integrity="sha512-xiunq9hpKsIcz42zt0o2vCo34xV0j6Ny8hgEylN3XBglZDtTZ2nwnqF/Z/TTCc18sGdvCjbFInNd++6q3J0N6g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>



    <?php
        if( isset( $_REQUEST['fave_color'] )
        AND isset( $_REQUEST['fave_animal'] )
        AND $REQUEST['fave_color'] != ''
        AND $_REQUEST['fave_animal'] != ''
    ){
    ?>

    <h1>Your Survey Answers</h1>

    <p> Your favorite color is <?php echo $_REQUEST['fave_color']; ?></p>
    <p> Your favorite  animal is<?php echo $_REQUEST['fave_animal']; ?></p>

    <?php
    }else{
        echo '<h1>Something went wrong, go take the survery again</h1>';
    }
    ?>

    <a href="post.php" class="button">Take the POST Survery Again</a>

    <div class="debug">
        <h3>POST data</h3>
        <pre><?php print_r( $_POST ); ?></pre>

        <h3>GET data</h3>
        <pre><?php print_r( $_GET ); ?></pre>
    </div>


</body>
</html>