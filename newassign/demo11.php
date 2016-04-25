$(document).ready(function(){
	$('input[name="level-1"],input[name="level-2"]').bind('click', function () {
		    $('input[type=checkbox]', $(this).parent('li')).attr('checked', ($(this).is(':checked')));
		});
    
});


<script>
   		

$(document).ready(function(){
	$('input[name="level-1"],input[name="level-2"]').bind('click', function () {
		    $('input[type=checkbox]', $(this).parent('li')).attr('checked', ($(this).is(':checked')));
		});
    
});



$('input[@type=checkbox][level$="child"]').click(function(event) {
    var checked = $(this).is(':checked');

    if (checked) {
        $('input[@type=checkbox][level$="parent"]').attr('checked', true);
    }
});

$('input[@type=checkbox][level$="subchild"]').click(function(event) {
    var checked = $(this).is(':checked');

    if (checked) {
        $('input[@type=checkbox][level$="child"]').attr('checked', true);        
        $('input[@type=checkbox][level$="parent"]').attr('checked', true);        
    }
});























 $(document).ready(function(){
        $('#theform input:checkbox').change(function(){
		
    

            // Parent Checkbox Change //
            if ($(this).hasClass('parent')){
		
               if (!$(this).is(':checked')){
			
                    $('input.child[name="'+$(this).attr('name')+'"]').removeAttr('checked');
		

                }
            }
            // Child Checkbox Change //
            else if ($(this).hasClass('child')){
                if ($(this).is(':checked')){
                    $('input.parent[name="'+$(this).attr('name')+'"]').attr('checked', 'checked');
               } else {
                   if ($('input.child[name="'+$(this).attr('name')+'"]:checked').length == 0){
                        $('input.parent[name="'+$(this).attr('name')+'"]').removeAttr('checked');
                    }
              }   
           }
       });
    });
