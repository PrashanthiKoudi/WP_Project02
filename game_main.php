<!-- 
=======================================================================
***********************************************************************
Author : Shivani Kolanu & Bilvani Veparala
Assignment : Project 2 - Who wants to be a Millionaire
Course : Web Programming
Assignment Description : Creating a game called Who wants to be a Millionaire which is a kind of quiz game.
Filename : game_main.php
************************************************************************
========================================================================  -->

<?php
    session_start();
    $contents = file_get_contents("qsnans.txt");
        $exploded_values = explode("\n",$contents);
        
        $entire_data_array = array(); // Create an empty array to hold the array of arrays

        foreach ($exploded_values as $line) {
            $values = explode(";", $line); // Split each line into an array of values based on a comma
            $entire_data_array[] = $values; // Add the array of values to the array of arrays
        }
        $_SESSION['full_data'] = $entire_data_array;

        if(isset($_SESSION['count'])){
            $count = $_SESSION['count'];
        } else{
            $count = 0;
            $_SESSION['count']=0;
        }

        if(isset($_POST['submit'])){
            if(trim($_SESSION['full_data'][$count][6]) == trim($_POST['ans']) ){
                $_SESSION['count'] = $count+1;
                header("location:congrats.php");

            } else{
                $_SESSION['wrong'] = 1;
                print_r($_SESSION['wrong']);
                header("location:drop.php");
            }
        }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Millionaire</title>
        <link rel="stylesheet" href="game_index_style.css">
        <link rel="icon" type="image/x-icon" href="img/logo.png">

    </head>
    <body>
        <audio controls loop autoplay src="qsns_music.mp3" style="display:none"></audio>

        <form method="post">

            <div class="full">
                <div class = "images">
                    <div class = "left">
                    <?php
                    $name_for_img = str_replace(" ","_",trim($_SESSION['userdata']['name']));
                    $name_updated = strtolower($name_for_img);
                    echo "<img src = 'img/".$name_updated.".jpeg' alt='match'><br>";
                    ?>
                    </div>
                    <div class="right">
                        <img src="img/host.png" alt="host">
                    </div>
                </div><br><br><br><br>
                <div class="quiz">

                    <div id="amnt">
                        <center><?php echo $_SESSION['full_data'][$count][0] ?></center>
                    </div>
                    
                    <div id="qsn">
                    
                    <p><?php echo $_SESSION['full_data'][$count][1] ?></p>

                    </div><br>
                    <table>
                        <!-- <tr>
                            <th id="qsn"></th>
                        </tr> -->
                        <tr>
                            <td>
                                <input type="radio" id="<?php echo $_SESSION['full_data'][$count][2] ?>" name="ans" value="<?php echo $_SESSION['full_data'][$count][2] ?>">
                                <label for="<?php echo $_SESSION['full_data'][$count][2] ?>"><?php echo $_SESSION['full_data'][$count][2] ?></label>
                            </td>
                            <td>
                                <input type="radio" id="<?php echo $_SESSION['full_data'][$count][3] ?>" name="ans" value="<?php echo $_SESSION['full_data'][$count][3] ?>">
                                <label for="<?php echo $_SESSION['full_data'][$count][3] ?>"><?php echo $_SESSION['full_data'][$count][3] ?></label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" id="<?php echo $_SESSION['full_data'][$count][4] ?>" name="ans" value="<?php echo $_SESSION['full_data'][$count][4] ?>">
                                <label for="<?php echo $_SESSION['full_data'][$count][4] ?>"><?php echo $_SESSION['full_data'][$count][4] ?></label>
                            </td>
                            <td>
                                <input type="radio" id="<?php echo $_SESSION['full_data'][$count][5] ?>" name="ans" value="<?php echo $_SESSION['full_data'][$count][5] ?>">
                                <label for="<?php echo $_SESSION['full_data'][$count][5] ?>"><?php echo $_SESSION['full_data'][$count][5] ?></label>
                            </td>
                        </tr>
                    </table>
                </div>
            </div><br>
            <center><input name="submit" type="submit" value="Submit Answer">&nbsp;<a class="drop" href="drop.php"> Exit the game</a> </center>

        </form>
        
    </body>
</html>