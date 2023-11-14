
<!-- =======================================================================
***********************************************************************
Author : Shivani Kolanu & Bilvani Veparala
Assignment : Project 2 - Who wants to be a Millionaire
Course : Web Programming
Assignment Description : Creating a game called Who wants to be a Millionaire which is a kind of quiz game.
Filename : logout_from_index.php
************************************************************************
========================================================================  -->

<?php session_start(); /* Starts the session */
session_destroy(); /* Destroy started session */
header("location:login.php");
exit;
?>