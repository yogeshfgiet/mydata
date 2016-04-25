<?php
	

include("header.php");
	
	


 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>

	
	
	
	
	
	
	
	
	
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
        
                   
            <!-- /.navbar-header -->
		
          
            <!-- /.navbar-top-links -->

     
  

        <!-- Page Content -->
        <div id="page-wrapper" style=" height: 950px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Register New Resident</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
			<form id='myform'class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
			
			
					
		   </form>
		
		
				<script  type="text/javascript" xml:space="preserve">
 var frmvalidator = new Validator("myform");
 
 frmvalidator.addValidation("block","dontselect=-1");
  frmvalidator.addValidation("flatno","req","Please Enter Flat Number");
  frmvalidator.addValidation("fname","req","Please enter your First Name");
   frmvalidator.addValidation("lname","req","Please enter your Last Name");
   frmvalidator.addValidation("contact1","req","Please Enter Contact Number");
   frmvalidator.addValidation("contact1","maxlen=10");
    frmvalidator.addValidation("contact1","minlength=10");
 frmvalidator.addValidation("contact1","numeric");
 frmvalidator.addValidation("email","maxlen=50");
 frmvalidator.addValidation("email","req");
 frmvalidator.addValidation("email","email");
 frmvalidator.addValidation("add1","req","Please Enter Vailed Address");
  frmvalidator.addValidation("add1","maxlen=50");
   frmvalidator.addValidation("pin","req","Please Enter PIN Code");
   frmvalidator.addValidation("pin","minlength=6");
   frmvalidator.addValidation("pin","maxlen=6");
 
    frmvalidator.addValidation("state","dontselect=-1");
	frmvalidator.addValidation("emcontact","req","Please Enter Emergency Contact Number");
	frmvalidator.addValidation("emcontact","numeric");
	    frmvalidator.addValidation("emcontact","minlength=10");
	frmvalidator.addValidation("emcontact","maxlen=10");

 
	 
 frmvalidator.addValidation("emcontact","numeric");

</script>
		
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
	<?php include('footer.php');?>
			<?php exit;?>
</body>
	

</html>
