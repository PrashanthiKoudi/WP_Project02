<!-- =======================================================================
***********************************************************************
Author : Shivani Kolanu & Bilvani Veparala
Assignment : Project 2 - Who wants to be a Millionaire
Course : Web Programming
Assignment Description : Creating a game called Who wants to be a Millionaire which is a kind of quiz game.
Filename : signup-submit.php
************************************************************************
========================================================================  -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Millionaire</title>
        <link rel="stylesheet" href="signup_style.css">
        <link rel="icon" type="image/x-icon" href="img/logo.png">

    </head>
    <body>
        <form>

            <fieldset>

                <h1>Thank you!</h1>
                <br>
                Welcome to Who wants to be a Millionaire, <?php print $_POST["name"] ?> 
                <br>
                    <a href="login.php"> Log in to play right now! </a>
                <br><br><br>
                <a href="signup.php">
                        <img src="img/back.png" alt="back">
                        Back to front page
                </a>
            </fieldset>

            <?php
            $old_data = file_get_contents("signup_creds.txt");

            $data = "\n".$_POST['name']. "," .$_POST['email'].",".$_POST['dob'].",".$_POST['gender'].",".$_POST['phone'].",".$_POST['password'];

            $final_data = $old_data.$data;

            file_put_contents("signup_creds.txt",$final_data);

            $name_for_img = str_replace(" ","_",trim($_POST['name']));
            $name_updated = strtolower($name_for_img);

            $dir = "img/";
            $file = $dir.$name_updated.".jpeg";
            move_uploaded_file($_FILES["photo"]["tmp_name"],$file);
            ?>

        </form>
        
    </body>
</html>