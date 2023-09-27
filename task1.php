<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ABC</title>
</head>
<body>
enter name:<input type="text" id="name"><br>
<input type="submit" name="submit" value="submit" onclick="fun()">
<div id="d1"></div>

<script type="text/javascript">
	function fun()
	{
		var a=document.getElementById("name").value;
		var req=new XMLHttpRequest();
		req.open("post","task1action.php?nme="+a,true);
		req.send();

		req.onreadystatechange=function()
		{
			if(req.readyState==4 && req.status==200)
			{
				document.getElementById("d1").innerHTML=req.responseText;
			}
		}
	}
</script>
</body>
</html>