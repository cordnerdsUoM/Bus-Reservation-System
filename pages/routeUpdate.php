

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


                         
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Update Route</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update route information
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action = "routeUpdate.php" method = "post">
                                        <div class="form-group">
                                            <label>Route No</label>
                                            <input class="form-control"  placeholder="Enter Employee ID" type =" text" name="id" onkeypress="return mask_Number(this,event);"/>
                                            
                                        </div>
                                         
                                         
                                        <button type="submit" class="btn btn-default">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                    <hr></hr>
                                </div>
                                
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        
                        <?php
        
                            include 'connection.php';

                            $id =filter_input(INPUT_POST, 'id');
        
                            $sql = "SELECT * FROM route where Route_No = ? ";
                            
							$stmt = mysqli_prepare($conn, $sql);
							$stmt -> bind_param("s",$id);
							$stmt ->execute();

                            $result1 = $stmt->get_result();
							$row1 = $result1 -> fetch_assoc();
        
                            $routeName = $row1['Route_Name'];
                            $roads = $row1['Roads'];
                         
						if($id){
								if(!($routeName && $roads )){
									echo "<script>alert('There is no such a route');</script>";
								}
						}
        
                            echo " <div class='row'>
                                  <div class='col-lg-6'>
                                    <form role='form' action ='routeUpdate.php' method='get'>    
                                        <div class='form-group'>
                                            <label>Route No</label>
                                            <input  class='form-control' placeholder='Enter Route No' type ='text' name='id' value = '$id' onkeypress='return mask_Number(this,event);'/><p>
                                        </div>       
                                        
                                        <div class='form-group'>
                                            <label>Route Name</label>
                                            <input class='form-control' placeholder='Enter text' type='text' name ='routeName' value = '$routeName' onkeypress='return mask_Letter(this,event);'/>
                                        </div>
                                        
                                        <div class='form-group'>
                                            <label>Roads</label>
                                            <input class='form-control' placeholder='Enter text' type='text' name ='roads' value = '$roads' onkeypress='return mask_Letter(this,event);'/>
                                            
                                        </div>                  
                                        
                                        
                                        <button type='submit' class='btn btn-default'>Update</button>   
                                        </form> 
     
							</div>
                                </div>  " ;            

								$id = filter_input(INPUT_GET, 'id');
								$routeName = filter_input(INPUT_GET, 'routeName');
								$roads = filter_input(INPUT_GET, 'roads');


								if ($id && $routeName && $roads) {

									$sql2 = "UPDATE route SET Route_No = '$id',Route_Name = '$routeName', Roads = '$roads' WHERE Route_No = '$id'";
        
									if ($conn->query($sql2) === TRUE) {
										echo "Record updated  successfully";
									} else {
										echo "Error updating record: " . $conn->error;
									}

									$conn->close();
								}
						?>
								
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
	
	<script>
	function mask_Number(textbox,e)
	{
		var charCode = (e.which) ? e.which: e.keyCode;
		if(charCode == 46 || charCode >31 && (charCode <48 || charCode > 57))
		{
			alert("only Numbers Allowed");
			return false;
		}
		else
		{
		
			return true;
		}
	}
	
	function mask_Letter(textbox,e)
	{
		var charCode = (e.which) ? e.which: e.keyCode;
		if(charCode == 32 || charCode == 46 || (charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122) || charCode == 08)
		{
			
			return true;
		}
		else
		{
			alert("only Letters Allowed");
			return false;
		}
	}
	</script>


</body>

</html>
