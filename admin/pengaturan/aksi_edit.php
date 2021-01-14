<?php 

session_start();
if (!isset($_SESSION['akun_username'])) {
	echo "<center>Untuk Mengakses User Anda Harus Login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../lib/config.php";
	include "../../lib/koneksi.php";


	$data_idUser = $_POST['id_user'];
	$data_namaDepan = $_POST['nama_depan'];
	$data_namaBelakang = $_POST['nama_belakang'];
	$data_noHp = $_POST['no_hp'];
	$data_email = $_POST['email'];
	$data_sandi = $_POST['sandi'];

	$current_gambar = $_POST['current_gambar'];



	if(isset($_FILES['gambar']) && $_FILES['gambar']['name'] != '' && $_FILES['gambar']['name'] != null){

		$target_dir = "upload/";

		$array = explode('.', $_FILES['gambar']['name']);
		$extension = end($array);

		$namaGambar = date('YmdHis') . '_gambar_produk_' . $data_idUser .'.'. $extension;
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
	// print_r($namaGambar);die();
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

	$queryEdit = mysqli_query($konek, "UPDATE signup SET 
		nama_depan='$data_namaDepan',
		nama_belakang='$data_namaBelakang',
		gambar='$namaGambar',
		no_hp='$data_noHp',
		email='$data_email',
		sandi='$data_sandi'
		WHERE id_user='$data_idUser'");
	if ($queryEdit) {
		echo "<script> alert('Data Akun Berhasil di Ubah'); window.location = '/ecom/admin/adminweb.php?module=edit_akun&id_user=$data_idUser';</script>";
	} else {
		echo "<script> alert('Data Akun Gagal di Ubah'); window.location = '/ecom/admin/adminweb.php?module=edit_akun&id_user=$data_idUser';</script>";
	}
}
 ?>