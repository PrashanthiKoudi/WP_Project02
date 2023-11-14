<!-- 
=======================================================================
***********************************************************************
Author : Shivani Kolanu & Bilvani Veparala
Assignment : Project 2 - Who wants to be a Millionaire
Course : Web Programming
Assignment Description : Creating a game called Who wants to be a Millionaire which is a kind of quiz game.
Filename : login.php
************************************************************************
======================================================================== -->

<?php


    session_start();
    error_reporting(E_ALL ^ E_WARNING);

    function check_user($name,$password){
        $contents = file_get_contents("signup_creds.txt");
        $exploded_values = explode("\n",$contents);
        
        $entire_data_array = array(); // Create an empty array to hold the array of arrays

        foreach ($exploded_values as $line) {
            $values = explode(",", $line); // Split each line into an array of values based on a comma
            $entire_data_array[] = $values; // Add the array of values to the array of arrays
        }


        
        foreach ($entire_data_array as $arr){
 
            if(count($arr) > 1){
                if(trim($arr[0]) == trim($name)){

                    if(trim($arr[5]) == trim($password)){
                        return true;
                    }
    
                }
            }

        }
        return false;

        //This function checks if the input user is already registered into our system or not.

    }
    if(isset($_POST['submit'])){
        $name = $_POST["name"];
        $password = $_POST["password"];

        $checking_user = check_user($name,$password);

        if($checking_user){
            $_SESSION['userdata']['name'] = $name;
            $_SESSION['userdata']['password'] = $password;
            header("Location: game_index.php"); 

        } else{
            echo "<p style='color:white;font-size:large'>Invalid User Details, please try again!</p>";
        }
        
    }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Millionaire</title>
        <link rel="stylesheet" href="signup_style.css">
        <link rel="icon" type="image/x-icon" href="img/logo.png">

    </head>

    <body>
        <form method="post" action="" >
        <fieldset>
            <legend>Player Login:</legend>
            <div class="field">
                        <label class="left">
                                Name:
                        </label>
                        <div class="column">
                            <input type="text" name="name" id="name" size="16" required>
                        </div>
            </div> <br><br>
            <div class="field">
                    <label class="left">
                            Password:
                    </label>
                    <div class="column">
                        <input type="password" name="password" id="password" size="16" required>
                    </div>
            </div><br><br>
            <input type="submit" value="Login" name="submit"> <br><br>
            Not a user? <a href="signup.php">Click Here to Signup!</a>

        </fieldset>
        </form>
    </body>
</html>    