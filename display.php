<html>
<body>
Testy
<?php

	// set your infomation.
	$hostname		=	'localhost';
	$username		=	'root';
	$password		=	'';	
	$dbname	=	'Store';
	
	
	// connect to the mysql database server.
	$connect = @mysql_connect ( $hostname, $username, $password ) ;

	if ( $connect )
	{
		mysql_select_db ( $dbname, $connect );
		$sql = "SELECT FirstName,LastName,PhoneNumber FROM contacts";
		?>
		<table border ="1" cellspacing="0" cellpadding="10">
		<tr>
			<th>FirstName</th>
			<th> LastName</th>
			<th>PhoneNumber</th>
			

		</tr>
		<?php
		if ( @mysql_query ( $sql) )
		{
			$query = mysql_query ( $sql );

			$row = mysql_fetch_assoc ( $query );
			do {

				?>
				<tr>
				  <td><?php echo $row['FirstName']; ?> </td>
				  <td><?php echo $row['LastName']; ?> </td>
				  <td><?php echo $row['PhoneNumber']; ?> </td>
			
			   
				<tr>
				<?php
			} while ( $row = mysql_fetch_assoc ( $query ) );

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