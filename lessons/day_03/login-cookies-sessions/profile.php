<?php
session_start();
require('config.php');


//if there is a cookie, use it to recreate the session data
if( isset( $_COOKIE['is_logged_in'] ) ){
    $_SESSION['is_logged_in'] = $_COOKIE['is_logged_in'];
}
if( ! isset( $_COOKIE['is_logged_in'] ) OR ! $_COOKIE['is_logged_in'] ){
    die('You must be logged in to see this page');

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.min.css" integrity="sha512-xiunq9hpKsIcz42zt0o2vCo34xV0j6Ny8hgEylN3XBglZDtTZ2nwnqF/Z/TTCc18sGdvCjbFInNd++6q3J0N6g==" crossorigin="anonymous" />
    <title>Secret Page</title>
</head>
<body>
    <h1>This is Secret Stuff</h1>

    <a href="login.php?action=logout" class="button">Log Out</a>

<?php include( 'debug-output.php'); ?>
</body>
</html>