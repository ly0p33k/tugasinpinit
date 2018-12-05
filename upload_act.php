<?php

/*
	- Create by Sublime Text
	- user : lyop
	- PHP Version 5.6.24
*/

require_once "conn.php";

// Pemanggilan File Sementara
$lok_file 	= $_FILE['upload'];
$nama_file	= $_FILE['upload'];

// Folder Tempat Menyimpan File Upload
$folder		 = "files/$nama_file";

// Tanggal dilakukannya Upload File
$tgl_upload  = date("d/m/Y");

if (move_uploaded_file($lok_file, "$folder")) {
	
	$upload = mysqli_query($conn, "INSERT INTO upload (nama_file, deskripsi, tgl_upload) VALUS")
}
?>