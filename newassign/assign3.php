<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>assignment1</title>
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
	$("#a3").hover(function(){
        alert("The Hover function.");
    });
	$("#a4").mouseenter(function(){
    	$("#a4").css("background-color", "green");
	}); 
	$("#a4").mouseleave(function(){
    	$("#a4").css("background-color", "gray");
	}); 
});
 
$(document).ready(function(){
    $("a").click(function(event){
        event.preventDefault();
    });
});




    </script>
</head>
<body>


<a id="a1" href="#">Thios is a click event </a> <br>
<a id="a2" href="#">this is focus method </a><span>This is the foucs method</span> <br><br><br>
<a id="a3" href="#">this is hover method </a> <br>
<a id="a4" href="#">This is Mouse enter Method </a> <br>
<a id="a5" href="#">this is Mouseout funnction </a> <br> 
<div>


<h3>Prevent from</h3>
<a href="http://google.com/" target="blank">Google.com</a>
<div>
<br> <br><br> <br>
<div class="a6"><a id="aa" href="index.php">Click Here to main menu</a>  </div>
</body>
</html>
