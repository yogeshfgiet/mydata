


<!doctype html>
<html>
<head>
<style>
.contan {
    border: thin solid hsl(0, 0%, 0%);
    height: 1000px;
    margin: 0 auto;
    width: 70%;
}
.header {
    background-color: hsl(0, 0%, 50%);
 
    height: 10%;
    width: 100%;
}
.slider {
    border-bottom: 1px solid;
    height: 350px;
    width: 100%;
}


</style>

    <meta charset="utf-8">
    <title>Slider</title>
   <link rel="stylesheet" href="style.css" type="text/css" >
    <script src="jquery-1.12.0.min.js"></script>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script>
     $(document).ready(function(){
        setInterval(slideImages, 5000);
        function slideImages(){
        $('.slider img:first-child').clone().appendTo('.slider');
        $('.slider img:first-child').remove();
        }
    });
  

     
</script>

</head>
<body class="body">
 <div class="contan">
	<div class="header"></div> 
 	<div class="slider">

	 <img  class="image" src="3.jpeg" alt="Smiley face"> 
	 <img src="2.png" />
    <img src="1.jpeg" />
	</div>
 <input type="button" class="slide-left" value="&laquo; Slide Left" /> 
</div>    
  
</body>
</html>
