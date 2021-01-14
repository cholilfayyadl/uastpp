<?php 

session_start();
if (!isset($_SESSION['akun_username'])) {
	echo "<center>Untuk Mengakses User Anda Harus Login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../lib/config.php";
	include "../../lib/koneksi.php";

	$idArtikel = $_GET['id_artikel'];
	$queryHapus = mysqli_query($konek, "DELETE FROM tbl_artikel WHERE id_artikel='$idArtikel'");

	if ($queryHapus) {
		echo "<script> alert('Data Artikel Berhasil Di Hapus'); window.location = '$admin_url'+'adminweb.php?module=list_artikel';</script>";
	} else {
		echo "<script> alert('Data Artikel Gagal Di Hapus'); window.location = '$admin_url'+'adminweb.php?module=list_artikel';</script>";
	}
}
 ?>