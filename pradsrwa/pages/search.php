<?php
require "gump.class.php";
include('header.php');
include('sidemenu.php');
 // $sql="SELECT * FROM `block`;";
// $query=mysql_query($sql);
  

 
	if(isset($_POST['submit'])){
	

	  $mydata=$obj->search($_POST);
	
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
	<script type="text/javascript" src="jquery-1.11.3.js"></script>
             <script type="text/javascript">
		$(function(){
    $("#").hide();
	$("#flat").hide();
	  $("#contact").hide();
	$("#block").hide();

   
});		

 
	
 $(document).ready(function() { 		

  $('#search').change(function() {
    if( $(this).val()=="1"){
        $("#name").show()
        }
        else{
        $("#name").hide()
		
		
        }
		if( $(this).val()=="2"){
        $("#flat").show()
        }
        else{
        $("#flat").hide()
        }
		if( $(this).val()=="3"){
        $("#contact").show()
        }
        else{
        $("#contact").hide()
        }
		if( $(this).val()=="4"){
        $("#block").show()
        }
        else{
        $("#block").hide()
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

     
  

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Find Resident Details</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
			<form id='myform'class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
					
					
					
					
					<div class="col-lg-3">
                           
							<select class="form-control" name="search" id="search">
							
							<option value="-1">-Select Option-</option>
						  <option value="1">Search By Name</option>
							  <option value="2">Search By Flat</option>
									
                                <option value="3">Search By Contact</option>
								   <option value="4">Search By Block</option>
								
                             
                           </select>
						</div> 
					
					
				  <div class="col-lg-3">
                    
                    <input class="form-control" placeholder="Enter Vehicle Details" id="name"name="name">
					 <input class="form-control" placeholder="Enter flat Details" id="flat"name="flat"><?php if(!empty($flat)) echo $flat;?>
					  <input class="form-control" placeholder="Enter contact Details" id="contact"name="contact"><?php if(!empty($contact)) echo $contact;?>
					   <input class="form-control" placeholder="Enter block Details" id="block"name="block"><?php if(!empty($block)) echo $block;?>
				  </div>
					  
					
				
				  <div class="col-lg-3">
                    <button type="submit"  id="submit "name="submit"  class="btn btn-primary"> <span class="glyphicon glyphicon-search"> Find Now</button>
                    
				  </div>
                     
            
				<br><br>		
			    
            <!-- /.row -->
					               <?php
										if (!empty($mydata)){
								
						?>

            <div   class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            RWA Resident List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
							
						
							
							
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
									
									
                                        <tr>
                                            <th>Block</th>
                                            <th> First Name</th>
                                            <th>Last Name</th>
                                            <th>Contact Number</th>
                                            <th>E-mail Id</th>
											 <th>Details</th>
											
                                        </tr>
                                    </thead>
                                    <tbody>
                         <?php
                             while($record=mysql_fetch_array($mydata)){
                             ?>       
                                        
                                        <tr class="gradeC">
                                            <td><?php echo $record['block']?></td>
                                            <td><?php echo $record['first_name']?></td>
                                            <td><?php echo $record['last_name']?></td>
                                            <td class="center"><?php echo $record['phone_no1']?></td>
                                            <td class="center"><?php echo $record['email']?></td>
											<td class="center"><a href="viewdetail.php?record_id=<?php echo $record['id'] ?>">View Full Details</a></td>
                                        </tr>
										 	<?php
							 }
								}
							?>	
                              
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           </form>
			

			
		
			
			
			
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
