<!-- =======================================================================
***********************************************************************
Author : Shivani Kolanu & Bilvani Veparala
Assignment : Project 2 - Who wants to be a Millionaire
Course : Web Programming
Assignment Description : Creating a game called Who wants to be a Millionaire which is a kind of quiz game.
Filename : logout.php
************************************************************************
========================================================================  -->

<?php session_start(); /* Starts the session */


$c = $_SESSION['count']-1;
$name = $_SESSION['userdata']['name'];

if($_SESSION['full_data'][$c][0] != ""){
    $amount = $_SESSION['full_data'][$c][0];

}
else{
    $amount = "$0";
}
date_default_timezone_set('EST');

$today = date("m-d-y H:i:s"); 

$old_data = file_get_contents("scores.txt");

$data = "\n".$name. ";" .$amount.";".$today;

$final_data = $old_data.$data;

file_put_contents("scores.txt",$final_data);


session_destroy(); /* Destroy started session */
header("location:login.php");
exit;
?>