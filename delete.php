<html>
<body>

<?php

	// set your infomation.
	$hostname		=	'localhost';
	$username	=	'root';
	$password	=	'';	
	$dbname	=	'Store';
	
	
	// connect to the mysql database server.
	$connect = @mysql_connect ( $hostname, $username, $password ) ;
    $name1= $_POST['FirstName'];
$name2= $_POST['FirstName'];
    $phone= $_POST['PhoneNumber'];

	if ( $connect )
	{
		mysql_select_db ( $dbname, $connect );
        $query = "DELETE FROM contacts WHERE PhoneNumber='" . $phone . "'";

		// $query="DELETE FROM contacts FirstName={$name1} " ;

		
		if ( @mysql_query ( $query ) )
			{
				echo 'Record Deleted Successfuly';  
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