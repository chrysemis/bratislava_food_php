<?php

 session_start();
//require ( 'login_tools.php' ) ;
//if ( !isset( $_SESSION[ 'user_id' ] ) ) { load() ; }

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        
        
        if (empty($_POST['subject'])) 
        {
            echo '<p>Please enter subject.</p>';
        }
        if (empty($_POST['message']))
        {
            echo '<p>Please enter a message for your post.</p>';
        }
        
        if (!empty($_POST['subject']) && !empty($_POST['message']))
        {
                require('../../ba_connect_db.php');
                
                $s = mysqli_real_escape_string( $link, $_POST['subject'] );
                $m = mysqli_real_escape_string( $link, $_POST['message'] );
                
                
                $q = "INSERT INTO forum( name, subject, message, post_date ) VALUES ( '{$_SESSION['name']}', '$s','$m', NOW() )";
            
                $r = mysqli_query( $link, $q );
                
            if (mysqli_affected_rows($link) != 1) 
                {
                    echo '<p>Error</p>'.mysqli_error($link); 
                }
                 else { load('forum.php');}
                 
                 mysqli_close($link);
        }
    }
    
?>



