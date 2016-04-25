<!DOCTYPE html>
<html>
<head>
<style>

.main1 {
    border: thin solid hsl(0, 0%, 50%);
    box-shadow: 0 0 8px 1px;
    margin: 0 auto;
    text-align: center;
    width: 1000px;
}



</style>
 <script src="jquery-1.12.0.min.js"></script>
<link rel="stylesheet" href="style.css" type="text/css" >
<script>
jQuery(document).ready(function($){
    $('.form .add').click(function(){
        var n = $('.text-box').length + 1;
        
        var box_html = $('<p class="text-box"><label for="box'+n+'">Image Property</span></label> <input type="file" name="boxes[]" value="" id="box' + n + '" /> <select> <option>Secondary Image</option></select> <a href="#" class="remove-box">Remove</a></p>');
        box_html.hide();
        $('.form p.text-box:last').after(box_html);
        box_html.fadeIn(1000);
        return false;
    });
    $('.form').on('click', '.remove-box', function(){
        $(this).parent().css( 'background-color', '' );
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
   
<div class="main1">
     <h3 class="h3"> Property Image  </h3>
    <div class="form">
        
            <p class="text-box">
               
          Property   Image     <input type="file" name="boxes[]" value="" id="box1" />  
           <select class="op" name="options">
               <option> Primery Image</option>
               <option> Secondry Image</option>
               </select>
           
                
            </p>
            <a class="add" href="#">Add Another</a>
            
       
    </div>
</div>

</body>
</html>
