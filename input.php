<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    
$username=$_REQUEST['user'];
$message=$_REQUEST['message'];
   
if(empty ($username) or empty($message) )
        {
		 echo "Please fill the empty field..,";
		}
    else
    {
         require('mysqli_connect.php');
        
        $q = "INSERT INTO messages VALUES(? , ?)";
        
        $st=$dbc->prepare($q);
        
        $st->bind_param('ss',$username,$message);
        
        $username=strip_tags($_POST['user']);
        $messsage=strip_tags($_POST['message']);
        
        $st->execute();
        
        if($st->affected_rows == 1)
        {
            echo " Message has been posted on the wall.";
        }
        else
        {
            echo '<p>' . $st->error . '</p>';
        }
        
        $st->close();
        unset($st);
        
        $dbc->close();
	    unset($dbc);
        
        
    }
}
?>