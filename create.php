<html>
<body>
Testx
<?php

	// set your infomation.
	$hostname		=	'localhost';
	$username		=	'root';
	$password		=	'';	
	$dbname	=	'store';
	
	$sql = 'CREATE TABLE `contacts` (
		`ID` int( 11 ) NOT NULL AUTO_INCREMENT,
		`FirstName` VARCHAR( 255 ) NOT NULL,
		`LastName` TEXT NOT NULL,
		`PhoneNumber` VARCHAR( 15 ) NOT NULL,
		
		PRIMARY KEY ( `PhoneNumber` )
	       )';

	// connect to the mysql database server.
	$connect = @mysql_connect ( $hostname, $username, $password ) ;

	if ( $connect )
	{
		// create the database.
		if ( ! @mysql_query ( "CREATE DATABASE $dbname" ) )
		{
			die ( mysql_error() );
		}
		else {
			mysql_select_db ( $database );
			if ( @mysql_query ( $sql ) )
			{
				echo 'Your new table was created successfully!';
			}
			else {
				die ( mysql_error() );
			}
		}
	}
	else {
		trigger_error ( mysql_error(), E_USER_ERROR );
	}

	

			
?>


</body>
</html>