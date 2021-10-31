<?php
    session_start();
    // Change this to your connection info.
    $host = 'localhost:3306';
    $username = 'root';
    $password = '';
    $dbname = 'webbanhoa_db';
    // Try and connect using the info above.
    // $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
    // if ( mysqli_connect_errno() ) {
    //     // If there is an error with the connection, stop the script and display the error.
    //     exit('Failed to connect to MySQL: ' . mysqli_connect_error());
    // }

    $conn = mysqli_connect($host, $username, $password, $dbname);
	mysqli_set_charset($conn, 'utf8');
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
?>