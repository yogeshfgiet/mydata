<?php
require "gump.class.php";
include('header.php');
include('sidemenu.php');
 // $sql="SELECT * FROM `block`;";
// $query=mysql_query($sql);
  
  $query=$obj->selectblock($_POST);
   $query1=$obj->selectstate($_POST);
 
	if(isset($_POST['submit'])){

	 $mydata=$obj->savedata($_POST);

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
	
		
		$(function(){
    $("#div2").hide();
	$("#div1").hide();
   
});	 
			  $(document).ready(function () {
                       $('#tanent').click(function () {
                      
                      $('#div2').show('fast');
                      
                });
			 $('#owner').click(function () {
                       $('#div2').hide('fast');
					    $('#div1').hide('fast');
                 });
               });
			   
			   ////////////
			   $(document).ready(function () {
				   $('#notveryfied').click(function () {
                      
                      $('#div1').show('fast');
                      
                });
			 $('#veryfied').click(function () {
                       $('#div1').hide('fast');
                 });
               });
	
			   
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
                        <h1 class="page-header">Book Banquet Hall</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
			<form id='myform'class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
						
						
						
						
						<div class="col-lg-3">
                             <label> Select Block:<span  class="text-danger">*</span></label>
						
						</div> 
						<div class="col-lg-3">
                           
							<select class="form-control" name="block" id="block">
							
							<option value="-1">-Select Block-</option>
							<?php
								while($block=mysql_fetch_array($query)){
							?>
                                <option value="<?php echo $block['id']?>"><?php echo $block['block_name']?></option>
                             
                             	<?php
								}
							?>	
                           </select>
						</div> <br><br>
                 <div class="col-lg-3">
                    <label>Enter Flat Number:</label>
                   
				  </div>
				  <div class="col-lg-3">
                    
                    <input class="form-control" placeholder="Flat Number" id="flatno"name="flatno"><?php if(!empty($flatno)) {echo $flatno;}?>
				  </div>
				  <br>
				  <div class="col-lg-3">
                    <label>Resident First Name:</label>
                   
				  </div>
				  <div class="col-lg-3">
                    
                    <input class="form-control" placeholder="Enter First Name" id="fname"name="fname"><?php if(!empty($fname)) echo $fname;?>
				  </div>
					<br>
				  <div class="col-lg-3">
					<label>Resident Middle  Name:</label>
                   
				  </div>
				  <div class="col-lg-3">
                    
                    <input class="form-control" placeholder="Enter Middle Name" id="mname"name="mname"><?php if(!empty($mname)) echo $mname;?>
				  </div>
			<br>
				  <div class="col-lg-3">
					<label>Resident Last Name:</label>
                   
				  </div>
				  <div class="col-lg-3">
                    
                    <input class="form-control" placeholder="Enter Last Name"id="lname" name="lname"><?php if(!empty($lname)) echo $lname;?>
				  </div>
					<br>
				  <div class="col-lg-3">
					<label>Resident Contact No1:</label>
                   
				  </div>
				  <div class="col-lg-3">
                    
                    <input class="form-control" placeholder="Mobile Number 1" id="contact1"name="contact1"><?php if(!empty($contact1)) echo $contact1;?>
				  </div>
					<br>
				  <div class="col-lg-3">
					<label>Resident Contact No2:</label>
                   
				  </div>
				  <div class="col-lg-3">
                    
                    <input class="form-control" placeholder="Mobile Number 2" id="contact2"name="contact2">
				  </div>
				<br>
				  <div class="col-lg-3">
					<label>Resident Landline No:</label>
                   
				  </div>
				  <div class="col-lg-3">
                    
                    <input class="form-control" placeholder="Landline No"id="landline" name="landline">
				  </div>
				  <br>
				  <div class="col-lg-3">
					<label>Resident E-mail:</label>
                   
				  </div>
				  <div class="col-lg-3">
                    
                    <input type="email" class="form-control" placeholder="E-mail"id="email" name="email"><?php if(!empty($email)) echo $email;?>
				  </div>
				  <br>
				  <div class="col-lg-3">
					<label>Resident Permanent Address:</label>
                   
				  </div>
				  <div class="col-lg-3">
                <p class="help-block">Address line1</p>
                    <input class="form-control" placeholder="House No/Village" id="add1"name="add1"><?php if(!empty($add1)) echo $add1;?>
				  </div>
				   <div class="col-lg-3">
                <p class="help-block">Address line2</p>
                    <input class="form-control" placeholder="Locality/Landmark"id="add2" name="add2">
				  </div>
				    <div class="col-lg-3">
                <p class="help-block">Address line3</p>
                    <input class="form-control" placeholder="City/District"id="add3" name="add3">
				  </div>
				   <br>
				    <div class="col-lg-3">
						<label>Select State:</label>
                   
				  </div>
				    <div class="col-lg-3">
						<p class="help-block"></p>
						<select class="form-control"name="state" id="state">
							<option  value="-1">-Select Satate-</option>
							<?php
								while($state=mysql_fetch_array($query1)){
							?>
                                <option value="<?php echo $state['id']?>"><?php echo $state['state_name']?></option>
                             
                             	<?php
								}
							?>	
						</select>
					</div>
					<br>
					
					 <div class="col-lg-3">
						<label>Enter PIN Code:</label>
                   
					</div>	<br>
				     <div class="col-lg-3">
						
						<input class="form-control" placeholder="Pin Code" id="pin"name="pin"><?php if(!empty($pin)) echo $pin;?>
					</div>
					
					
					 <div class="col-lg-3">
						<label>Resident Occupation</label>
                   
					</div>
				     <div class="col-lg-3">
						
						<input class="form-control" placeholder="occupation "id="occu" name="occupation">
					</div>
					<br>
					
					 <div class="col-lg-3">
						<label>Emergency Contact:</label>
                   
					</div>
				     <div class="col-lg-3">
						
						<input class="form-control" placeholder="Emergency Contact"id="emcontact" name="em_contact"><?php if(!empty($emcontact)) echo $emcontact;?>
					</div>
				<br>
					
					 <div class="col-lg-3">
						<label>Company Contact No:</label>
                   
					</div>
				     <div class="col-lg-3">
						
						<input class="form-control" placeholder="Company Contact" id="compcont"name="c_contact">
					</div>
					<br><br>
					
					 <div class="col-lg-3">
						<label>Pets</label>
                   
					</div>
				     <div class="col-lg-3">
						
						<input class="form-control" placeholder="Pets detail" id="pet"name="pet">
					</div>
					
									<br><br>
					
					 <div class="col-lg-3">
						<label>Nature</label>
                   
					</div>
				     <div class="col-lg-3">
                        <input type="radio" name="optionsRadios1" id="tanent" value="Tenant">Tenant
						<input type="radio" name="optionsRadios1" id="owner" value="Owner">Owner
					</div>
						
					<br><br>
					
					
			
					<div id="div2">
						<div  id="div2"class="col-lg-3">
							<label>Veryfied</label>
							
						</div>
						<div class="col-lg-3">
							<input type="radio" name="optionsRadios2" id="veryfied" value="Yes">Yes
							<input type="radio" name="optionsRadios2" id="notveryfied" value="No" >No
						</div>
					</div>
				     
					<br><br>
					<div id="div1">
						<div class="col-lg-3">
							<label>Veryfication Code:</label>
                   
						</div>
						<div class="col-lg-3">
						
							<input class="form-control" placeholder="Veryfication Code"id="very" name="vcode">
						</div>
					</div>
					
					<br><br>
					<!--------- Image upload
					<div class="form-group">
						<label for="comment"> Product Image:</label>
						<input type="hidden" name="MAX_FILE_SIZE" value="512000" /><br><br>
						<input type="file" name="userfile" id="photoimg" multiple="true" />
			
					</div>
					<br><br>------>
                    <button type="submit" name="submit" value="submit"class="btn btn-primary">Submit Button</button>
                     <button type="reset" name="reset"class="btn btn-primary">Reset Button</button>
            </form>
				<br><br>	<br><br>	<br><br>	<br><br>	<br><br>
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
