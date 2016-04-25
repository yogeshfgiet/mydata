<?php
require "gump.class.php";
include('header.php');
include('sidemenu.php');
	$sql= "SELECT * from`event` order by id desc ;";

	$data=mysql_query($sql);
	

	    
	  
 ?>
<head>
   <script type="text/javascript">
$(document).ready(function(){			 
$(".delete_news").click(function(){
   var del_id = $(this).attr('id');
   var rowElement = $(this).parent().parent(); //grab the row
	   
   $.ajax({
            type:'POST',
            url:'delete_list.php',
            data: {delete_id : del_id},
            success:function(data) {
                if(data == "YES") {
				   $("p").hide();
                   rowElement.hide(50000).remove();
				      location.reload();
                } 
                else {

                }   
            }
    });
	
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
                        <h1 class="page-header">Oue Event List</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
			<form id='myform'class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
			
					<div class="col-lg-6">
						<div class="panel panel-default">
							<div class="panel-heading">
								Event List
							</div>
							<!-- /.panel-heading -->
							<div class="panel-body">
								<div id="scrol"class="dataTable_wrapper">
									<ul class="list-unstyled">
									<?php
										while($row=mysql_fetch_array($data)){
										?>
										<li class="col-lg-10"><a href='event_show.php?event_id=<?php echo $row['id']?>'><?php echo $row['event_name']?><img src="image/11111new.gif" width="35px" height="25px"></a></li>
										
										<li class="dele"><a href="#"id="<?php echo $row['id'];?>" class="delete_news"> Delete</a></li>
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
