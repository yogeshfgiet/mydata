


<?php
//error_reporting(1);
//session_start();
$session_id='-1';

include('config.php');
include('header.php');
include('sidemenu.php');





?>   	
<html>
	<head><title>Home</title>
		
		
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
		<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
		
		</head>
		
		
<script src="js/jquery.min.js"></script>
<script src="js/jquery.wallform.js"></script>
<script>
 $(document).ready(function() { 
		
            $('#photoimg').die('click').live('change', function()			{ 
			           //$("#preview").html('');
			    
				$("#imageform").ajaxForm({target: '#preview', 
					beforeSubmit:function(){ 
					
					console.log('ttest');
					$("#imageloadstatus").show();
					 $("#imageloadbutton").hide();
					 }, 
					success:function(){ 
				    console.log('test');
					 $("#imageloadstatus").hide();
					 $("#imageloadbutton").show();
					}, 
					error:function(){ 
					console.log('xtest');
					 $("#imageloadstatus").hide();
					$("#imageloadbutton").show();
					} }).submit();
					
		
			});
        }); 
</script>

<style>

body
{
font-family:arial;
}

#preview
{
color:#cc0000;
font-size:12px
}
.imgList 
{
height:150px;
margin-left:5px;
border:1px solid #dedede;
padding:4px;	
float:left;	
}

 </style>	
	<body> 
	
	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Upload Your image here......</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
		
<div id='preview'>
</div>
	
<form id="imageform" method="post" enctype="multipart/form-data" action='upload.php' style="clear:both">
<h1></h1> 
<div id='imageloadstatus' style='display:none'><img src="loader.gif" alt="Uploading...."/></div>
<div id='imageloadbutton'>
<input type="file" name="userfile" id="photoimg" multiple="true" />
</div>
</form>

</div>
	<?php include('footer.php'); ?>
</body>

 </html>


