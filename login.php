<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<style type="text/css">
		.container{
			width:50%;
			background: #fff;
			margin: 25px auto;
			color: #111;
			border-radius:5px;
		}
		h1{
			background-color: #111;
			color: #fff;
			text-align: center;
		}
		input{
			margin-bottom: 20px;
		}
	</style>
</head>
<body style="background-color: #989898 ">
	<div class="container">
		<h1 style="padding: 30px;">LOGIN FORM</h1>
		<form action="validate.php" method="post" style="padding: 30px;">
			<label>Email :</label>
			<input type="email" name="email"><br>

			<label>Password :</label>
			<input type="password" name="password"><br>

			<input type="submit" value="login" name="submit">
		</form>
	</div>
</body>
</html>