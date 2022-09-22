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
    $name2= $_POST['LastName'];
    $phone= $_POST['PhoneNumber'];
   

	if ( $connect )
	{
		mysql_select_db ( $dbname, $connect );

		$query="UPDATE `contacts` SET 
        `FirstName` = 'name1', 
        `LastName` = 'name2', 
        `PhoneNumber` = 'phone'
        WHERE PhoneNumber='" . $phone . "'" ;

		
		if ( @mysql_query ( $query ) )
			{
				echo 'Record Edited Successfuly';
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