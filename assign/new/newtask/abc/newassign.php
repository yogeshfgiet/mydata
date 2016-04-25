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
#fancy {
 display:none;
}





</style>

		 <meta charset="utf-8">
   		 <meta http-equiv="X-UA-Compatible" content="IE=edge">
  		 <meta name="viewport" content="width=device-width, initial-scale=1">
  		  <meta name="description" content="">
  		  <meta name="author" content="">
        <title>Fancy Box </title>
				 <!-- Bootstrap Core CSS -->
  				  <link href="css/bootstrap.min.css" rel="stylesheet">

 				   <!-- MetisMenu CSS -->
 					   <link href="css/bootstrap.css" rel="stylesheet">

  				  <!-- Timeline CSS -->
  				  <link href="css/bootstrap.css.map" rel="stylesheet">

 				  <link href="css/bootstrap.min.css.map" rel="stylesheet">
 				  <link href="css/bootstrap-theme.css" rel="stylesheet">  
 				<link href="css/bootstrap-theme.css.map" rel="stylesheet">  
				 <link href="css/bootstrap-theme.min.css" rel="stylesheet">
				 <link href="css/bootstrap-theme.min.css.map" rel="stylesheet">

				 <!-- Bootstrap js -->
 				   <link href="js/bootstrap.js" rel="stylesheet">
   
 				   <link href=""js/bootstrap.min.js" rel="stylesheet">
				<link href="js/npm.js" rel="stylesheet">	

				<!-----------------Boot Strap -------------->
		 <link rel="stylesheet" href="style.css" type="text/css" >
		 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    		  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
   	
 	  	 <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		 
		  <script src="jquery-1.12.0.min.js"></script>
    

       		    <script src="fancyapps-fancyBox-18d1712/lib/jquery.mousewheel-3.0.6.pack.js" type="text/javascript"></script>
     		    <link href="fancyapps-fancyBox-18d1712/source/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
    		    <script src="fancyapps-fancyBox-18d1712/source/jquery.fancybox.pack.js" type="text/javascript"></script>
    		    <link href="fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-buttons.css" rel="stylesheet" type="text/css"/>
    		    <script src="fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-buttons.js" type="text/javascript"></script>
     		    <script src="fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-media.js" type="text/javascript"></script>
    		    <script src="fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-thumbs.js" type="text/javascript"></script>
    		    <link href="fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-thumbs.css" rel="stylesheet" type="text/css"/>
        	    <script >

  $(document).ready(function() {
	
               $(".link2").fancybox({
		'frameWidth': 1000,
		'frameHeight': 500,
		'zoomSpeedIn':	1000,
		'zoomSpeedOut':	1000
		});

   });




function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test(email)) {
         	 return false;
       	 }else{
           return true;
          }
        }

	$(document).ready(function() {
		
		$("#u_id").click(function(){
			
				alert('kk');
			
		});
			
		
			
		
		
 	     		   $( "#datepicker" ).datepicker({
  	 		   changeMonth: true,//this option for allowing user to select month
   	  		   changeYear: true //this option for allowing user to select from year range
     			   });



              		  $('#submit').click(function(e) {

  				e.preventDefault();

				var name = $('#name').val();
				var email = $('#email').val();

				if(name==''){
                  	 		 alert('first name can not be blank');
                 			   return false;
				}
				if(email==''){
                  	 		 alert('please Enter Email');
                  			  return false;
				}
			        else if(IsEmail(email)==false){
              				   alert('Please Enter Valid Email');
             				   return false;
          			  }


                   	 $.ajax({
                     		   type: 'POST',
                      		  url: 'insert.php',
                    		  data:$('form').serialize(), 
                    		    success: function() {
                      		   	   $('input[type=text], textarea').val('');
 					  $('input[type=email], textarea').val('');
					  parent.jQuery.fancybox.close();
 					  $('#myform').find('.result').html(response);
                        	    $.ajax({
                       	     		    url: 'data.php',
                            		    type: 'POST',
                            		    dataType: 'text',
                             		   success: function(data) {
                                  		  myFunction(data);
                               		 }
                           		 });
                       		 }
                  	  });

               		 });

            });




    	  $(window).load(function() {
			  
			  
              	  $.ajax({
                  	  url: 'data.php',
                         type: 'POST',
                         success: function(data) {
                      		  myFunction(data);
                 	   }
              	  });
                  	 //setInterval('autoRefresh()', 10000);
            });


   	function autoRefresh() {
                $.ajax({
                    url: 'data.php',
                    type: 'POST',
                    dataType: 'text',
                    success: function(data) {
                        myFunction(data);
                    }
                });
            }

 		function myFunction(response) {
            	    var obj = JSON.parse(response);
            	    var i;
              	    var out = "<table class=table table-condensed><tr class=success><th id=u_id>ID</a></th><th>NAME</th><th>EMAIL</th><th>MESSAGE</th><th><a href=#>DOB</a></th></tr>";
             	   for (i = 0; i < 5; i++) {
                   	 out += "<tr class=info><td>" + obj[i].id + "</td><td>" + obj[i].name + "</td><td>" +
                            obj[i].email +
                            "</td><td>" +
                            obj[i].message +
                            "</td><td>" +
                            obj[i].date +
                            "</td></tr>";
                   }
               	 out += "</table>";
		 $("#dataDiv").html(out);
            }


$("document").ready(function() {

    $('#utext').on('input', function() {

        
        var searchKeyword = $(this).val();
        
       if (searchKeyword.length >= 2) {
            $.getJSON('search.php', {keywords: searchKeyword}, function(data) {
              
                $("#dataDiv").empty();
                	 var html = "<table class=table table-condensed><tr class=success><th><a id=u_id href=# >ID</a></th><th>NAME</th><th>EMAIL</th><th>MESSAGE</th><th><a href=#>DOB</a></th></tr>";
                for (var i = 0; i < data.length; i++) {
                  
                    html += "<tr  class=info ><td>" + data[i].id + "</td>"
                    
                    html += "<td>" + data[i].name + "</td>"
                    html += "<td>" + data[i].email + "</td>"
                   
                    html += "<td>" + data[i].message + "</td>"
                   
                    html += "<td>" + data[i].date + "</td></td>"
                   
                     
                }      

   }); 
			 html += "</table>";
                    $("#dataDiv").html(html);
                
                

clearInterval(set);
         
       }
    });

});    












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
<li> <input type="text" class="form-control" id="utext" placeholder="Enter Name"></li>     				
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
 	efvr4fr4f

    </div>

	
	<div class=" col-lg-2" id="div1" >
 	   <div class="" > Post Your Add.</div>
    	   <div class=" "  >

		 
		
				 <ul class="pagination">
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
</ul>	
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










