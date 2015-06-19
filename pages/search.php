<?php
		
	$startPoint = $_POST["startP"];
	$destinationPoint = $_POST["destinationP"];
	$date = $_POST["Date"];
	$timeStart = $_POST["timeStart"];
	$timeEnd = $_POST["timeEnd"];	
	$smokeSelection = $_POST["smokeSelection"];
	echo ($startPoint);
	echo "<br>";
	echo ($destinationPoint);
	echo "<br>";
	echo ($date);
	echo "<br>";
	echo($timeStart);
	echo "<br>";
	echo ($timeEnd);
	echo "<br>";
	echo ($smokeSelection);
	echo "<br>";
	
	if($smokeSelection != "yes"){
		$smokeSelection = "No";
		echo ($smokeSelection);
	}
	if($timeStart > $timeEnd){
		
		echo "You can't select a small time as End time than Start time";
	}
	$conn = new mysqli ("localhost","root","","bus_reservation");
	
	if($conn->connect_error){
		
		die("connection failed: ".$conn->connect_error);
	}
	$sql = "SELECT ";//QUERY
	$result = $conn -> query($sql);
	
	if($result -> num_rows>0){
			//output data from each row
			while($row = $result->fetch_assoc()){
				
				echo ($row["FirstName"]);
				echo "<br>";
			}
		
	}
	else{
		
		echo "no results.";
	}
	
	
	
?>