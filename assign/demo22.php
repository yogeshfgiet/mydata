<!DOCTYPE html>
<html>
<head>

<script src="//code.jquery.com/jquery-latest.js"></script>
<script>
jQuery(document).ready(function($){
    $('.my-form .add-box').click(function(){
        var n = $('.text-box').length + 1;
        
        var box_html = $('<p class="text-box"><label for="box'+n+'">Image Property</span></label> <input type="file" name="boxes[]" value="" id="box' + n + '" /> <select> <option>Secondary Image</option></select> <a href="#" class="remove-box">Remove</a></p>');
        box_html.hide();
        $('.my-form p.text-box:last').after(box_html);
        box_html.fadeIn('slow');
        return false;
    });
    $('.my-form').on('click', '.remove-box', function(){
        $(this).parent().css( 'background-color', '#FF6C6C' );
        $(this).parent().fadeOut("slow", function() {
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
    <h2> Image Property </h2>
<div id="main">
    
    <div class="my-form">
        
            <p class="text-box">
               
           Image Property     <input type="file" name="boxes[]" value="" id="box1" />  
           <select class="op" name="options">
               <option> Pri Image</option>
               <option> Sec Image</option>
               </select>
           
                
            </p>
            <a class="add-box" href="#">Add Another</a>
            
       
    </div>
</div>

</body>
</html>
