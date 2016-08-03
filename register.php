<?php

 
if ($_SERVER['REQUEST_METHOD'] == 'POST' )
{
    require ('../../ba_connect_db.php');
    
    $errors = array();
    
/* @var $_POST type */
    if ( empty($_POST['name']) )
    {
        $errors[] = 'Enter your first name.';
    }
    else
    {
        $n = mysqli_real_escape_string( $link, trim( $_POST['name']) );
    } 
    
    if (empty($_POST['email1'])) 
    {
        $errors[] = 'Enter your email.';
    }
    else 
    {
        $e = mysqli_real_escape_string( $link, trim($_POST['email1']) );
    }
    
      if ( !empty($_POST[ 'password1' ] ) )
  {
    if ( $_POST[ 'password1' ] != $_POST[ 'password2' ] )
    { $errors[] = 'Passwords do not match.' ; }
    else
    { $p = mysqli_real_escape_string( $link, trim( $_POST[ 'password1' ] ) ) ; }
  }
  else { $errors[] = 'Enter your password.' ; }

if (empty($errors)) {
    $q = "SELECT id FROM users_db WHERE email='$e'";
    $r = mysqli_query($link, $q);
    if (mysqli_num_rows($r) != 0)  
    { $errors[] = 'Email is already registered! <a href="login.php">Login</a>'; }
}

if (empty($errors)) {
    $q = "INSERT INTO users_db (name, password, email, date) VALUES ('$n', SHA1('$p'), '$e', NOW() )";
    $r = mysqli_query( $link, $q );
    if ($r) {
         echo '<h1>Registered!</h1><p>You are now registered.</p><p><a href="login.php">Login</a></p>'; 
    }
    mysqli_close($link);
    exit();
}
else 
  {
    echo '<h1>Error!</h1><p id="err_msg">The following error(s) occurred:<br />' ;
    foreach ( $errors as $msg )
    { echo " - $msg<br />" ; }
    echo 'Please try again.</p>';
    # Close database connection.
    mysqli_close( $link );
  }  
}
?>
