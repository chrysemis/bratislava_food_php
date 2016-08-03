<?php # PROCESS LOGIN ATTEMPT.

# Check form submitted.
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
  # Open database connection.
  require ( '../../ba_connect_db.php' ) ;

  # Get connection, load, and validate functions.
  require ( 'login_tools.php' ) ;

  # Check login.
  list ( $check, $data ) = validate ( $link, $_POST[ 'name' ], $_POST[ 'password' ] ) ;

  # On success set session data and display logged in page.
  if ( $check )  
  {
    # Access session.
    session_start();
    $_SESSION[ 'id' ] = $data[ 'id' ] ;
    $_SESSION[ 'name' ] = $data[ 'name' ] ;
    echo "<p>Hello {$_SESSION['name']}, you are now logged in.</p>";
   }
  # Or on failure set errors.
  else { $errors = $data; } 

  if ( isset( $errors ) && !empty( $errors ) )
{
 echo '<p id="err_msg">Oops! There was a problem:<br />' ;
 foreach ( $errors as $msg ) { echo " - $msg<br />" ; } 
 echo 'Please try again or <a href="register.php">Register</a></p>' ;
}

  # Close database connection.
  mysqli_close( $link ) ; 
}
 

?>