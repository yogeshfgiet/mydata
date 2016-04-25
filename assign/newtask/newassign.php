<!DOCTYPE html>

<html>
    <head>
        <title>Fancy Box </title>

		 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    		  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
   	
 	  	 <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    
		 <link rel="stylesheet" href="style.css" type="text/css" >
       	
       		    <script src="fancyapps-fancyBox-18d1712/lib/jquery.mousewheel-3.0.6.pack.js" type="text/javascript"></script>
     		    <link href="fancyapps-fancyBox-18d1712/source/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
    		    <script src="fancyapps-fancyBox-18d1712/source/jquery.fancybox.pack.js" type="text/javascript"></script>
    		    <link href="fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-buttons.css" rel="stylesheet" type="text/css"/>
    		    <script src="fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-buttons.js" type="text/javascript"></script>
     		    <script src="fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-media.js" type="text/javascript"></script>
    		    <script src="fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-thumbs.js" type="text/javascript"></script>
    		    <link href="fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-thumbs.css" rel="stylesheet" type="text/css"/>
        	    <script src="myjs.js" type="text/javascript"></script>
		  



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
	 <a href="#fancy" class="link2">Register</a>
   
  </body>
</html>

