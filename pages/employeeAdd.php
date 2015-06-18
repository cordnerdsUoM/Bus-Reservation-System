<?php

	//getNextID($ID);	
	include 'connection.php';
	function getNextID(){
	include 'connection.php';
	$sql = "SELECT Employee_ID FROM employee ORDER BY Employee_ID DESC LIMIT 1";
    $result = $conn->query($sql);
    $row = $result -> fetch_assoc();
	
	$ID = $row['Employee_ID'];
            $index=0;
            for ($i = strlen($ID)-1; $i >=0; $i--) {
                if (is_numeric(substr($ID, $i))) {   
                    
                }else{
                    $index=$i+1;
                    break;
                }
            }
            //echo ($index);
            $newID=  substr($ID, $index);
            $n=((int)$newID);
            //echo ($n);
            $n++;
            $ID= substr($ID, 0, $index).str_pad($n, strlen($ID)-$index,'0', STR_PAD_LEFT);
           
            return $ID;
			
			
	}
	
	$idErr = $firstNameErr = $lastNameErr = $NIC_NoErr = $license_NoErr = $job_TypeErr = $contact_NoErr = "";
	$id = filter_input(INPUT_POST, 'id');
	$firstName = filter_input(INPUT_POST, 'firstName');
	$lastName = filter_input(INPUT_POST, 'lastName');
	$NIC_No = filter_input(INPUT_POST, 'NIC');
	$license_No = filter_input(INPUT_POST, 'licenseNo');
	$job_Type = filter_input(INPUT_POST, 'jobType');
	$contact_No = filter_input(INPUT_POST, 'contact_no');
										
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
		if (empty($_POST["id"])) {
			$idErr = "ID is required";
		}
		else {
			$id = test_input($_POST["id"]);
		}
		if (empty($_POST["firstName"])) {
			$firstNameErr = "First name is required";
		}
		else {
			$firstName = test_input($_POST["firstName"]);
		}
		if (empty($_POST["lastName"])) {
			$lastNameErr = "Last name is required";
		}
		else {
			$lastName = test_input($_POST["lastName"]);
		}
		if (empty($_POST["NIC"])) {
			$NIC_NoErr = "NIC is required";
		}
		else {
			$NIC_No = test_input($_POST["NIC"]);
		}
		if (empty($_POST["jobType"])) {
			$job_TypeErr= "Job Type  is required";
		}
		else {
			$jobType = test_input($_POST["jobType"]);
		}
		if (empty($_POST["contact_no"])) {
			$contact_NoErr = "Contact no is required";
		}
		else {
			$contact_No = test_input($_POST["contact_no"]);
		}
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
                    <h1 class="page-header">Add Employee</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Add a new employee
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								    <form role="form" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "post">
                                        <div class='form-group'>
													<label>ID</label>
													<input class='form-control'  type =' text' name='id' value="<?php echo (getNextID()) ?>">
													
												</div>
                                            
                                        
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input class="form-control" placeholder="Enter text" type="text" name ="firstName" onkeypress="return mask_Letter(this,event);">
											<span class="error">* <?php echo $firstNameErr;?></span><br><br>
										</div>

                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input class="form-control" placeholder="Enter text" type="text" name ="lastName" onkeypress="return mask_Letter(this,event);">
											<span class="error">* <?php echo $lastNameErr;?></span><br><br>
                                        </div>

                                        <div class="form-group">
                                            <label>NIC No</label>
                                            <input class="form-control" placeholder="Enter text" type="text" name ="NIC" maxlength = "10">
											<span class="error">* <?php echo $NIC_NoErr;?></span><br><br>
                                        </div>
										
										<div class="form-group">
                                            <label>License No</label>
                                            <input class="form-control" placeholder="Enter text" type="text" name ="licenseNo">
                                        </div>
										
										<div class="form-group">
                                            <label>Job Type</label>
                                            <input class="form-control" placeholder="Enter text" type="text" name ="jobType" onkeypress="return mask_Letter(this,event);">
											<span class="error">* <?php echo $job_TypeErr;?></span><br><br>
                                        </div>
										
										<div class="form-group">
                                            <label>Contact No</label>
                                            <input class="form-control" placeholder="Enter text" type ="text" name ="contact_no" maxlength = "10" onkeypress="return mask_Number(this,event);">
											<span class="error">* <?php echo $contact_NoErr;?></span><br><br>
                                        </div>

                                         <button type="submit" class="btn btn-default">Add</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>                                   
										
									
									<?php								

										if ($id && $firstName && $lastName && $NIC_No && $license_No && $job_Type && $contact_No) {

											$sql =$conn->prepare("INSERT INTO employee(Employee_ID,Contact_No,NIC,License_No,Job_Type) VALUES(?,?,?,?,?) ");
											$sql1 = $conn->prepare("INSERT INTO employee_name(Employee_ID,First_Name,Last_Name) VALUES (?, ?, ?)");
											
											$sql->bind_param("sssss", $id,$contact_No ,$NIC_No, $license_No, $Job_Type);
											$sql1 -> bind_param("sss", $id,  $firstName, $lastName);
											
											if ($sql->execute() == TRUE && $sql1->execute() == TRUE) {
												echo "New record created successfully.";
											} else {
												echo " Error" . $sql . "</br>" . $conn->error;
											}
											
										}
										
										
										getNextID();
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
