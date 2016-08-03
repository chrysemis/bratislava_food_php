<?php
	
	require('..\..\ba_connect_db.php');
        
        mysqli_select_db($link, 'ba_food');
        
        
	$q = "SELECT * FROM forum";
	$r = mysqli_query($link, $q);
	if (mysqli_num_rows( $r ) > 0)
	{
		echo '<table><tr><th>Posted By</th><th>Subject</th><th id="msg">Message</th></tr>';
		while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
		{
		    echo '<table>
                     <tr><td>' . $row['name'] . '<br /> ' . $row['post_date'] . '</td>
                     <td>' . $row['subject'] . '</td>
                     <td>' . $row['message'] . '</td></tr>';
		}
                echo '</table>' ;
	}
	else 
        { 
            echo '<p>There are currently no messages.</p>';
        }
  
  mysqli_close( $link );
?>

 
  








