<!doctype html>
<html>
<head>
       
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mouse Effect</title>
	 <script src="jquery-1.12.0.min.js"></script>
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
<!-----------------fancybox--------------------------------->


  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
      
 <script src="fancy/fancyapps-fancyBox-18d1712/lib/jquery.mousewheel-3.0.6.pack.js" type="text/javascript"></script>
        <link href="fancy/fancyapps-fancyBox-18d1712/source/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
        <script src="fancy/fancyapps-fancyBox-18d1712/source/jquery.fancybox.pack.js" type="text/javascript"></script>
        <link href="fancy/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-buttons.css" rel="stylesheet" type="text/css"/>
        <script src="fancy/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-buttons.js" type="text/javascript"></script>
        <script src="fancy/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-media.js" type="text/javascript"></script>
        <script src="fancy/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-thumbs.js" type="text/javascript"></script>
        <link href="fancy/fancyapps-fancyBox-18d1712/source/helpers/jquery.fancybox-thumbs.css" rel="stylesheet" type="text/css"/>
  <!-----------------fancybox close--------------------------------->      
<link rel="stylesheet" type="text/css" href="jqzoom/css/jquery.jqzoom.css">
 
<!-- Js Files -->
 
<script type='text/javascript' src='jqzoom/js/jquery.jqzoom-core.js'></script>  


 





 <link href="Nivo-Slider-master/nivo-slider.css" rel="stylesheet" type="text/css"/>
      
        <script src="Nivo-Slider-master/jquery.nivo.slider.js" type="text/javascript"></script>
        <link href="Nivo-Slider-master/themes/default/default.css" rel="stylesheet" type="text/css"/>
  

  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>

        











<style>

</style>


    <script>
   $(window).load(function() {
                $('#slider').nivoSlider();
            });
  $(document).ready(function() {
                $(".fancybox").fancybox({
                    openEffect: 'none',
                    closeEffect: 'none'
                });
            });


  $(document).ready(function() {
               
                $('.MYCLASS').jqzoom();
              
 
             
                var options = {  
                  zoomType: 'standard',  
                  lens:true,  
                  preloadImages: true,  
                  alwaysOn:false,  
                  zoomWidth: 200,  
                  zoomHeight: 200,  
                  xOffset:90,  
                  yOffset:30,  
                  position:'left'  
			
                  //...MORE OPTIONS  
               };
  
               $('.MYCLASS').jqzoom(options); 
        });


 
    </script>
</head>
<body>


<div class="container">

	<div class="panel panel-default col-lg-6" >
 	   <div class="panel-heading" > <Strong>Facy Box</strong></div>
    	   <div class="panel-body">

		   <a class="fancybox" rel="gallery1" href="fancy/images/1.jpeg" title="iamge1">
            <img src="images/mages/1.jpeg" alt="" width="100px"/>
        </a>
        <a class="fancybox" rel="gallery1" href="fancy/images/2.jpeg" title="iamge2">
            <img src="fancy/images/2.jpeg" alt="" width="100px" />
        </a>
        <a class="fancybox" rel="gallery1" href="fancy/images/3.jpeg" title="iamge3">
            <img src="fancy/images/3.jpeg" alt=""  width="100px" />
        </a>
        <a class="fancybox" rel="gallery1" href="fancy/images/4.jpeg" title="iamge4">
            <img src="fancy/images/4.jpeg" alt=""width="100px"   />
        </a>
	<a class="fancybox" rel="gallery1" href="fancy/images/5.jpeg" title="iamge5">
            <img  src="fancy/images/5.jpeg" alt=""  width="100px" />
        </a>
   	 </div>
	</div>


		<div class="panel panel-default col-lg-6" >
 	   <div class="panel-heading" > <Strong>JQ Zoom</strong></div>
    	   <div class="panel-body">
		<a href="jqzoom/2.jpeg" class="MYCLASS" title="MYTITLE">  
    <img src="jqzoom/1.jpeg" title="IMAGE TITLE" width="100px">  
</a>  
		
   	 </div>
	</div>

		<div class="panel panel-default col-lg-6" >
 	   <div class="panel-heading" > <Strong>Ck Editor</strong></div>
    	   <div class="panel-body">

		 <textarea class="ckeditor" name="editor"></textarea>
   	 </div>
	</div>





	<div class="panel panel-default col-lg-6" >
 	   <div class="panel-heading" > <Strong>Nivo Slider</strong></div>
    	   <div class="panel-body">

		<div class="hello"><h3>Nivo Slider</h3>	</div>
       	 <div id="slider">
            <img src="images/1.jpeg" alt="" />
            <img src="images/2.jpeg" alt=""  />
            <img src="images/3.jpeg" alt=""  />
            <img src="images/4.jpeg" alt=""/>
	    <img src="images/5.jpeg" alt=""/>
        </div>
        <div id="htmlcaption" class="nivo-html-caption">

           
        </div>
   	 </div>


	</div>
 </div>

</body>
</html>
