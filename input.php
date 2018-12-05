<?php

include_once "conn.php";
	
	// Var data
		$nim  = 19839242;
		$nama = "Sulasmi";
		$umur = 22;
		$tl	  = "Yogyakarta";
		$ipk  = 3.23;

$input = mysqli_query($conn, "INSERT INTO mahasiswa_ilkom values('$nim','$nama','$umur','$tl','$ipk')");	

if($input){
	echo "sukses";
} else {
	echo "gagal";
}
?>