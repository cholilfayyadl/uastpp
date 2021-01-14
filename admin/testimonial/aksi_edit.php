<?php 
ob_start();
session_start();
if (!isset($_SESSION['akun_username'])) {
	echo "<center>Untuk Mengakses User Anda Harus Login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../lib/config.php";
	include "../../lib/koneksi.php";

	$idTestimonial = $_POST['id_testimonial'];
	$isiTestimonial = $_POST['isi_testimonial'];

	$queryEdit = mysqli_query($konek, "UPDATE tbl_testimonial SET isi_testimonial='$isiTestimonial' WHERE id_testimonial='$idTestimonial'");
	if ($queryEdit) {
		echo "<script> alert('Data Testimonial Berhasil Diperbarui'); window.location = '/ecom/admin/adminweb.php?module=list_testimonial';</script>";
	} else {
		echo "<script> alert('Data Testimonial Gagal Diperbarui'); window.location = '/ecom/admin/adminweb.php?module=list_testimonial';</script>";
	}
}
 ?>