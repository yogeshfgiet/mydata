<html>
<head>

		 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Check Box</title>
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

	    <script src="jquery-1.12.0.min.js"></script>
 <link rel="stylesheet" href="style.css" type="text/css" >

<style>
            li{
                list-style-type: none;
            }
 </style>
</head>


<script type="text/javascript">
$(document).ready(function() {
  	$('input[type=checkbox]').click(function(){ 
  	 	 $(this).next().find('input[type=checkbox]').prop('checked',this.checked);
 
 	 	  $(this).parents('ul').prev('input[type=checkbox]').prop('checked',function(){
      			  return $(this).next().find(':checked').length;
   		 });
	});


	});


</script> 
<body>



<div class="container">
	<div class=" col-lg-4" >
 	   
    	 	  <div class=""> </div>
		
   		 </div>

	<div class="panel panel-default col-lg-4" >
 	   <div class="panel-heading" > <Strong>Check Box</strong></div>
    	   <div class="panel-body">
		 <div class="checkbox">
		 
                    <ul>
                        <li>
                            <input type="checkbox" name="p1" >Property
                        
                            <ul >
                           	 <li><input type="checkbox" name="">Edit Property

							<ul>
					  		<li><input type="checkbox" name="" ">Edit Property Add1</li>
                           				 <li><input type="checkbox" name="">Edit Property Add2</li>
							 <li><input type="checkbox" name="">Edit Property Add3</li>
							</ul>

				</li>
                            	<li><input type="checkbox" name="" ">Add Property
					<ul>
					  		<li><input type="checkbox" name="" ">Add Property Add1</li>
                           				 <li><input type="checkbox" name="">Add Property Add2</li>
							<li><input type="checkbox" name="">Add Property Add3</li>
							</ul>

				</li>
                           	 <li><input type="checkbox" name="">Remove Property
					<ul>
					  		<li><input type="checkbox" name="" ">Remove Property 1</li>
                           				 <li><input type="checkbox" name="">Remove Property 2</li>
							<li><input type="checkbox" name="">Remove Property 3</li>
							</ul>
					
					</li>
				   
                      	    </ul>
                         </li>

                         <li >
                            <input type="checkbox" name="p2" ">Testimonial
                        
                      	  <ul>
                           	 <li><input type="checkbox" name="" >Add
					<ul>
					  		<li><input type="checkbox" name="" "> Add 1</li>
                           				 <li><input type="checkbox" name="">Add2</li>
							<li><input type="checkbox" name="">Add3</li>
					</ul>
				</li>
                           	 <li><input type="checkbox" name="" >Remove
					<ul>
					  		<li><input type="checkbox" name="" ">Remove 1</li>
                           				 <li><input type="checkbox" name="">Remove 2</li>
							 <li><input type="checkbox" name="">Remove 3</li>
							</ul>
				</li>
                           	 <li><input type="checkbox" name="">View
					<ul>
					  		<li><input type="checkbox" name="" ">View 1</li>
                           				 <li><input type="checkbox" name="">View 2</li>
							<li><input type="checkbox" name="">View 3</li>
							</ul>	

				</li>
                        
                      	  </ul>
                          </li>

                        <li>
                            <input type="checkbox" name="p3">Users
                        
                       	    <ul >
                          	  <li><input type="checkbox" name="" >Edit User

							<ul>
					  		<li><input type="checkbox" name="" ">Edit User 1</li>
                           				 <li><input type="checkbox" name="">Edit User2</li>
							 <li><input type="checkbox" name="">Edit User3</li>
							</ul>	



				</li>
                          	  <li><input type="checkbox" name="" >View User List

							<ul>
					  		<li><input type="checkbox" name="" ">View User List1</li>
                           				 <li><input type="checkbox" name="">View User List 2</li>
							<li><input type="checkbox" name="">View User List 3</li>
							</ul>	


				</li>
                          	  <li><input type="checkbox" name="" >Add User
						<ul>
					  		<li><input type="checkbox" name="" ">Add User1</li>
                           				 <li><input type="checkbox" name="">Add User 2</li>
								<li><input type="checkbox" name="">Add User 3</li>
							</ul>	

				</li>
                     	   </ul>
                         </li>

                       <li >
                            <input type="checkbox" name="p4" >Membership
                        
                       	 <ul>
                           	 <li><input type="checkbox" name="" >Edit Membership
					<ul>
					  		<li><input type="checkbox" name="" ">Edit Membership1</li>
                           				 <li><input type="checkbox" name="">Edit Membership 2</li>
							 <li><input type="checkbox" name="">Edit Membership 3</li>
							</ul>	

				</li>
                         	   <li><input type="checkbox" name="" >Remove Membership
					<ul>
					  		<li><input type="checkbox" name="" ">Remove Membership1</li>
                           				 <li><input type="checkbox" name="">Remove Membership 2</li>
							<li><input type="checkbox" name="">Remove Membership 3</li>
							</ul>	

				</li>
                          	  <li><input type="checkbox" name="" >Add Membership
					<ul>
					  		<li><input type="checkbox" name="" ">Add Membership1</li>
                           				 <li><input type="checkbox" name="">Add Membership2</li>
							<li><input type="checkbox" name="">Add Membership3</li>
							</ul>	

					</li>
                      	  </ul>
                        </li>

             </ul>
		
		 </div>
		<a id="aa" href="index.php">Click Here to main menu</a> 
	 </div>
    </div>
 </div>

</body>
</html>
