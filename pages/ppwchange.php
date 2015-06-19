
<?php
include 'connection.php';

	$username = $_POST["Username"];
	$currentPPW = $_POST["CurrentPPW"];
	$newPPW = $_POST["ReNew"];
	$dbhost = "localhost";
	$buser = "root";
	$dbpass = "";
	$dbname = "bus_reservation";
	$error = false;
	//$connection = mysqli_connect($dbhost, $buser, $dbpass, $dbname);
	if(! $conn )//if connection error
	{
		$error = true;
		die('Could not connect: ' . mysql_error());
	}
	else//if connection pass
	{
		$sql = "select password from system_user where system_user_name='" . $username . "'";
		$result = mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($result))
		{	
			
			while ($row = mysqli_fetch_assoc($result))
			{	
               if($currentPPW == $row['password'])
			   {
				   $sql = "UPDATE system_user SET password = '" . $newPPW . "' where system_user_name = '".$username."'";
				   if ($conn->query($sql) === TRUE) 
				   {
						echo "Record updated successfully";
                      header("refresh:2;url=index.php");
				   }				
				   else 
				   {
					   $error = true;
						echo "Error updating record: connection problem " . $connection->error;
                       header("refresh:5;url=password_chang.html");
				   }

					$conn->close();
				   
			   }
			   else
			   {
				    $error = true;
					echo "Error password or User name";
				   header("refresh:5;url=password_chang.html");
				   
			   }
					
			   
			   
            }
		}
		else
		{
			echo "Error password or Username";
		  header("refresh:5;url=password_chang.html");	
	   		
		}
		
        
	}
	
	
?>


			