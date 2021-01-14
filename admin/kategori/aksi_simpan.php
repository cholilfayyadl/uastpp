<?php 
ob_start();
session_start();
if (!isset($_SESSION['akun_username'])) {
	echo "<center>Untuk mengakses modul anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../lib/config.php";
	include "../../lib/koneksi.php";
	$namaKategori = $_POST['nama_kategori'];
	$idUserKategori = $_POST['id_user_kategori'];
	$querySimpan = mysqli_query($konek, "INSERT INTO tbl_kategori (nama_kategori,id_user_kategori) VALUES ('$namaKategori','$idUserKategori')");
	if ($querySimpan) {
		echo "<script> alert('Data Kategori Berhasil Masuk'); window.location = '/ecom/admin/adminweb.php?module=tambah_kategori';</script>";
	} else {
		echo "<script> alert('Data Kategori Gagal Dimasukkan'); window.location = '/ecom/admin/adminweb.php?module=tambah_kategori';</script>";
	}
}
 ?>