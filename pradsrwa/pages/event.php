<?php
require "gump.class.php";
include('header.php');


  if(isset($_POST['submit'])){
	 
	 $mydata=$obj->insert_event($_POST);
	 //echo "<script type='text/javascript'>alert('$mydata ;')</script>";
	 }
 

 ?>

<!DOCTYPE html>
<html lang="en">

<head>


<meta charset="utf-8">
  
	<script src="gen_validatorv4.js" type="text/javascript"></script>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<!--------------date picker---------->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
 $(function() {
    $( "#from" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 3,
      onClose: function( selectedDate ) {
        $( "#to" ).datepicker( "option", "minDate", selectedDate );
      }
    });
    $( "#to" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 3,
      onClose: function( selectedDate ) {
        $( "#from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
  });
  </script>
	
	
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        
                   
            <!-- /.navbar-header -->
		
          
            <!-- /.navbar-top-links -->

     
  <?php include('sidemenu.php');?>

        <!-- Page Content -->
        <div id="page-wrapper">
		
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add Event Details</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
			<h3 class="msg"><?php if(!empty($mydata)) echo $mydata;?></h3>
			<form id='myform' class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
						
                 
		
				 <div class="col-lg-3">
					<label>Event Title</label>
					
				 </div>
				 <div class="col-lg-3">
                    
                    <input class="form-control" placeholder="Eveny Title"id="name" name="name">
				  </div>
				   <br><br>
				 <div class="col-lg-3">
					<label>Event Discription </label>
					
				 </div>
				 <div class="col-lg-3">
                    
                    <textarea id="disc" name="disc" cols="30" rows="5"  placeholder="Ener Description"> </textarea>
				  </div>
				  
				  <br><br><br><br><br><br><br><br>
				 <div class="col-lg-3">
					<label>Venue Address </label>
					
				 </div>
				 <div class="col-lg-3">
                    
                    <textarea name="add" cols="30" rows="5"placeholder="Ener Venue Address"> </textarea>
				  </div>
				   <br><br><br><br><br><br><br>
				  <div class="col-lg-3">
						 <label> Event Start date </label>
					
				 </div>
				 <div class="col-lg-3">
                    
                    <input type="text" id="from" name="from" placeholder="DD/MM/YYYY">
				  </div>
				    <br><br>
				  	 <div class="col-lg-3">
						 <label> Event End  date </label>
					
				 </div>
				 <div class="col-lg-3">
                    
                    <input type="text"  id="from" name="to" placeholder="DD/MM/YYYY" >
				  </div>
				  
					    <br><br>
                    <button type="submit" name="submit" value="submit"class="btn btn-primary">Submit Button</button>
                     <button type="reset" name="reset"class="btn btn-primary">Reset Button</button>
            </form>
				
				<script  type="text/javascript" xml:space="preserve">
 var frmvalidator = new Validator("myform");
  frmvalidator.addValidation("name","req","Please enter Title");
   frmvalidator.addValidation("disc","req","Please enter Discriptione");
   frmvalidator.addValidation("from","req","Please Vailid Date");
  
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
	
	<?php include('footer.php'); ?>
		
		
</body>

</html>
