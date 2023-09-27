<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ABC</title>
</head>
<body>
<p id="p1"></p>
<input type="submit" name="submit" value="submit" onclick="fun()">
<script type="text/javascript">
	function fun()
	{
		var req=new XMLHttpRequest();
		req.open("post","ajaxaction.php",true);
		req.send();

		req.onreadystatechange=function()
		{
			if(req.readyState==4 && req.status==200)
			{
				document.getElementById("p1").innerHTML=req.responseText;
			}
		}
	}
</script>
</body>
</html>