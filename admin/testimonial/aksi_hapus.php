<?php 
ob_start();
session_start();
if (!isset($_SESSION['akun_username'])) {
	echo "<center>Untuk Mengakses User Anda Harus Login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../lib/config.php";
	include "../../lib/koneksi.php";

	$idTestimonial = $_GET['id_testimonial'];
	$queryHapus = mysqli_query($konek, "DELETE FROM tbl_testimonial WHERE id_testimonial='$idTestimonial'");

	if ($queryHapus) {
		echo "<script> alert('Data Testimonial Berhasil Dihapus'); window.location = '/ecom/admin/adminweb.php?module=list_testimonial';</script>";
	} else {
		echo "<script> alert('Data Testimonial Gagal DIhapus'); window.location = '/ecom/admin/adminweb.php?module=list_testimonial';</script>";
	}
}
 ?>