<?php # LOGIN HELPER FUNCTIONS.

# Function to load specified or default URL.
function load( $page = 'login.php' )
{
  # Begin URL with protocol, domain, and current directory.
  $url = 'http://' . $_SERVER[ 'HTTP_HOST' ] . dirname( $_SERVER[ 'PHP_SELF' ] ) ;

  # Remove trailing slashes then append page name to URL.
  $url = rtrim( $url, '/\\' ) ;
  $url .= '/' . $page ;

  # Execute redirect then quit. 
  header( "Location: $url" ) ; 
  exit() ;
}

# Function to check name address and password. 
function validate( $link, $name = '', $password = '')
{
  # Initialize errors array.
  $errors = array() ; 

  # Check name field.
  if ( empty( $name ) ) 
  { $errors[] = 'Please enter your name to log in.' ; }  //note: in HTML5 i can set up its own validation
  else  { $n = mysqli_real_escape_string( $link, trim( $name ) ) ; }

  # Check password field.
  if ( empty( $password ) ) 
  { $errors[] = 'Please enter your password.' ; }  //note: HTML5 has its own validation
  else { $p = mysqli_real_escape_string( $link, trim( $password ) ) ; }

  # On success retrieve user_id, first_name, and last name from 'users' database.
  if ( empty( $errors ) ) 
  {
    $q = "SELECT id, name FROM users_db WHERE name='$n' AND password=SHA1('$p')" ;  
    $r = mysqli_query ( $link, $q ) ;
    if ( mysqli_num_rows( $r ) == 1 ) 
    {
      $row = mysqli_fetch_array ( $r, MYSQLI_ASSOC ) ;
      return array( true, $row ) ; 
    }
    # Or on failure set error message.
    else { $errors[] = 'Name and password not found.' ; }
  }
  
  # On failure retrieve error message/s.
  return array( false, $errors ) ; 
}