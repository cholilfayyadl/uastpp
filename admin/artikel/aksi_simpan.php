<?php 
ob_start();
session_start();
if (!isset($_SESSION['akun_username'])) {
	echo "<center>Untuk mengakses modul anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../lib/config.php";
	include "../../lib/koneksi.php";

	$judulArtikel = $_POST['judul_artikel'];
	$idUserArtikel = $_POST['id_user_artikel'];
	$deskripsiArtikel = $_POST['deskripsi_artikel'];
	$moderatorArtikel = $_POST['moderator_artikel'];
	$kategoriArtikel = $_POST['kategori_artikel'];
	$batasArtikel = $_POST['batas_artikel'];



	if(isset($_FILES['gambar']) && $_FILES['gambar']['name'] != '' && $_FILES['gambar']['name'] != null){

		$target_dir = "upload/";

		$array = explode('.', $_FILES['gambar']['name']);
		$extension = end($array);

		$lastId = mysqli_query($konek, "SELECT id_artikel FROM tbl_artikel ORDER BY id_artikel DESC LIMIT 1");
		$lastId = mysqli_fetch_row($lastId);
		$id_artikel = $lastId[0] + 1;

		$namaGambar = date('YmdHis') . '_gambar_produk_' . $id_artikel .'.'. $extension;
		$gambar = $target_dir . $namaGambar;
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($gambar,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		if (file_exists($gambar)) {
		    echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		// Check file size
		// if ($_FILES["gambar"]["size"] > 500000) {
		//     echo "Sorry, your file is too large.";
		//     $uploadOk = 0;
		// }
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $gambar)) {
		        echo "The file ". basename( $_FILES["gambar"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
	}else{
		$namaGambar = $_POST['current_gambar'];
	}

	if(isset($_POST['nasional_artikel'])){
		$nasional_artikel = 1;
	}else{
		$nasional_artikel = 0;
	}

	if(isset($_POST['internasional_artikel'])){
		$internasional_artikel = 1;
	}else{
		$internasional_artikel = 0;
	}

	$querySimpan = mysqli_query($konek, "INSERT INTO tbl_artikel (id_user_artikel, judul_artikel, deskripsi_artikel, gambar, moderator_artikel, kategori_artikel, batas_artikel, nasional_artikel, internasional_artikel) VALUES ('$idUserArtikel', '$judulArtikel', '$deskripsiArtikel', '$namaGambar', '$moderatorArtikel', '$kategoriArtikel', '$batasArtikel', '$nasional_artikel', '$internasional_artikel')");

	if ($querySimpan) {
		echo "<script> alert('Data Artikel Berhasil Masuk'); window.location = '/ecom/admin/adminweb.php?module=list_artikel';</script>";
	} else {
		echo "<script> alert('Data Artikel Gagal Dimasukkan'); window.location = '/ecom/admin/adminweb.php?module=tambah_artikel';</script>";
	}
}
?>