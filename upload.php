<?php

/*
	- Create by Sublime Text
	- user : lyop
	- PHP Version 5.6.24
*/

require_once "conn.php";

session_start();

?>
<!DOCTYPE html>
<html lang="eng">
<head>
	<title>File Upload</title>
	<meta charset="utf-8">
</head>
<body>
<form enctype="multipart/form-data" method="post" action="upload_act.php">
		Masukkan File  : <input type="file" name="upload"><br>
		Deskripsi File : <br>
		<textarea name="deskripsi" rows="8" cols="40"></textarea><br>
		<input type="submit" name="submit" value="Upload">
	</form>
</body>
</html>