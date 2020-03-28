
<?php # Script 9.2 - mysqli_connect.php

// This file contains the database access information.
// This file also establishes a connection to MySQL,
// selects the database, and sets the encoding.

// Set the database access information as constants:
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'message_board');


// Make the connection:
$dbc = new MySQLi(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)   OR die('Could not connect to MySQL: ' . mysqli_connect_error() );

// Verify the connection:
if ($dbc->connect_error) {
	echo $dbc->connect_error;
	unset($dbc);
} else { // Establish the encoding.
	$dbc->set_charset('utf8');
}




// Set the encoding...
mysqli_set_charset($dbc, 'utf8');