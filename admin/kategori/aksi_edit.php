<?php 
ob_start();
session_start();
if (!isset($_SESSION['akun_username'])) {
	echo "<center>Untuk Mengakses User Anda Harus Login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../lib/config.php";
	include "../../lib/koneksi.php";

	$idKategori = $_POST['id_kategori'];
	$namaKategori = $_POST['nama_kategori'];

	$queryEdit = mysqli_query($konek, "UPDATE tbl_kategori SET nama_kategori='$namaKategori' WHERE id_kategori='$idKategori'");
	if ($queryEdit) {
		echo "<script> alert('Data Kategori Berhasil Diperbarui'); window.location = '/ecom/admin/adminweb.php?module=list_kategori';</script>";
	} else {
		echo "<script> alert('Data Kategori Gagal Diperbarui'); window.location = '/ecom/admin/adminweb.php?module=list_kategori';</script>";
	}
}
 ?>