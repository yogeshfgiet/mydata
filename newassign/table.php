


<!doctype html>
<html>
<head>


    <meta charset="utf-8">
    <title>Ajax</title>
   <link rel="stylesheet" href="style.css" type="text/css" >
    <script src="jquery-1.12.0.min.js"></script>

<script>
            /*$(document).ready(function(){
            var response = '';
            $.ajax({ type: "GET",   
                     url: "data.php",   
                     async: false,

                     success : function(text)
                     {
                         response = text;
                     }
            });
		document.write(response);
        
            }); */

       function submitForm() {
           
   $.ajax({type:'POST', 
      url:'insert.php', 
      data:$('#myform').serialize(), 
        success: function(response) {
 	$('input[type=text], textarea').val('');
        $('#myform').find('.result').html(response);
    }});

   
    return false;
       }

     $(document).ready(function(){
$(".dataDiv").load("data.php");
setInterval(function() {
$(".dataDiv").load('data.php');
}, 1000);
$.ajaxSetup({ cache: false });
});
  

     
</script>

</head>
<body>
   <form id="myform"  method="post" onsubmit="return submitForm();">     
   <div class="contaner">
<table><tr><td  colspan="2"><center><h3>Registration Form</h3></center></td></tr>
      <tr><td>  Name   </td><td> <input type="text" name="name">  </td></tr> 
      <tr><td>  Email  </td><td> <input type="text" name="email"> </td></tr>
     <tr><td>   Message</td><td> <textarea rows="2" cols="20" name="mass"></textarea> </td></tr>
  <tr><td>Date of Birth </td><td>  <input type="text" name="dob"></td></tr> <br>
         <tr><td>  <input type="submit" class="submit" value="submit" name="submit"></td></tr> 
        <div class="result"> </div>
        <div class="dataDiv"></div>

</table>
</div>

</form>

</body>
</html>
