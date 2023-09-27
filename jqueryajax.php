<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ABC</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
enter name:<input type="text" id="name"><br>
enter email:<input type="email" id="eml"><br>
enter password:<input type="password" id="password"><br>
enter phone:<input type="phone" id="phone"><br>
<input type="submit" id="submit" value="submit">
<p id="p1"></p>
<script type="text/javascript">
	$("document").ready(function(){
		$("#submit").click(function(){
			nme=$("#name").val();
			email=$("#eml").val();
			password=$("#password").val();
			phone=$("#phone").val();
			$.ajax({
				type:"post",
				url:"jqueryajaxaction.php",
				data:{name:nme,eml:email,Pass:password,ph:phone}
			}).done(function(data){
					$("#p1").html(data);
			});
		});
	});
</script>
</body>
</html>