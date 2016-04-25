<?php
require "gump.class.php";
include('header.php');
include('sidemenu.php');
 // $sql="SELECT * FROM `block`;";
// $query=mysql_query($sql);
 // $empid=$obj->viewrecord($_POST);

   
 


	
			
 ?>

<html lang="en">
<head>
	<link rel="stylesheet" href="dist/css/lightbox.css">
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
                        <h1 class="page-header">Image Gallery</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
			<form id='myform'class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
						
						
						
			<?php
				  $empid=$obj->viewrecord($_POST);
					while($block=mysql_fetch_array($empid)){?>
					  <section>
    
						<div>
					
	
					 <a class="example-image-link" href="http://localhost/pradsrwa/pages/uploads/<?php echo $block['image_name']?>" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img style=" float: left;  height: 172px; padding-left: 13px;  width: 250px;" class="example-image" src="uploads/<?php echo $block['image_name']?>" alt=""/></a>	
						 </div>
						  </section>
						
					
						
					<?php }?>
					
    
				<div class="col-lg-4">
				
					</div>
					
      
                    <div class="col-lg-4">
					
					
					 <?php  echo $_SESSION['msg']; ?>
                  
                    <!-- /.panel -->
					</div>
					<div class="col-lg-4">
				
					</div>
            </form>
				
			
			
			
			
			
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
	    
 <script src="dist/js/lightbox-plus-jquery.min.js"></script>
 	<?php include('footer.php'); ?>
</body>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

</html>
