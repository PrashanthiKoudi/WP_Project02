<!-- 
=======================================================================
***********************************************************************
Author : Shivani Kolanu & Bilvani Veparala
Assignment : Project 2 - Who wants to be a Millionaire
Course : Web Programming
Assignment Description : Creating a game called Who wants to be a Millionaire which is a kind of quiz game.
Filename : congrats.php
************************************************************************
========================================================================  -->

<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Millionaire</title>
        <link rel="stylesheet" href="congrats_style.css">
        <link rel="icon" type="image/x-icon" href="img/logo.png">


    </head>

    <body>
        <audio controls autoplay src="congo.mp3" style="display:none"></audio>

        <?php 
        if($_SESSION['count'] == 15){ 
            header("location:congrats_main.php");
        ?>

        <!-- Congratulations! You have won $1 MILLION! 

        <a href="logout.php">Logout</a> -->

        

       <?php } else { 
        $c = $_SESSION['count']-1;
        ?>
        <div class="won">

            Congratulations! You have won <h1><?php echo $_SESSION['full_data'][$c][0]; ?></h1>
            <br>
            <a href="game_main.php">Continue the game</a>
            <br><br>
            <a href = "logout.php">Logout</a> <br><br>
        </div>
        


      <?php }
        
        ?>
    </body>
</html>