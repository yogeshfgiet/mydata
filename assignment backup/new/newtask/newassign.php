<?php

include("config.php");
include('class.php');

$obj= new user();

	if(isset($_POST['submit'])){
	  $mydata=$obj->search($_POST);
	
	  }
		$empid=$obj->hello($_POST);
		echo $empid;
?>


				









<!DOCTYPE html>

<html>
    <head>
<style>

#pagination div { display: inline-block; margin-right: 5px; margin-top: 5px }
#pagination .cell a { border-radius: 3px; font-size: 11px; color: #333; padding: 8px; text-decoration:none; border: 1px solid #d3d3d3; background-color: #f8f8f8; }
#pagination .cell a:hover { border: 1px solid #c6c6c6; background-color: #f0f0f0; }
#pagination .cell_active span { border-radius: 3px; font-size: 11px; color: #333; padding: 8px; border: 1px solid #c6c6c6; background-color: #e9e9e9; }
#pagination .cell_disabled span { border-radius: 3px; font-size: 11px; color: #777777; padding: 8px; border: 1px solid #dddddd; background-color: #ffffff; }



</style>

		 <meta charset="utf-8">
   		 <meta http-equiv="X-UA-Compatible" content="IE=edge">
  		 <meta name="viewport" content="width=device-width, initial-scale=1">
  		  <meta name="description" content="">
  		  <meta name="author" content="">
        <title>Fancy Box </title>
				 <!-- Bootstrap Core CSS -->
  				  <link href="../css/bootstrap.min.css" rel="stylesheet">

 				   <!-- MetisMenu CSS -->
 					   <link href="../css/bootstrap.css" rel="stylesheet">

  				  <!-- Timeline CSS -->
  				  <link href="../css/bootstrap.css.map" rel="stylesheet">

 				  <link href="../css/bootstrap.min.css.map" rel="stylesheet">
 				  <link href="../css/bootstrap-theme.css" rel="stylesheet">  
 				<link href="../css/bootstrap-theme.css.map" rel="stylesheet">  
				 <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
				 <link href="../css/bootstrap-theme.min.css.map" rel="stylesheet">

				 <!-- Bootstrap js -->
 				   <link href="/..js/bootstrap.js" rel="stylesheet">
   
 				   <link href="/..js/bootstrap.min.js" rel="stylesheet">
				<link href="../js/npm.js" rel="stylesheet">	

				<!-----------------Boot Strap -------------->
		 <link rel="stylesheet" href="style.css" type="text/css" >
		 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    		  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
   	
 	  	 <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    

       		    <script src="fancyapps-fancyBox-18d1712/lib/jquery.mousewheel-3.0.6.pack.js" type="text/javascript"></script>
     		    <link href="fancyapps-fancyBox-18d1712/source/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
    		    <script src="fancyapps-fancyBox-18d1712/source/jquery.fancybox.pack.js" type="text/javascript"></script>
    		    <link href="fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-buttons.css" rel="stylesheet" type="text/css"/>
    		    <script src="fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-buttons.js" type="text/javascript"></script>
     		    <script src="fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-media.js" type="text/javascript"></script>
    		    <script src="fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-thumbs.js" type="text/javascript"></script>
    		    <link href="fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-thumbs.css" rel="stylesheet" type="text/css"/>
			    <script src="myjs.js" type="text/javascript"></script>
        	    <script >

</script>

   </head>
    <body>

	<div    id="fancy">
     	 <form role="form"  id="myform"  method="post" onsubmit="return submitForm();"  >     
   		<div class=""> <h3> Registration Form</h3>

 				 <label for="name">Enter Name:</label>
   					<input type="text"  id="firstname" class="form-control" name="name" required> <br>
     				 <label for="name">Enter Email:</label>
					<input type="email"  class="form-control" id="email" email="email"  name="email"required>  <br>
   				 <label for="name">Enter Message:</label>
					<textarea rows="2" cols="20" class="form-control"  id="tex" name="mass" required></textarea>  <br>
 				 <label for="name">Enter DOB:</label>
					 <input type="text" class="form-control"  id="datepicker" name="dob"> <br>
     		 	          <input type="submit" class="btn btn-primary "  id="submit" value="submit" name="submit"></td></tr> 

       				 <div class="result"> </div>
    

		      
		</div>

	</form>
      </div>
   	





<div class="container" id="aa">

		<nav class="navbar navbar-default">
 		 <div class="container-fluid">
   			 <div class="navbar-header">
   				   <a class="navbar-brand" href="#">AJAX With JSON</a>
   			 </div>
 			   <ul class="nav navbar-nav">
  			    <li class="active"><a href="#">Home</a></li>
  			    <li><a href="#">Check Box</a></li>
  			    <li><a href="#">Fancy Box</a></li>
  			    <li><a href="#">Nivo Slider</a></li>
			 <li><a href="#">CK Editor</a></li> 
   			 </ul>
			 <ul class="nav navbar-nav navbar-right">
     				 <li><a href="#fancy" class="link2"><span class="glyphicon glyphicon-user"></span> Register</a></li>
    				
  			  </ul>
		  </div>
		</nav>




	   <div class=" col-lg-2" id="div1" >
 	   <div class="" > Post Your Add.</div>
    	  	 <div class=" "  >
		 </div>
 	
       	 </div>


	<div class="panel panel-default col-lg-8" >
 	   <div class="" ><h3>User Details</h3></div>
    	   <div class="panel-body "  id="dataDiv">

	 </div>
 	<!------------------------------------->








		<div id="articleArea"></div> <!-- Where articles appear -->
 
<!-- Where pagination appears -->
<div id="pagination">
<!-- Just tell the system we start with page 1 (id=1) -->
<!-- See the .js file, we trigger a click when page is loaded -->
<div><a href="#" id="1"></a></div>
</div>




















		<!-------------------------------------->
 	   </div>

	
	<div class=" col-lg-2" id="div1" >
 	   <div class="" > Post Your Add.</div>
    	   <div class=" "  >
	 </div>
 	
        </div>


	<div class=" col-lg-12" id="" >
 	   
    	   <div class=" "  >
		<p>Powered By :<a href="#"> Excellence Technology</a></p>
		 
	 </div>
 	
      </div>


					













 </div>




  </body>
</html>

