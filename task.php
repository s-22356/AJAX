<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ABC</title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
	<p>This is a paragraph</p>
	<input type="submit" id="submit" value="submit">
	<script type="text/javascript"> 
		$("document").ready(function(){
			$("#submit").click(function(){
				$("p").load("ajaxaction.php");
			});
		});
	</script>

</body>
</html>