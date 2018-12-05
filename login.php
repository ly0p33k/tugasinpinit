<?php

/*
	- Create by Sublime Text
	- user : lyop
	- PHP Version 5.6.24
*/

require_once "conn.php";

// start session for this page
session_start();

?>
<!DOCTYPE html>
<html lang="eng">
<head>
	<title>Login With MD5</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="login_act.php" method="post">
		<table border="0" align="center" cellpadding="5" cellspacing="0">
			<tr>
				<td colspan="3"><th5>Silahkan Login</th5></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email" placeholder="Masukkan Email"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan Password"></td>
			</tr>
			<tr>
				<td colspan="2"></td>
				<td><center><input type="submit" name="login" value="login"></center></td>
			</tr>
		</table>
	</form>
</body>
</html>

