<!-- 
=======================================================================
***********************************************************************
Author : Shivani Kolanu & Bilvani Veparala
Assignment : Project 2 - Who wants to be a Millionaire
Course : Web Programming
Assignment Description : Creating a game called Who wants to be a Millionaire which is a kind of quiz game.
Filename : congrats_main.php
************************************************************************
========================================================================  -->

<?php
    session_start();
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Millionaire</title>
        <link rel="stylesheet" href="congrats_main_style.css">
        <link rel="icon" type="image/x-icon" href="img/logo.png">

    </head>
    <body>
    <audio controls loop autoplay src="final_congrats.mp3" style="display:none"></audio>

    <img src="img/logo.png">

    <h1>$1 MILLION</h1>

    <h2><?php echo $_SESSION['userdata']['name'] ?></h2>

    <a href = "logout.php">Logout</a>


    </body>
</html>