<?php 
ob_start();
session_start();
if (!isset($_SESSION['akun_username'])) {
	echo "<center>Untuk Mengakses User Anda Harus Login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../lib/config.php";
	include "../../lib/koneksi.php";

	$idKategori = $_GET['id_kategori'];
	$queryHapus = mysqli_query($konek, "DELETE FROM tbl_kategori WHERE id_kategori='$idKategori'");

	if ($queryHapus) {
		echo "<script> alert('Data Kategori Berhasil Dihapus'); window.location = '/ecom/admin/adminweb.php?module=list_kategori';</script>";
	} else {
		echo "<script> alert('Data Kategori Gagal DIhapus'); window.location = '/ecom/admin/adminweb.php?module=list_kategori';</script>";
	}
}
 ?>