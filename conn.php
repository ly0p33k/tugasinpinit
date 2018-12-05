<?php
		// Data
		$host = "localhost";
		$user = "root";
		$pass = "";
		$db	  = "universitas";

		/// Koneksi ke DB
		$conn = new mysqli($host, $user, $pass) or die ("Koneksi ke Database gagal");

		//
		mysqli_select_db($conn, $db) or die ("Tidak dapat menemukan Database");
?>