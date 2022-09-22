<html>
<body>

<?php

	// set your infomation.
	$hostname		=	'localhost';
	$username		=	'root';
	$password	=	'';	
	$dbname	=	'Store';
	
	
	// connect to the mysql database server.
	$connect = @mysql_connect ( $hostname, $username, $password ) ;

	if ( $connect )
	{
		mysql_select_db ( $dbname, $connect );

		$query="INSERT INTO contacts (FirstName, LastName , PhoneNumber )
			VALUES
			('$_POST[FirstName]','$_POST[LastName]','$_POST[PhoneNumber]')
		
		if ( @mysql_query ( $query ) )
			{
				echo 'Record Added Successfuly';
			}
			else {
				die ( mysql_error() );
			}	
	        
	}
	else {
		trigger_error ( mysql_error(), E_USER_ERROR );
	}

	

        
			
?>


</body>
</html>