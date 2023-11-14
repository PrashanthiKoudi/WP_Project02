<!-- =======================================================================
***********************************************************************
Author : Shivani Kolanu & Bilvani Veparala
Assignment : Project 2 - Who wants to be a Millionaire
Course : Web Programming
Assignment Description : Creating a game called Who wants to be a Millionaire which is a kind of quiz game.
Filename : signup.php
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
        <form method="post" action="signup-submit.php" enctype="multipart/form-data">
            <fieldset>
                <legend>New Player Signup:</legend>
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
                            Email ID:
                    </label>
                    <div class="column">
                        <input type="email" name="email" id="email" size="16" required>
                    </div>
                </div><br><br>
                <div class="field">
                    <label class="left">
                            Date of Birth:
                    </label>
                    <div class="column">
                        <input type="date" name="dob" id="dob" required>
                    </div>
                </div><br><br>
                <div class="field">
                    <label class="left">
                            Gender:
                    </label>
                    <div class="column">
                        <input type="radio" id="Male" name="gender" value="M">
                        <label for="Male">Male</label>
                        <input type="radio" id="Female" name="gender" value="F">
                        <label for="Female">Female</label><br>
                    </div>
                </div><br><br>
                
                <div class="field">
                    <label class="left">
                            Phone:
                    </label>
                    <div class="column">
                        <input type="text" name="phone" id="phone" size="16" required>
                    </div>
                </div><br><br>
                <div class="field">
                    <label class="left">
                            Password:
                    </label>
                    <div class="column">
                        <input type="password" name="password" id="password" size="16" required>
                    </div>
                </div><br><br>
                <div class="field">
                    <label class="left">
                            Upload Photo:
                    </label>
                    <div class="column">
                        <input type="file" name="photo" id="photo" accept=".jpeg" required>
                    </div>
                </div><br><br>
                <input type="submit" value="Sign Up"> <br><br>
                Already Signed up? <a href="login.php">Click Here to Login!</a>

            </fieldset>
        </form>

    </body>
</html>