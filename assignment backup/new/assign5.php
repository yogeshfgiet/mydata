<!DOCTYPE html>
<html>
<head> 

 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

 <title>Add Remove</title>
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
<script>
jQuery(document).ready(function($){
    $('.form .add').click(function(){
        var n = $('.text-box').length + 1;
        
        var box_html = $('<p class="text-box"><label for="box'+n+'">Brouse File </span></label> <input type="file" name="boxes[]" value="" 		id="box' + n + '" /> <select class="form-control"> <option>Secondary Image</option></select> <a href="#" class="remove-box">Remove</a></p>');
        box_html.hide();
        $('.form p.text-box:last').after(box_html);
        box_html.fadeIn(1000);
        return false;
    });
    $('.form').on('click', '.remove-box', function(){
        $(this).parent().fadeOut(1000, function() {
            $(this).remove();
            $('.box-number').each(function(index){
                $(this).text( index + 1 );
            });
        });
        return false;
    });
});

</script>
</head>
<body>
   




<div class="container">

	<div class="panel panel-default col-lg-12" >
 	   <div class="panel-heading" > <Strong>Add & Remove</strong></div>
    	   <div class="panel-body" >

		 <h3 class="h3"> Add And Remove  </h3>
   			 <div class="form   col-lg-4">
     			   <p class="text-box">Brouse File  <input type="file" name="boxes[]" value="" id="box1" />  
        		   <select class="op  form-control" name="options">
         		      <option> Primery Image</option>
          		     <option> Secondry Image</option>
          		 </select>
     			  </p>
     		  	<a class="add" href="#">Add Another</a>
      
 		 </div> 
		
	 </div>
	<a id="aa" href="index.php">Click Here to main menu</a> 
    </div>
	
 </div>












</body>
</html>
