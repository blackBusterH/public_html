<?php require "funcs.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Test</title>
</head>
<body>
    <!-- Header -->
    <?php get_header('header.php'); ?>

    <!-- Page main content -->
    <div class="content">
        <h1>Welcome to <span class="animCont2">Brendon's</span> starting <span class="animCont">portfolio</span></h1>
        <p>Welcome to my porfolio here I will be showing my scripts, websites and much more. Please feel free to look around and report any found bugs as well as contact me if you have any questions regarding the website or the stuff I offer.</p>
    </div>

    <div class="shoppingList">
        <div class="item">
            <h1>Fast</h1>
            <img src="icons/fast.svg" alt="" style="transform: scale(0.5);">
        </div>
        <div class="item">
            <h1>Flexible</h1>
            <img src="icons/flexible.png" alt="" style="margin-top: 90px;">
        </div>
        <div class="item">
            <h1>Safe</h1>
            <img src="icons/safe.svg" alt="" style="transform: scale(0.5);">
        </div>
        <div class="item">
            <h1>Amazing</h1>
            <img src="icons/amazing.svg" alt="" style="transform: scale(0.5);">
        </div>
    </div>

    <!-- Footer -->
    <?php get_footer('footer.php'); ?>
</body>
</html>