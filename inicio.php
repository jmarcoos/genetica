<?php
	ob_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title> Redescobrir </title>
	</head>
    <body>
		<form name = "login" action = "login.php" method = "post">
			<table>
				Login
				<input type = "text" size = "32" maxlength = "32" name = "loginUsuario">
				Senha
				<input type = "password" size = "32" maxlength = "32" name = "senhaUsuario">
				<input type = "submit" name = "login" value = "Login">
			</table>
		</form>
	</body>
</html>
