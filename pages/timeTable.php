<?php

	header( "refresh:24*60*60;url=timeTable.php" );

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "bus_reservation";

	//create connection
	$conn = new mysqli($servername,$username,$password,$dbname);
	//check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT Route_No from route";
	$result = $conn->query($sql);
	$routeArray = array();

	$i = 0;

	if ($result->num_rows > 0) {
    // output data of each row
		
		echo "routes: ";
    	while($row = $result->fetch_assoc()) {
        	echo $row["Route_No"]." ";
        	$routeArray[$i] = $row["Route_No"];
        	
        	$i += 1;
    	}
		echo "<br>";

	} else {
    	echo "0 results";
	}
	$val = $i;

//======================================================bus count eka

	for ($j=0; $j < $val; $j++) { 
	
	//turn count eka ganna
		$sql = "select count(distinct Turn_No) as count from turn where Route_No = '$routeArray[$j]'";
		$result = $conn->query($sql);
		$busCountArray = array();

		$i = 0;

		if ($result->num_rows > 0) {
	    // output data of each row
			

	    	while($row = $result->fetch_assoc()) {
			
	        	echo $routeArray["$j"]." = ".$row["count"]."<br>";
	        	$busCountArray[$i] = $row["count"];
	        	
	        	$i += 1;
	    	}

		} else {
	    	echo "0 results";
		}
		//=========================================trun thiyena welawal ganna
		
		$sql = "SELECT distinct TIME(Departure_Time) as dt,TIME(Arrival_Time) as at from turn where Route_No ='$routeArray[$j]'";
		$result = $conn->query($sql);
		$turnDtimeArray = array();
		$turnAtimeArray = array();

		$i = 0;

		if ($result->num_rows > 0) {
	    // output data of each row
			

	    	while($row = $result->fetch_assoc()) {
			
	        	echo $row["dt"]."---".$row["at"]."<br>";
	        	$turnDtimeArray[$i] = $row["dt"];
				$turnAtimeArray[$i] = $row["at"];
				
	        	
	        	$i += 1;
	    	}

		} else {
	    	echo "0 results";
		}
		
		$sql = "SELECT distinct Departure_Station, Arrival_Station from turn where Route_No = '$routeArray[$j]'";
		$result = $conn->query($sql);
		//$departureStaArray = array();
		//$arrivalStaArray = array();

		$i = 0;

		if ($result->num_rows > 0) {
	    // output data of each row
			

	    	while($row = $result->fetch_assoc()) {
			
	        	echo $row["Departure_Station"]."---".$row["Arrival_Station"]."<br>";
	        	$departureStaArray  = $row["Departure_Station"];
				$arrivalStaArray = $row["Arrival_Station"];
				
	        	
	        	$i += 1;
	    	}

		} else {
	    	echo "0 results";
		}
	//}

//======================================================


	//echo "$routeArray[0]"."<br>";
	//echo "$val";
	//echo "today is".date("Y-m-d")."<br>";
	//$newDate = date('Y-m-d', strtotime(date("Y-m-d"). ' + 14 days'));
	$date = date("Y-m-d");
	$newDate = new DateTime($date);
	//echo $newDate."<br>";
	
	$newDate->setTime(14, 55,00);
	//echo $newDate->format('Y-m-d H:i:s')."<br>";

//=======================================================================================================

	//for ($i=0; $i < $val ; $i++) { 
		//echo "$val"."<br>";
		
		$dateForGenerate = date('Y-m-d', strtotime(date("Y-m-d"). ' + 0 days'));
	
		//$sql = "SELECT Turn_No, Bus_No, Departure_Time,Arrival_Time FROM turn natural join turn_has_bus";
		$sql = "SELECT distinct Turn_No, Bus_No FROM turn where date(Departure_Time) = '$dateForGenerate' and Route_No = '$routeArray[$j]'";
		$result = $conn->query($sql);
		$busArray = array();
		$turnArray = array();
		$i = 0;

		if ($result->num_rows > 0) {
	    // output data of each row
			
			echo $routeArray[$i]."<br>";
	    	while($row = $result->fetch_assoc()) {
	        	echo $row["Turn_No"]. "   " . $row["Bus_No"]."<br>";
	        	$busArray[$i] = $row["Bus_No"];
	        	$turnArray[$i] = $row["Turn_No"];
	        	$i += 1;
	    	}
		} else {
	    	echo "0 results";
		}

		//print_r($busArray);
		echo "<br>";
		//print_r($turnArray);
		

		$temp = $busArray[0];
		//echo sizeof($busArray);

		for ($k=0; $k < sizeof($busArray)-1; $k++) { 
			$busArray[$k] = $busArray[$k+1];
		}

		$busArray[sizeof($busArray)-1] = $temp;
		
		echo "resheheduled time table"."<br>";
		
		for ($k=0; $k < sizeof($busArray); $k++){
			echo $turnArray[$k]."-".$busArray[$k]."<br>";
		}
		

		//print_r($busArray);
		echo "<br>";
		//print_r($turnArray);
		echo "<br>";
		
		//create connection
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "bus_reservation";

		$conn = new mysqli($servername,$username,$password,$dbname);

		if ($conn->connect_error) {
	    	die("Connection failed: " . $conn->connect_error);
		} 

		for ($m=0; $m < sizeof($busArray); $m++) { 
		
			$departureTime = $turnDtimeArray[$m];
			$arrivalTime = $turnAtimeArray[$m];
			
			//echo "times".$departureTime."-".$arrivalTime."<br>";
			//departure datetime
			$dTimeArray = explode(':', $departureTime);
			//echo $dTimeArray[0]."-".$dTimeArray[1]."<br>";
			
			$date = date('Y-m-d', strtotime($dateForGenerate. ' + 1 days'));
			//$date = date("Y-m-d");
			$newDate1 = new DateTime($date);
			//echo $newDate."<br>";
	
			$newDate1->setTime($dTimeArray[0], $dTimeArray[1]);
			echo $newDateD = date_format($newDate1,'Y-m-d H:i:s')."<br>";
			
			
			//arival datetime
			$aTimeArray = explode(':', $arrivalTime);
			//echo $aTimeArray[0]."-".$aTimeArray[1]."<br>";
			
			$date = date('Y-m-d', strtotime($dateForGenerate. ' + 1 days'));
			//$date = date("Y-m-d");
			$newDate2 = new DateTime($date);
			//echo $newDate."<br>";
	
			$newDate2->setTime($aTimeArray[0], $aTimeArray[1]);
			echo $newDateA = date_format($newDate2,'Y-m-d H:i:s')."<br>";
			
			
			$sql = "insert into turn values ('$turnArray[$m]','$departureStaArray','".$newDateD."','$arrivalStaArray','".$newDateA."','$routeArray[$j]','$busArray[$m]')";
			//$sql = "UPDATE turn_has_bus SET Bus_No = '$busArray[$m]' WHERE Turn_No='$turnArray[$m]'";

			if ($conn->query($sql) === TRUE) {
		   		echo "Record updated successfully";
			} else {
		    	//echo "Error updating record: " . $conn->error;echo "<br>";

			}
		}
		echo "=========================="."<br>";
		
		
	}	

?>