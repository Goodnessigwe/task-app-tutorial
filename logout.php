<?php
//start the session
session_start();

//destroy all session data
session_unset(); //free up all session variable
session_destroy(); //Destroy the session

//Redirect the user to the login page
header("location: login.php");
exit(); // ensure no further code is executed