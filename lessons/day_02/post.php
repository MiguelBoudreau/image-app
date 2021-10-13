<!DOCTYPE html>
<html>
<head>
    <meta chrset="utf-8">
    <title>Example GET Method</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.min.css" integrity="sha512-xiunq9hpKsIcz42zt0o2vCo34xV0j6Ny8hgEylN3XBglZDtTZ2nwnqF/Z/TTCc18sGdvCjbFInNd++6q3J0N6g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<h1>User Survey</h1>

<form action="process.php" method="get">
    <label>What is your favorite color?</label>
    <input type="text" name="fave_color">

    <label>WHat is your favrite animal?</label>
    <input type="text" name="fave_animal">

    <input type="submit" value="Go!">

