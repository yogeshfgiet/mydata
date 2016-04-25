<html>
<head>
    <title>Check Box</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
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

<div class="check"><h3>Check Box</h3>
<form id="method="post" action="index.php">
            
                   
                    
                    <ul>
                        <li>
                            <input type="checkbox" name="p1" >Property
                        
                            <ul >
                           	 <li><input type="checkbox" name="">Edit Property

							<ul>
					  		<li><input type="checkbox" name="" ">New Property Add</li>
                           				 <li><input type="checkbox" name="">new Property Add</li>
							</ul>

				</li>
                            	<li><input type="checkbox" name="" ">Add Property</li>
                           	 <li><input type="checkbox" name="">Remove Property</li>
				   
                      	    </ul>
                         </li>

                         <li >
                            <input type="checkbox" name="p2" ">Testimonial
                        
                      	  <ul>
                           	 <li><input type="checkbox" name="" >Add</li>
                           	 <li><input type="checkbox" name="" >Remove</li>
                           	 <li><input type="checkbox" name="">View</li>
                        
                      	  </ul>
                          </li>

                        <li>
                            <input type="checkbox" name="p3">Users
                        
                       	    <ul >
                          	  <li><input type="checkbox" name="" >Edit User</li>
                          	  <li><input type="checkbox" name="" >View User List</li>
                          	  <li><input type="checkbox" name="" >Add User</li>
                     	   </ul>
                         </li>

                       <li >
                            <input type="checkbox" name="p4" >Membership
                        
                       	 <ul>
                           	 <li><input type="checkbox" name="" >Edit Membership</li>
                         	   <li><input type="checkbox" name="" >Remove Membership</li>
                          	  <li><input type="checkbox" name="" >Add Membership</li>
                      	  </ul>
                        </li>

             </ul>
     </form>  
</div>

</body>
</html>
