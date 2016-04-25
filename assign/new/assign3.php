<!doctype html>
<html>
<head>
       
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mouse Effect</title>
	
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
<style>
span {
    display: none;
}
</style>

 
    <script src="jquery-1.12.0.min.js"></script>
    <script>



$(document).ready(function(){
	

		
    $("#a1").click(function(){
        alert("The clicked function.");
	console.log( "You clicked a paragraph!" );
    });
	  $("#a2").focus(function(){
        $("span").css("display", "inline").fadeOut(2000);
    });
	$("#d1").hover(function(){
        alert("The Hover function.");
    });
	$("#mo").mouseout(function(){
        $("#mo").css("background-color", "red");
    }); 

	$("#mo").mouseenter(function(){
    $("#mo").css("background-color", "yellow");
})

		$("button").click( function(){
        $("#sld").slideToggle();
    });


});
 
$(document).ready(function(){
    $("#go").click(function(event){
        event.preventDefault();
    });
});




    </script>
</head>
<body>


<div class="container">

		<div class=" col-lg-4" >
 	   
    	 	  <div class=""> </div>
		
   		 </div>


	<div class="panel panel-default col-lg-4" >
 	   <div class="panel-heading" > <Strong>Mouse Effect</strong></div>
    	   <div class="panel-body">

		<a id="a1" href="#"><div class="well">Thios is a click event</div></a><br>
		<a id="a2" href="assign3.php"><div class="well">this is focus method</div></a><span>This is the foucs method</span> <br>
		<a id="a3" href="#"><div id="d1"class="well">this is hover method</div> </a>  <br>
		<div class="well"><p> <div id="mo" class="a1">This is mouse out & Mouse Enter</div> </p> </div> <br>
		<a id="go" href="http://google.com/" target="blank"><div class="well">Prevent</div></a> <br>
		<p><div   id="sld" class="well"> This is Slide Toggle</div></p>

		<button class="btn btn-primary ">Click Now</button><br> <br> 
		<a id="aa" href="index.php">Click Here to main menu</a> 
	 </div>
    </div>
 </div>

</body>
</html>
