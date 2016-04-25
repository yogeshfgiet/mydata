<!DOCTYPE html>

<html>
    <head>
        <title>Fancy Box </title>
	 <link rel="stylesheet" href="style.css" type="text/css" >
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="fancyapps-fancyBox-18d1712/lib/jquery.mousewheel-3.0.6.pack.js" type="text/javascript"></script>
        <link href="fancyapps-fancyBox-18d1712/source/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
        <script src="fancyapps-fancyBox-18d1712/source/jquery.fancybox.pack.js" type="text/javascript"></script>
        <link href="fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-buttons.css" rel="stylesheet" type="text/css"/>
        <script src="fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-buttons.js" type="text/javascript"></script>
        <script src="fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-media.js" type="text/javascript"></script>
        <script src="fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-thumbs.js" type="text/javascript"></script>
        <link href="fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-thumbs.css" rel="stylesheet" type="text/css"/>
        
        <script type="text/javascript">
            $(document).ready(function() {

       
               $(".link2").fancybox({
		'frameWidth': 400,
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




                $('.submit').click(function(e) {

			
	
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

<div id="fancy">
      <form id="myform"  method="post" onsubmit="return submitForm();"  >     
   <div class="contaner"> <h3></h3>
		<table><tr><td  colspan="2"><center><h3>Registration Form</h3></center></td></tr>
     		 <tr><td>  Name   </td><td> <input type="text" id="name" name="name" required>  </td></tr> 
     		 <tr><td>  Email  </td><td> <input type="email" id="email" email="email"  name="email"required> </td></tr>
   		  <tr><td>   Message</td><td> <textarea rows="2" cols="20" id="tex" name="mass" required></textarea> </td></tr>
 		 <tr><td>Date of Birth </td><td> <input type="text" id="datepicker" name="dob"></td></tr> <br>
     		    <tr><td colspan="2">  <input type="submit"  id="submit" class="submit" value="submit" name="submit"></td></tr> 

        <div class="result"> </div>
    

</table>
</div>

</form>
	</div>
    <div class="dataDiv"></div><br><br><br>
<a href="#fancy" class="link2"><input type="button" id="name" name="name" ></a>

    </body>
</html>

