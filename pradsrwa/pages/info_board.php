
<?php
require "gump.class.php";
include('header.php');
include('sidemenu.php');



if(isset($_POST['submit'])){
	
	 $workerdata=$obj->workerlist($_POST);
  
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
	<!--------------date picker---------->
	  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
             <script type="text/javascript">
$(document).ready(function(){			 
$(".delete_worker").click(function(){
   var del_id = $(this).attr('id');
   var rowElement = $(this).parent().parent(); //grab the row
if(confirm("Are you sure you want to delete this?"))
{
   $.ajax({
            type:'POST',
            url:'delete_worker.php',
            data: {delete_id : del_id},
            success:function(data) {
                if(data == "YES") {
				   
                   rowElement.hide(500).remove();
                } 
                else {

                }   
            }
    });
}
});
});
  </script>
	
	
</head>

<body>

    <div id="wrapper">

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Information Board :</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
			<form id='myform'class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
					
				<div   class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Information Board 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
									<div class="col-lg-3">
                           
										<select class="form-control" name="work_type" id="work_type">
							
										<option value="-1">-Select Worker-</option>
										<option value="Electrician">Electrician</option>
										<option value="Plumber">Plumber</option>
									
										<option value="Sweepers">Sweepers</option>
										<option value="Power back</">Power back</option>
										<option value="Security Guard">Security Guard</option>
                             
										</select>
									</div> 	
								
									<div class="col-lg-2">
										<button type="submit"  id="submit "name="submit"  class="btn btn-primary">Show Worker List </button>   
									</div>
									<div class="col-lg-7">
										<a class="btn btn-primary" role="button" href="add_worker.php">Add New Worker Details</a>  
									</div>
								<br><BR>
								 <?php
								
							if (!empty($workerdata)){
						
                             ?> 
							 
							 
							<div class="col-lg-12">
							 
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
									
									
                                        <tr>
                                            <th>Worker Type</th>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Contact Number</th>
                                           <th>Operation</th>
                                           
											
                                        </tr>
                                    </thead>
									<?php 
									if(mysql_num_rows($workerdata) == 0) {
										echo $msg = "No row found!";
									}

									else{
										while($record=mysql_fetch_array($workerdata)){  
									?>
                                
									
                                        
                                        <tr class="gradeC<?php echo $record['worker_id'];?>">
											
                                            <td><?php echo $record['worker_type']?></td>
                                            <td><?php echo $record['worker_name']?></td>
                                            <td><?php echo $record['worker_gender']?></td>
                                            <td class="center"><?php echo $record['worker_contact']?></td>
                                            
											<td class="center" ><a href="#"id="<?php echo $record['worker_id']; ?>" class="delete_worker">Delete</a></td>
                                        </tr>
									
                            
									<?php
										}
									}
							
								?>
                                </table>
								
								
								</div><!------------end table---------->
						<?php
							
							 }
							
							?>	
								
								
							
                            </div> <!-- /.dataTable_wrapper -->
						
						
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
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
