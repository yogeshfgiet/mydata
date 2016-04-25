<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>assignment1</title>
 <link rel="stylesheet" href="style.css" type="text/css" >
<style>
span {
    display: none;
}
</style>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>   
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



<p><div   id="sld" class="a1"> This is Slide Toggle</div></p>

<button>Click Now</button><br> <br> 


<a id="a1" href="#"><div class="a1">Thios is a click event</div> </a> <br>
<a id="a2" href="assign3.php"><div class="a1">this is focus method </div></a><span>This is the foucs method</span> <br><br><br>
<a id="a3" href="#"><div id="d1" class="a1">this is hover method</div> </a> <br>

<p> <div id="mo" class="a1">This is mouse out & Mouse Enter</div> </p> <br> 
<div>


<h3>Prevent from</h3>
<a id="go" href="http://google.com/" target="blank"><div class="a1">Google.com</div> </a>
<div>
<br> <br><br> <br>
<div class="a6"><a id="aa" href="index.php">Click Here to main menu</a>  </div>






</body>
</html>
