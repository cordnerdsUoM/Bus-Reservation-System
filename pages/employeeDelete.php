
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
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
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Remove Employee</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Remove an employee
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action = "employeeDelete.php" method = "POST">
                                        <div class="form-group">
                                            <label>ID</label>
                                            <input class="form-control" placeholder="EIxxxx" type="text" name ="id">
                                           
                                        </div>
										
										<button type="submit" class="btn btn-default">Submit ID</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
									<hr>
									<?php
        
							include 'connection.php';

							$id =filter_input(INPUT_POST, 'id');
        
							$sql = "SELECT * FROM employee NATURAL JOIN employee_name where Employee_ID = ?  ";
							$stmt = mysqli_prepare($conn, $sql);
							$stmt -> bind_param("s",$id);
							$stmt ->execute();
							
							$result1 = $stmt->get_result();
							$row1 = $result1 -> fetch_assoc();
							
							$firstName = $row1['First_Name'];
							$lastName = $row1['Last_Name'];
							$NIC_No = $row1['NIC'];
							$license_No = $row1['License_No'];
							$job_Type = $row1['Job_Type'];
							$contact_No =$row1['Contact_No'];
						
							if($id){
								if (!($firstName && $lastName && $NIC_No && $license_No && $job_Type && $contact_No)) {
							
										echo "<script>alert('There is no such a employee id');</script>";
								}
							}
									echo " <div class='row'>
										<div class='col-lg-6'>
									<form role='form' action ='employeeDelete.php' method='get'>	
										<div class='form-group'>
											<label>ID</label>
											<input  class='form-control' placeholder='Enter Employee ID' type ='text' name='id' value = '$id'><p>
										</div>		 
										
										<div class='form-group'>
                                            <label>First Name</label>
                                            <input class='form-control' placeholder='Enter text' type='text' name ='firstName' value = '$firstName'>
                                        </div>
										
										<div class='form-group'>
                                            <label>Last Name</label>
											<input class='form-control' placeholder='Enter text' type='text' name ='lastName' value = '$lastName'>
											
										</div>					
										
										<div class='form-group'>
                                            <label>NIC</label>
                                            <input class='form-control' placeholder='Enter text' type='text' name ='NIC' value = '$NIC_No'>
                                        </div>
										
										<div class='form-group'>
                                            <label>License No</label>
                                            <input class='form-control' placeholder='Enter text' type='text' name ='licenseNo' value = '$license_No'>
                                        </div>
										
										<div class='form-group'>
                                            <label>Job Type</label>
                                            <input class='form-control' placeholder='Enter text' type='text' name ='jobType' value = '$job_Type'>
                                        </div>
										
										<div class='form-group'>
                                            <label>Contact no</label>
                                            <input class='form-control' placeholder='Enter text' type='text' name ='contact_no' value = '$contact_No'>
                                        </div> 
                
										<button type='submit' class='btn btn-default'>Remove</button>   
										<button type='reset' class='btn btn-default'>Reset</button>
										</form> 
     
	                     </div>
								</div>	" ;
								
								include 'connection.php';

        $id  = filter_input(INPUT_GET, 'id');

        if ($id) {
            
            $sql1 = "DELETE FROM employee_name WHERE Employee_ID = '$id'";
            $sql = "DELETE FROM employee WHERE Employee_ID ='$id'";
            

            if ($conn->query($sql1) === TRUE && $conn -> query($sql) === TRUE ) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record: " . $conn->error;
            }

            $conn->close();
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
