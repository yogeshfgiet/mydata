<?php
require "gump.class.php";
include('header.php');
include('sidemenu.php');


	if(isset($_POST['submit'])){
	
	 $msg=$obj->workerdata($_POST);
   echo "<script type='text/javascript'>alert('$msg ;')</script>";
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

	<script src="gen_validatorv4.js" type="text/javascript"></script>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
             <script type="text/javascript">
		 
			 
	
</script>

	
	
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        
                   
            <!-- /.navbar-header -->
		
          
            <!-- /.navbar-top-links -->

     
  

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">RWA Worker Registration </h1>
						
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
			<form id='myform'class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
					  
					  
					  
					  <div class="col-lg-4">
						<label>Select Type of worker:</label>
                   
				    </div>
					<div class="col-lg-4">
                        <select class="form-control" name="work_type" id="work_type">
							<option value="-1">-Select Option-</option>
							<option value="Electrician">Electrician</option>
							<option value="Plumber">Plumber</option>
							<option value="Sweepers">Sweepers</option>
							<option value="Power back">Power back</option>
							<option value="Security Guard">Security Guard</option>
						</select>
					</div> 
					<br><br>
					<div class="col-lg-4">
						<label>Enter Name:</label> 
					</div>
					<div class="col-lg-4">
						<input class="form-control" placeholder="Enter Name" id="name"name="name">
					</div>
					<br><br>
					<div class="col-lg-4">
						<label>Gender:</label>
					</div>
					<div class="col-lg-4">
							<input type="radio" name="option" id="option" value="male">Male
							<input type="radio" name="option" id="option" value="female" >Female
					</div>
					<br><br>
					<div class="col-lg-4">
						<label>Contact No:</label>
					</div>
					<div class="col-lg-4">
						<input class="form-control" placeholder="Mobile Number " id="contact" name="contact">
					</div>
				   <br><br>
				
					<button type="submit" name="submit" value="submit"class="btn btn-primary">Submit Data</button>
                     <button type="reset" name="reset"class="btn btn-primary">Reset Button</button>
            </form>
				<br><br>	<br><br>	<br><br>	<br><br>	<br><br>
				<script  type="text/javascript" xml:space="preserve">
 var frmvalidator = new Validator("myform");
 
 frmvalidator.addValidation("work_type","dontselect=-1");
  frmvalidator.addValidation("name","req","Please Enter Vailed Name");
 
   frmvalidator.addValidation("contact","req","Please Enter Contact Number");
   frmvalidator.addValidation("contact","maxlen=10");
    frmvalidator.addValidation("contact","minlength=10");
 frmvalidator.addValidation("contact","numeric");
 

</script>
			
			
			<?php exit;?>
			
			
			
            <!-- /.container-fluid -->
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
