<?php
/**
 * Kerrie Low & Rob Wood
 * 1.13.20
 * Full Stack Web Development
 *
 */
// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
$title = "Donut";
$jumbotron = "index.php";
$description = "Git workflow demo";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- bootstrap -->
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- stylesheet -->
    <link rel="stylesheet" href="">
    <!-- title -->
    <title><?php $title ?></title>
</head>
<body>
<!-- header -->
<div class="container-fluid jumbotron jumbotron-fluid">
    <h2 class="text-center text-monospace"><?php $jumbotron ?></h2>
    <div class="container d-flex justify-content-between">
        <p><?php $description ?></p>
        <p class="lead">Written by Kerrie Low & Rob Wood</p>
    </div>
</div> <!-- /header -->

<div class="container">
    <h1>Here is an H1!</h1>
    <h2>Here is an H2!</h2>
    <h3>Here is an H3!</h3>
    <h4>Here is an H4!</h4>
    <h5>Here is an H5!</h5>
    <h6>Here is an H6!</h6>
    <h8>Here is an H8!</h8>

</div>
<!-- jQuery -->
<!-- slim jQuery does not support AJAX -->
<script src="//code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- my JS -->
<script src=""></script>
</body>
</html>
