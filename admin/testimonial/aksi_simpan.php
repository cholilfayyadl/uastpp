<?php 
ob_start();
session_start();
if (!isset($_SESSION['akun_username'])) {
	echo "<center>Untuk mengakses modul anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../lib/config.php";
	include "../../lib/koneksi.php";
	$isiTestimonial = $_POST['isi_testimonial'];
	$idUserTestimonial = $_POST['id_user_testimonial'];
	$querySimpan = mysqli_query($konek, "INSERT INTO tbl_testimonial (isi_testimonial,id_user_testimonial) VALUES ('$isiTestimonial','$idUserTestimonial')");
	if ($querySimpan) {
		echo "<script> alert('Data Testimonial Berhasil Masuk'); window.location = '/ecom/admin/adminweb.php?module=tambah_testimonial';</script>";
	} else {
		echo "<script> alert('Data Testimonial Gagal Dimasukkan'); window.location = '/ecom/admin/adminweb.php?module=tambah_testimonial';</script>";
	}
}
 ?>