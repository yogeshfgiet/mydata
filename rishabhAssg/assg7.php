<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
	<div id="show"></div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		setInterval(function(){
		$('#show').load('aasg7_refresh.php')
		},1000);
		});
	</script>
</body>
</html>


