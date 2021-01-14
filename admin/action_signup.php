<?php

ob_start();
session_start();
if(isset($_SESSION['email'])) header("location: adminweb.php?module=home");
include "../lib/config.php";
include "../lib/koneksi.php";

$namaDepan=$_POST['nama_depan'];
$namaBelakang = $_POST['nama_belakang'];
$noTelpon =$_POST['no_hp'];
$userEmail = $_POST['email'];
$userSandi = $_POST['sandi'];

$user_check = mysqli_num_rows(mysqli_query($konek, "SELECT * FROM signup WHERE email = '$userEmail' OR no_hp='$noTelpon'"));

if($user_check > 0){ 
	header('Location: ../admin/signup_wrong.php');
} 

else{ 

	$sql = "INSERT INTO signup (nama_depan,nama_belakang, no_hp, email, sandi) values ('$namaDepan','$namaBelakang','$noTelpon','$userEmail','$userSandi');";
	$hasil = mysqli_query($konek, $sql);

	if($hasil){
		header('Location: signup_success.php');

	}	
	else{
		echo "Data gagal disimpan ke database";
	}

}




?>