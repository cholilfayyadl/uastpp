<?php
ob_start();
session_start();
if(isset($_SESSION['email'])) header("location: adminweb.php?module=home");
include "../lib/config.php";
include "../lib/koneksi.php";

/* PROSES LOGIN */
if(isset($_POST['submit'])) {
	$username = $_POST['email'];
	$password = $_POST['sandi'];
	$sql_login = mysqli_query($konek, "SELECT * FROM signup WHERE email = '$username' AND sandi = '$password'");

	if(mysqli_num_rows($sql_login)>0) {
		$row_akun = mysqli_fetch_array($sql_login);
		$_SESSION['akun_id'] = $row_akun['id_user'];
		$_SESSION['akun_username'] = $row_akun['email'];
		header('Location: adminweb.php?module=home');
	}else {
		header('Location: signin_wrong.php');
	}
}







?>
