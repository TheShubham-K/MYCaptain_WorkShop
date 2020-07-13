<?php
    session_start();
    
    if($_SESSION['user_email'] == "subhamkumar032@gmail.com"){
        echo "Welcome to ".$_SESSION['user_email'];
    }
    else
    {
        echo "You need to login view this pages";
    }

?>