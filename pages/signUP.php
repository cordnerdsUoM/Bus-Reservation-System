
<?php
include 'connection.php';
	$username = $_POST['Username'];
	$ppw = $_POST['ReNew'];
	$job = $_POST['job'];
	
	//connection
	$dbhost ="localhost";
	$dbname = "bus_reservation";
	$dbpass = "";
	$dbuser = "root";
	//$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	
	if(mysqli_connect_errno())
	{
		die("Database Connection Failed". mysqli_connect_error()."(".mysqli_connect_errno().")");
	}
	else//if connection error occurred
	{
                $sql = "SELECT system_user_ID FROM system_user ORDER BY system_user_ID DESC LIMIT 1";
                $result = $conn->query($sql);
                $row = $result -> fetch_assoc();
                $ID = ++$row['system_user_ID'];
                
		$sql = "INSERT INTO `bus_reservation`.`system_user` (`system_user_ID`,`system_user_Name`, `Password`, `User_Type`) VALUES (".$ID.", '".$username."', '".$ppw."', '".$job."')";
		if($conn->query($sql) === TRUE)
		{
			echo "Updated successfully";
            header("refresh:2;url=index.php");
		}
		else
		{
			echo "error updating data". $conn->error;
			header("refresh:2;url=signUp.html");
            //header('Location:signUP.html');
		}
	}
	
?>
