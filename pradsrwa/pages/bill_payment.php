<?php
	
require "gump.class.php";
include('header.php');
include('sidemenu.php');
  $query=$obj->selectblock($_POST);
 ?>

 
 <script type="text/javascript">
		$(function(){
			
	$("#swimming").hide();
	  $("#maintenance").hide();
	$("#gym").hide();
	  $("#banquet").hide();
	 $("#electricity").hide();

   
});		

 
	
 $(document).ready(function() { 		

  $('#show').change(function() {
    if( $(this).val()=="1"){
        $("#maintenance").show()
        }
        else{
        $("#maintenance").hide()
		
		
        }
		if( $(this).val()=="2"){
        $("#swimming").show()
        }
        else{
        $("#swimming").hide()
        }
		
		if( $(this).val()=="3"){
        $("#gym").show()
        }
        else{
        $("#gym").hide()
        }
		
		if( $(this).val()=="4"){
        $("#banquet").show()
        }
        else{
        $("#banquet").hide()
        }
		if( $(this).val()=="5"){
        $("#electricity").show()
        }
        else{
        $("#electricity").hide()
        }
		
		
    });
  
  
});
     
</script>
 
 
<body>

    <div id="wrapper">

        
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Residents</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
			<form id='myform'class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
						<div class="col-lg-3">
                             <label>Please Select Payment Type:</label>
						
						</div> 
						<div class="col-lg-3">
                           
							<select class="form-control" name="show" id="show">
							
							<option value="-1">-Payment Type-</option>
						
                                <option value="1">Maintenance Bll</option>
								<option value="2">Swimming pool Bill</option>
								<option value="3">Gym  Bill</option>
								<option value="4">Banquet Hall Bill</option>
								<option value="5">Electricity Bill</option>
							
								
                             	
                           </select>
						</div> 
                 
					<div class="col-lg-12">
                            <br><br>
                        </div>
				<div class="col-lg-8" id="maintenance">
					 <div class="panel panel-default">
                        <div class="panel-heading">
                            Maintenance Bill
                        </div>
                        <!-- /.panel-heading -->
						<div class="panel-body">
                            <div class="dataTable_wrapper">
							
								<div class="col-lg-5">
									<label>Please Select Block:</label>
								</div> 
								<div class="col-lg-6">
									<select class="form-control" name="block" id="block">
									<option value="-1">-Select Block-</option>
									<?php
										while($block=mysql_fetch_array($query)){
									?>
										<option value="<?php echo $block['id']?>,<?php echo $block['block_name']?>"><?php echo $block['block_name']?></option>
                             
									<?php
										}
									?>	
									</select>
								</div> 
								<br><br>
								<div class="col-lg-5">
									<label>Enter Flat Number:</label>
                   
								</div>
								<div class="col-lg-7">
                    
									<input class="form-control" placeholder="Flat Number" id="flatno"name="flatno"><?php if(!empty($flatno)) {echo $flatno;}?>
								</div>
								<br><br>
								<div class="col-lg-5">
									<label>Resident Name:</label>
                   
								</div>
								<div class="col-lg-7">
                    
									<input class="form-control" placeholder="Enter Name" id="fname"name="fname"><?php if(!empty($fname)) echo $fname;?>
								</div>
								<br><br>
								<div class="col-lg-5">
									<label>Pleas Enter Registered 10 Digit Mobile Number</label>
                   
								</div>
								<div class="col-lg-7">
                    
									<input class="form-control" placeholder="Mobile Number " id="contact1"name="contact1"><?php if(!empty($contact1)) echo $contact1;?>
								</div>
							<br>	<br>	<br>
								<div class="col-lg-5">
									<label>Enter your registered E-mail </label>
                   
								</div>
								<div class="col-lg-7">
                    
									<input class="form-control" placeholder="email" id="email"name="email"><?php if(!empty($contact1)) echo $contact1;?>
								</div>
								<br>	<br>	
								
								<div class="col-lg-5">
									<label>Enter Amount</label>
									
								</div>
								<div class="col-lg-7">
                    
									<input class="form-control" placeholder="Amount" id="amount"name="amount">
								</div>
								
								
									
								
									<div class="col-lg-2">
										<button type="submit"  id="submit "name="submit"  class="btn btn-primary">Continue </button>   
									</div>
									
								
										
							 
								
							
                            </div> <!-- /.dataTable_wrapper -->
						
						
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
				<!----------------------------------/ Other Option---------------------------------------------->
				<div class="col-lg-8" id="swimming">
					 <div class="panel panel-default">
                        <div class="panel-heading">
                           Swimming Pool  Bill
                        </div>
                        <!-- /.panel-heading -->
						<div class="panel-body">
                            <div class="dataTable_wrapper">
							
								 
								
								<div class="col-lg-5">
									<label>Enter Your Registered ID:</label>
                   
								</div>
								<div class="col-lg-7">
                    
									<input class="form-control" placeholder="Registerd ID" id="id"name="id"><?php if(!empty($flatno)) {echo $flatno;}?>
								</div>
								<br><br>
								<div class="col-lg-5">
									<label>Enter Name:</label>
                   
								</div>
								<div class="col-lg-7">
                    
									<input class="form-control" placeholder="Enter Name" id="fname"name="fname"><?php if(!empty($fname)) echo $fname;?>
								</div>
								<br><br>
								<div class="col-lg-5">
									<label>Pleas Enter 10 Digit Mobile Number</label>
                   
								</div>
								<div class="col-lg-7">
                    
									<input class="form-control" placeholder="Mobile Number " id="contact1"name="contact1"><?php if(!empty($contact1)) echo $contact1;?>
								</div>
								<br>	<br>	<br>
								<div class="col-lg-5">
									<label>Enter your E-mail </label>
                   
								</div>
								<div class="col-lg-7">
                    
									<input class="form-control" placeholder="email" id="email"name="email"><?php if(!empty($contact1)) echo $contact1;?>
								</div>
								
								<div class="col-lg-5">
									<label>Enter Amount</label>
									
								</div>
								<div class="col-lg-7">
                    
									<input class="form-control" placeholder="Amount" id="amount"name="amount">
								</div>
								
								
									
								
									<div class="col-lg-2">
										<button type="submit"  id="submit "name="submit"  class="btn btn-primary">Continue </button>   
									</div>
									
								
										
							 
								
							
                            </div> <!-- /.dataTable_wrapper -->
						
						
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
				
					<!----------------------------------/ Other Option no 3 Gym  Bill---------------------------------------------->
				<div class="col-lg-8" id="gym">
					 <div class="panel panel-default">
                        <div class="panel-heading">
                           Gym  Bill
                        </div>
                        <!-- /.panel-heading -->
						<div class="panel-body">
                            <div class="dataTable_wrapper">
							
								<div class="col-lg-5">
									<label>Please Select Block:</label>
								</div> 
								<div class="col-lg-6">
									<select class="form-control" name="block" id="block">
									<option value="-1">-Select Block-</option>
									<?php
										while($block=mysql_fetch_array($query)){
									?>
										<option value="<?php echo $block['id']?>,<?php echo $block['block_name']?>"><?php echo $block['block_name']?></option>
                             
									<?php
										}
									?>	
									</select>
									</div> 
								<br><br>
								<div class="col-lg-5">
									<label>Enter Flat Number:</label>
                   
								</div>
								<div class="col-lg-7">
                    
									<input class="form-control" placeholder="Flat Number" id="flatno"name="flatno"><?php if(!empty($flatno)) {echo $flatno;}?>
								</div>
								<br><br>
								<div class="col-lg-5">
									<label>Resident Name:</label>
                   
								</div>
								<div class="col-lg-7">
                    
									<input class="form-control" placeholder="Enter Name" id="fname"name="fname"><?php if(!empty($fname)) echo $fname;?>
								</div>
								<br><br>
								<div class="col-lg-5">
									<label>Pleas Enter Registered 10 Digit Mobile Number</label>
                   
								</div>
								<div class="col-lg-7">
                    
									<input class="form-control" placeholder="Mobile Number " id="contact1"name="contact1"><?php if(!empty($contact1)) echo $contact1;?>
								</div>
								<br>	<br>	<br>	
								<div class="col-lg-5">
									<label>Enter Amount</label>
									
								</div>
								<div class="col-lg-7">
                    
									<input class="form-control" placeholder="Amount" id="amount"name="amount">
								</div>
								
								
									
								
									<div class="col-lg-2">
										<button type="submit"  id="submit "name="submit"  class="btn btn-primary">Continue </button>   
									</div>
									
								
										
							 
								
							
                            </div> <!-- /.dataTable_wrapper -->
						
						
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
				
				<!----------------------------------/ Other Option no 4 Banquet Hall Bill---------------------------------------------->
				<div class="col-lg-8" id="banquet">
					 <div class="panel panel-default">
                        <div class="panel-heading">
                           Banquet Hall Bill
                        </div>
                        <!-- /.panel-heading -->
						<div class="panel-body">
                            <div class="dataTable_wrapper">
							
								<div class="col-lg-5">
									<label>Please Select Block:</label>
								</div> 
								<div class="col-lg-6">
									<select class="form-control" name="block" id="block">
									<option value="-1">-Select Block-</option>
									<?php
										while($block=mysql_fetch_array($query)){
									?>
										<option value="<?php echo $block['id']?>,<?php echo $block['block_name']?>"><?php echo $block['block_name']?></option>
                             
									<?php
										}
									?>	
									</select>
									</div> 
								<br><br>
								<div class="col-lg-5">
									<label>Enter Flat Number:</label>
                   
								</div>
								<div class="col-lg-7">
                    
									<input class="form-control" placeholder="Flat Number" id="flatno"name="flatno"><?php if(!empty($flatno)) {echo $flatno;}?>
								</div>
								<br><br>
								<div class="col-lg-5">
									<label>Resident Name:</label>
                   
								</div>
								<div class="col-lg-7">
                    
									<input class="form-control" placeholder="Enter Name" id="fname"name="fname"><?php if(!empty($fname)) echo $fname;?>
								</div>
								<br><br>
								<div class="col-lg-5">
									<label>Pleas Enter Registered 10 Digit Mobile Number</label>
                   
								</div>
								<div class="col-lg-7">
                    
									<input class="form-control" placeholder="Mobile Number " id="contact1"name="contact1"><?php if(!empty($contact1)) echo $contact1;?>
								</div>
								<br>	<br>	<br>	
								<div class="col-lg-5">
									<label>Enter Amount</label>
									
								</div>
								<div class="col-lg-7">
                    
									<input class="form-control" placeholder="Amount" id="amount"name="amount">
								</div>
								
								
									
								
									<div class="col-lg-2">
										<button type="submit"  id="submit "name="submit"  class="btn btn-primary">Continue </button>   
									</div>
									
								
										
							 
								
							
                            </div> <!-- /.dataTable_wrapper -->
						
						
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
				
				<!----------------------------------/ Other Option no 5 Electricity Bill---------------------------------------------->
				<div class="col-lg-8" id="electricity">
					 <div class="panel panel-default">
                        <div class="panel-heading">
                          Electricity Bill
                        </div>
                        <!-- /.panel-heading -->
						<div class="panel-body">
                            <div class="dataTable_wrapper">
							
								<div class="col-lg-5">
									<label>Please Select Block:</label>
								</div> 
								<div class="col-lg-6">
									<select class="form-control" name="block" id="block">
									<option value="-1">-Select Block-</option>
									<?php
										while($block=mysql_fetch_array($query)){
									?>
										<option value="<?php echo $block['id']?>,<?php echo $block['block_name']?>"><?php echo $block['block_name']?></option>
                             
									<?php
										}
									?>	
									</select>
									</div> 
								<br><br>
								<div class="col-lg-5">
									<label>Enter Flat Number:</label>
                   
								</div>
								<div class="col-lg-7">
                    
									<input class="form-control" placeholder="Flat Number" id="flatno"name="flatno"><?php if(!empty($flatno)) {echo $flatno;}?>
								</div>
								<br><br>
								<div class="col-lg-5">
									<label>Resident Name:</label>
                   
								</div>
								<div class="col-lg-7">
                    
									<input class="form-control" placeholder="Enter Name" id="fname"name="fname"><?php if(!empty($fname)) echo $fname;?>
								</div>
								<br><br>
								<div class="col-lg-5">
									<label>Pleas Enter Registered 10 Digit Mobile Number</label>
                   
								</div>
								<div class="col-lg-7">
                    
									<input class="form-control" placeholder="Mobile Number " id="contact1"name="contact1"><?php if(!empty($contact1)) echo $contact1;?>
								</div>
								<br>	<br>	<br>	
								<div class="col-lg-5">
									<label>Enter Amount</label>
									
								</div>
								<div class="col-lg-7">
                    
									<input class="form-control" placeholder="Amount" id="amount"name="amount">
								</div>
								
								
									
								
									<div class="col-lg-2">
										<button type="submit"  id="submit "name="submit"  class="btn btn-primary">Continue </button>   
									</div>
									
								
										
							 
								
							
                            </div> <!-- /.dataTable_wrapper -->
						
						
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
            </form>
				
		
			
			
			
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


	<?php include('footer.php'); ?>
</body>

</html>
