<?php
   
    echo '<h3>Messages are displayed for this Website</h3>';
    require('mysqli_connect.php');    
       
    $query = "SELECT * from messages";
   
    $rows = $dbc->query($query); 
 
    $num = $rows->num_rows;
    if ($num > 0) 
     { 
      
    echo '<table class="table table-dark">
      <thead>
      <tr>
        <th align="left"><bold>User Name:</bold></th>
        <th align="left"><bold>Message:</bold></th>
      </tr>
      </thead>
      <tbody>
    ';
        
	while ($row = $rows->fetch_object())
    {
    echo '<tr>
      <td align="left">' . $row->username . '</td>
      <td align="left">' . $row->message . '</td>
      </tr>
		';
	}

	echo '</tbody></table>'; 

	$rows->free();  
 	unset($rows);

  } 
else 
{  
	echo '<p class="error">There are currently no users .</p>';
}
 
$dbc->close();
unset($dbc); 
?>

