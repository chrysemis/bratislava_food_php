<?php

session_start();

if(!isset($_SESSION['id']))
{
    echo '<p>You are not logged in! No need to log out.</p>';
}  
else 
{
    $_SESSION = array();   //clears existing session variables
    session_destroy();    //ends session
    
    echo '<h1>Goodbye!</h1><p>You are now logged out.</p>';
}
    

