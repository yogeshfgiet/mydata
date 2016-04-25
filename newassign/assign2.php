<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>assignment2</title>

    
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
               
               if(email==''){
                   alert('email can not be blank');
                   error=true;
		
		
               }
		 else if(IsEmail(email)==false){
                 alert('invailid Email');
                return false;
            }

		else if(firstname==''){
                    alert('first name can not be blank');
                    error=true;
               }else if(password==''){
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
 <form method="psot" id="validateform"action="">

<table>
	<tr>
	   <td> Email:</td> <td><input type="email" name="email" id="email"></td>
	</tr>
	<tr>
             <td> First Name:</td> <td> <input type="text" name="firstname" id="firstname"></td>
	</tr>
	<tr>
             <td> Password:</td> <td><input type="text" name="password" id="password"></td>
	</tr>
	<tr>
              <td>Confirm Password: </td> <td><input type="text" name="cnfpassword" id="cnfpassword"></td>
	</tr>
           <tr> <td><input type="checkbox" name="terms" id="terms">Terms And conditions</td></tr>
            
           <tr><td> <input type="submit" name="submit" value="submit" id="submit"> </td></tr>
  </table>
        </form>


</body>
</html>
