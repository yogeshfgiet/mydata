<!doctype html>
<html>
<head>
    
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Validation</title>


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
   
    <link href="js/bootstrap.min.js" rel="stylesheet">
<link href="js/npm.js" rel="stylesheet">	

<!-----------------Boot Strap -------------->








<link rel="stylesheet" href="style.css" type="text/css" >
    
    <script src="jquery-1.12.0.min.js"></script>
    <script>


 function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test(email)) {
           return false;
        }else{
           return true;
        }
      }



$(document).ready(function(){
            
            $('#validateform').on('click','#submit',function(){
                var error=false;
               var email=$('#email').val();
               var firstname=$('#firstname').val();
               var password=$('#password').val();
               var cnfpassword=$('#cnfpassword').val();
               
			 if(firstname==''){
                    alert('first name can not be blank');
                    error=true;
               }
              else if(email==''){
                   alert('email can not be blank');
                   error=true;
		
		
               }
		 else if(IsEmail(email)==false){
                 alert('invailid Email');
                return false;
            }

		else if(password==''){
                    alert('password can not be blank');
                    error=true;
               }else if(cnfpassword==''){
                    alert('confirm password can not be blank');
                    error=true;
               }
               else if(password!=cnfpassword){
                    alert('password and confirm password must be same');
                    error=true;
               }else if(!$('#terms').prop('checked')){
                     alert('please agree terms and condition');
                      error=true;
               }
               
               if(error){
                   return false;
               }else {
                   alert('form submitted Succesfully');
                   return true;
               }
               
               
            });
            
        });
$("#submit").click(function(event){
        event.preventDefault();
    });
   
 
    </script>
</head>
<body>

<div class="container">


	<div class=" col-lg-4" >
 	   
    	 	  <div class=""> </div>
		
   		 </div>


	<div class="panel panel-default col-lg-4" >
 	   <div class="panel-heading" > <Strong> Simple Validation Form</strong></div>
    	   <div class="panel-body">
		 <form role="form" method="psot" id="validateform"action="">

			  <div class="form-group">
   				 <label for="name">Enter Name:</label>
   				<input type="text" name="firstname" id="firstname" class="form-control"> 
 			 </div>
			  <div class="form-group">
   				 <label for="email">Email address:</label>
   				 <input type="email" name="email" id="email" class="form-control">
 			 </div>
 			
			 <div class="form-group">
   				 <label for="pwd">Password:</label>
   				 <input type="text" name="password" id="password"class="form-control" >
			  </div>
			 <div class="form-group">
   				 <label for="pwd">Conferm Password:</label>
   				 <input type="text" name="cnfpassword" id="cnfpassword"class="form-control">
			  </div>
 			 <div class="checkbox">
   				 <label><input type="checkbox" name="terms" id="terms">Terms And conditions</label>
  			</div>
			  <input type="submit" name="submit" value="submit" id="submit" class="btn btn-default"></button>
		</form>
	 </div>
		<a id="aa" href="index.php">Click Here to main menu</a> 
    </div>
 </div>






















</div>
</body>
</html>
