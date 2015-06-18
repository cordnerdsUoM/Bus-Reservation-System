<?php
	include 'connection.php';
	    
	//$bus_id = filter_input(INPUT_POST, 'bus_no');
	//$bus_model = filter_input(INPUT_POST, 'model');
	$smoke_area = filter_input(INPUT_POST, 'isSmokeArea');
									
	$bus_noErr = $smoke_areaErr = $modelErr = ""; //define variables and set empty values
    $bus_id = $bus_model ="";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
		if (empty($_POST["bus_no"])) {
			$bus_noErr = "Bus no is Required";
		}
		else {
			$bus_id = test_input($_POST["bus_no"]);
		}
		if (empty($_POST["model"])) {
			$modelErr = "model is Required";
		}
		else{
			$bus_model = test_input($_POST["model"]);
		}
		/*if (empty($_POST["isSmokeArea"])) {
			$smoke_areaErr = "Avaliability of smoke area is Required";
		}
		else{
			$smoke_area = test_input($_POST["isSmokeArea"]);
		}*/
	}
	
	
	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<style>

        .error{color: #FF0000;}
    </style>
	
    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
       <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>


                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Employee Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="employeeAdd.php">Add Employee</a>
                                </li>
                                <li>
                                    <a href="employeeUpdate.php">Update Employee</a>
                                </li>
                                <li>
                                    <a href="employeeDelete.php">Remove Employee</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                                       
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Bus Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="busAdd.php">Add Bus</a>
                                </li>
                                <li>
                                    <a href="busUpdate.php">Update Bus</a>
                                </li>
                                <li>
                                    <a href="busDelete.php">Remove Remove</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Route Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="routeAdd.php">Add Route</a>
                                </li>
                                <li>
                                    <a href="routeUpdate.php">Update Route</a>
                                </li>
                                <li>
                                    <a href="routeDelete.php">Remove Route</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Trip Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="tripAdd.php">Add Trip</a>
                                </li>
                                <li>
                                    <a href="tripUpdate.php">Update Trip</a>
                                </li>
                                <li>
                                    <a href="tripDelete.php">Remove Trip</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                         <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.php">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.php">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>       <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Bus</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add a new bus
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST" >
                                        <div class="form-group">
                                            <label>Bus No</label>
                                            <input class="form-control" placeholder="Enter Bus Number" type ="text" name="bus_no">
											<span class="error">* <?php echo $bus_noErr;?></span><br><br>
										  </div>
                                        <div class="form-group">
                                            <label>Bus Model</label>
                                            <input class="form-control" placeholder="Enter text" type ="text" name ="model">
											<span class="error">* <?php echo $modelErr;?></span><br><br>	
										</div>

                                        <div class="form-group">
                                            <label>Smoke Area </label>
											<input type ="checkbox" name ="isSmokeArea" value = 1> Available
											<input type ="checkbox" name ="isSmokeArea" value = 0> Not available</p>
											
                                        </div>

                                        
                                       
                                        
                                        
                                        
                                        
                                        
                                        <button type="submit" class="btn btn-default">Add</button>
                                        <button type="reset" class="btn btn-default">Reset </button>
                                    </form>
									<?php
										
										
										if($bus_id && $bus_model){
											$stmt=$conn->prepare("INSERT INTO bus(Bus_No, Bus_Model, Smoke_Area) VALUES (?,?,?)");
                                            $stmt->bind_param("sss", $bus_id, $bus_model, $smoke_area);
											//$sql = "INSERT INTO bus(Bus_No, Bus_Model, Smoke_Area) VALUES ('".$bus_id."','".$bus_model."','".$smoke_area."')"; 
											if($stmt ->execute() == TRUE )
											{
												echo "New record created successfully.";
											} 
											else
											{
												echo " Error" . $sql . "</br>" . $conn->error;
											
											}
										}

									?>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
	
	

</body>

</html>
