<html>
<head>
    <title>Check Box</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

</head>


<script type="text/javascript">
    $(document).ready(function () {
        $('#parent').change(function () {
            $('#chield').attr('checked', $(this).is(":checked"));
            $('#chield1').attr('checked', $(this).is(":checked"));
		
        });

	 $('#chield').change(function () {
            $('#parent').attr('checked', $(this).is(":checked"));
	    
            if ($(this).is(":checked") == false) {
                $('#parent').attr('checked', $('#chield1').is(":checked"));
		  
            }
        });

	
	$('#chield1').change(function () {
            $('#parent').attr('checked', $(this).is(":checked"));
            if ($(this).is(":checked") == false) {
                $('#parent').attr('checked', $('#chield').is(":checked"));
		
            }
        });
      
	
    }); 
</script> 
<body>


<ul>		
 <li id="Property"><input   id="parent" type="checkbox" />Parent
                <ul>
                    <li id="Add_property"><input  id="chield" type="checkbox" />Chield1<ul></ul>
                    </li>
                    <li id="Remove_Property"><input  id="chield1" type="checkbox" />Chield2<ul></ul></li>
                </ul>
            </li>


</ul>	 

    </table>
</body>
</html>
