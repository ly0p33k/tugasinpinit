<?php

require_once "conn.php";

$email = $_POST['email'];
$password = md5($_POST['password']);

if (empty($email) && empty($password)) {
	echo "<script> alert('Username dan Password Harus Diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=login.php'>";
} else if (empty($email)) {
	echo "<script>alert('Username Belum Diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=login.php'>";
} else if (empty($password)) {
	echo "<script<alert('Password Belum Diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url='login.php'>";
} else {
	session_start();
	$login = mysqli_query($conn, "SELECT * FROM login WHERE email='$email' && password='$password'");
	if (mysqli_num_rows($login) > 0){
		$_SESSION['email'] = $email;
		header("location:tampil.php");
	}else{
		echo "<script>alert('Username atau Password salah')</script>";
		echo "<meta http-equiv='refresh' content='1 url=login.php'>";
}
}
?>