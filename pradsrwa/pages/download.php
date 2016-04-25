<?php
require "gump.class.php";
include('header.php');
include('sidemenu.php');
	$sql= "SELECT * from`fileupload`;";

	$data=mysql_query($sql);
	

	    
	  
 ?>
<head>
	
	
	</head>
<body>

    <div id="wrapper">

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Download Your Document</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
			<form id='myform'class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
			
					<div class="col-lg-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								Download Form
							</div>
							<!-- /.panel-heading -->
							<div class="panel-body">
								<div id="scrol"class="dataTable_wrapper">
									<ul class="list-unstyled">
									<?php
										while($row=mysql_fetch_array($data)){
										?>
										<li><a href='dounloadfile.php?nama=<?php echo $row['file_path']?>'><?php echo $row['file_name']?></a></li>
										
										
										<?php }?>
									</ul>
									
								</div>
						
						
							</div>
							<!-- /.panel-body -->
						</div>
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
