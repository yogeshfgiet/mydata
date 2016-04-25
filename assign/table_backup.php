<!doctype html>
<html>
<head>


    <meta charset="utf-8">
    <title>Ajax</title>



   <link rel="stylesheet" href="style.css" type="text/css" >
    <script src="jquery-1.12.0.min.js"></script>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
<script>
         
	$(document).ready(function() {

                $('.submit').click(function(e) {

               
  			e.preventDefault();
                    $.ajax({
                        type: 'POST',
                        url: 'insert.php',
                      data:$('form').serialize(), 
                        success: function() {
                            $('input[type=text], textarea').val('');
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
                   setInterval('autoRefresh()', 1000);
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
                var out = "<table><tr><th>NAME</th><th>EMAIL</th><th>MESSAGE</th><th>DOB</th></tr>";
                for (i = 0; i < 5; i++) {
                    out += "<tr><td>" + obj[i].name + "</td><td>" +
                            obj[i].email +
                            "</td><td>" +
                            obj[i].message +
                            "</td><td>" +
                            obj[i].date +
                            "</td></tr>";
                }
                out += "</table>";


                $(".dataDiv").html(out);
            }

     
</script>

</head>
<body>
   <form id="myform"  method="post" onsubmit="return submitForm();"  >     
   <div class="contaner">
<table><tr><td  colspan="2"><center><h3>Registration Form</h3></center></td></tr>
      <tr><td>  Name   </td><td> <input type="text" name="name">  </td></tr> 
      <tr><td>  Email  </td><td> <input type="text" name="email"> </td></tr>
     <tr><td>   Message</td><td> <textarea rows="2" cols="20" name="mass"></textarea> </td></tr>
  <tr><td>Date of Birth </td><td>  <input type="text" id="datepicker" name="dob"></td></tr> <br>
         <tr><td>  <input type="submit" class="submit" value="submit" name="submit"></td></tr> 
        <div class="result"> </div>
        <div class="dataDiv"></div>

</table>
</div>

</form>

</body>
</html>

