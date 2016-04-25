
<?php
require "gump.class.php";
include('header.php');
include('sidemenu.php');
	$id= $_GET['event_id'];
	$sql="select * from `event` where `id`='".$id."'";

$data= mysql_query($sql);
	if(isset($_POST['show'])){
	//$empid=$obj->showpdf($_POST);	
}	
   

	    
	  
 ?>

<body>

    <div id="wrapper">

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Organise Event Details :</h1>
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
                            Event Description
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
									
										             <?php
								while($record=mysql_fetch_array($data)){
						?>
					
								<div class="col-lg-6">
									<label>Event Title :</label>
								</div>	
								<div class="col-lg-6">
									<p><?php echo $record['event_name']?></p>
								</div>	
								
								<div class="col-lg-6">
									<label>Event Description :</label>
								</div>	
								<div class="col-lg-6">
									<p><?php echo $record['event_desc']?></p>
								</div>
								<div class="col-lg-6">
									<label>Venue Address :</label>
									</div>	
								<div class="col-lg-6">
									<p><?php echo $record['event_add']?></p>
								</div>
								
								
								<div class="col-lg-6">
								<label>Organise From :</label>
								</div>	
								<div class="col-lg-6">
									<p><?php echo $record['date_from']?> </p>
								</div>
									
								<div class="col-lg-6">
									<label>Organise To :</label>
								</div>	
								<div class="col-lg-6">
									<p><?php echo $record['date_to']?></p>
								</div>
									
								
								

								<?php }?>
								<br><br>	<br><br>
								
									<center>
							<div class="col-lg-12">
							
									<a class="btn btn-info" role="button" href="eventlist.php">Go Back</a>
									
                            <!-- /.table-responsive -->
                           </div>
						   </center>
                            </div>
						
						
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

    
</body>

</html>
