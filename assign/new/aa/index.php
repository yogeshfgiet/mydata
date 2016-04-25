<html>
	<head>
	<title>PHP CRUD with Search and Pagination</title>
	<link href="style.css" type="text/css" rel="stylesheet" />	
	<script src="http://code.jquery.com/jquery-2.1.1.js"></script>
	<script>

	function getresult(url) {    
	$.ajax({
		url: url,
		type: "POST",
		data:  {rowcount:$("#rowcount").val(),name:$("#name").val(),code:$("#code").val()},
		success: function(data){ $("#toys-grid").html(data); $('#add-form').hide();}
	   });
	}
	getresult("getresult.php");

	</script>
	</head>
	<body>
	
	
		<div id="toys-grid">
		<input type="hidden" name="rowcount" id="rowcount" />					
		</div>
		
	</body>
</html>
