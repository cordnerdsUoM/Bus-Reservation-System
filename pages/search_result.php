<!DOCTYPE html>
<?php
include 'record.php';
include 'connection.php';

$startPoint = $_POST["startP"];
$destinationPoint = $_POST["destinationP"];
$date = $_POST["Date"];
$timeStart = $_POST["timeStart"];
$timeEnd = $_POST["timeEnd"];
$smokeSelection = $_POST["smokeSelection"];
$smokeVal=$smokeSelection=="yes"?1:0;

$dateformat = date_create($date);
$timeStart= date_format($dateformat, "Y-m-d ") . $timeStart;
$timeEnd= date_format($dateformat, "Y-m-d ") . $timeEnd;


if ($smokeSelection != "yes") {
    $smokeSelection = "No";
}
if ($timeStart > $timeEnd) {

    echo "You can't select a small time as End time than Start time";
}
?>


<html>
    <head>
        <link rel="icon" href="bus_icon.png">
        <meta charset="UTF-8">
        
        <title>Online Bus Reservation</title>    

        
        <link rel="stylesheet" type="text/css" href="static/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="decoration.css">
        <link rel="stylesheet" type="text/css" href="backslideshow.css">
        <link rel="stylesheet" type="text/css" href="searchdecoration.css">
        
    </head>
    <body>
         <ul class="cb-slideshow">
	<li><span></span></li>
    <li><span></span></li>
    <li><span></span></li>
    <li><span></span></li>
    <li><span></span></li>
    <li><span></span></li>
    	
        
	
</ul>
        
        
        <div id="header">Search Results</div>
      <?php
        $sql = "select route_No from route_has_station natural join station where station_Name= ? ";
        $routeList=array();
        $stmt = mysqli_prepare($conn, $sql);
        $stmt -> bind_param("s",$startPoint);
        $stmt ->execute();
        $result=$stmt -> get_result();
        if (mysqli_num_rows($result) > 0) {
             while ($row = mysqli_fetch_assoc($result)) {
                 $routeList[]=$row["route_No"];
             }
        } else {
            echo "0 results A ";
        }
        $resultList=array();
        foreach ($routeList as $routeNo) {
            $sql = "select turn.*,bus.* from bus natural join turn natural join "
                    . "route natural join route_has_station natural join station"
                    . " where station_Name= ? AND route_No= ? AND Departure_Time>= ?"
                    . " AND Departure_Time<= ? AND Smoke_Area=? having ((select Index_No "
                    . "from route_has_station rs natural join station s where s.station_name= ? AND rs.route_No= ?) >=(select Index_No from route_has_station rs natural join station s where s.station_name=Departure_Station AND rs.route_No= ?) AND (select Index_No from route_has_station rs natural join station s where s.station_name= ? AND rs.route_No= ?) <=(select Index_No from route_has_station rs natural join station s where s.station_name=Arrival_Station AND rs.route_No= ?)) OR ((select Index_No from route_has_station rs natural join station s where s.station_name=? AND rs.route_No= ?) <=(select Index_No from route_has_station rs natural join station s where s.station_name=Departure_Station AND rs.route_No= ?) AND (select Index_No from route_has_station rs natural join station s where s.station_name= ? AND rs.route_No= ?) >=(select Index_No from route_has_station rs natural join station s where s.station_name=Arrival_Station AND rs.route_No= ?))";
            $stmt = mysqli_prepare($conn, $sql);
            $stmt -> bind_param("sssssssssssssssss",$destinationPoint,$routeNo,$timeStart,$timeEnd,$smokeVal,$startPoint,$routeNo,$routeNo,$destinationPoint,$routeNo,$routeNo,$startPoint,$routeNo,$routeNo,$destinationPoint,$routeNo,$routeNo);
           $stmt ->execute();
        $result=$stmt -> get_result();
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                    $record=new Record;
                    $record->setRoute_No($row["Route_No"]);
                    $record->setTurn_No($row["Turn_No"]);
                    $record->setDeparture_Station($row["Departure_station"]);
                    $record->setDeparture_Time($row["Departure_Time"]);
                    $record->setArrival_Station($row["Arrival_Station"]);
                    $record->setArrival_Time($row["Arrival_Time"]);
                    $record->setBus_No($row["Bus_No"]);
                    $resultList[]=$record;
                }
            } else {
                //echo "0 results";
            }   
        }
        ?>
        
        <?php
        if(!empty($resultList)){
        echo "<form name=\"search\" action=\"bus_view.php\">";
        echo "<table class=\"table\" style=\"width:100%\"> <tr><th>Route No</th><th>Turn No</th><th>Depature Station</th><th>Depature Time</th><th>Arrival Station</th><th>Arrival Time</th><th>Bus No</th><th>   Reservation</th></tr>";
        foreach ($resultList as $value) {
            echo "<tr><td>" . $value->getRoute_No() . "</td><td>" . $value->getTurn_No() . "</td><td>" . $value->getDeparture_Station() . "</td><td>" . $value->getDeparture_Time() . "</td><td>" . $value->getArrival_Station() . "</td><td>" . $value->getArrival_Time() . "</td><td>" . $value->getBus_No() . "</td><td><div class = \"moveButton\"><button type=\"submit\" class=\"btn\" name=\"reserve\" value=\"".$value->getTurn_No().",".$value->getDeparture_Time().",".$value->getRoute_No()."\">Reserve</button></div></td></tr>";
        }
        echo "</table>";
        echo "</form>";
        }else{
            
        }
        ?>
        
        
    <div id="footer-image"></div>
     <div id="container">
    
   <div id="footer">
       <span id="maintopic">Kalani Tours Bus Reservation<br></span>
       <span id="subtopic">Travel in Comfort</span>
       </div>
</div>

        <?php
session_start();
?>
        
<script>
function reserveForward(var turn_No,var departure_time,var route_No, var bus_No)
    {
    alert("popeorope");
     '<%Session["turn_No"] = "' + turn_No + '"; %>';
     alert('<%=Session["turn_No"] %>');
    
    
}
</script>
        
        <?php
$mysqli_close = mysqli_close($conn);
/*
    $_SESSION["turn_No"] = $turn_No;
    $_SESSION["departure_Time"] = $departure_time;
    $_SESSION["route_No"] = "gdfdf";//$route_No;
    $_SESSION["bus_No"] = $bus_No;
        */
        ?>
        
        
    </body>
</html>


