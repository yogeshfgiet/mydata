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
    <table  cellspacing="0" rules="all" border="1" style="border-collapse: collapse;">
        <tr align="left">
            <td align="center">
                <span id="" style="padding: 50px;">Parent</span>
            </td>
            
            <td align="center">
                <input id="parent" type="checkbox" name=""" />
            </td>
            <td align="center">
            </td>
           
        <tr align="left">
		
            <td align="center">
                <span id="" style="padding: 100px;">Chield1</span>
            </td>
           
            <td align="center">
                <input id="chield" type="checkbox" name=""  />
            </td>
            <td align="center">
            </td>
           
        </tr>
        <tr align="left">
            <td align="center">
                <span  style="padding: 100px;">Chield2</span>
            </td>
           
            <td align="center">
                <input id="chield1" type="checkbox" name=""  />
            </td>
            <td align="center">
            </td>
         
        </tr>

	 

    </table>
</body>
</html>
