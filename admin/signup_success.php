<?php
$title = 'Daftar Akun | Pencarian dan Pemberian Dana Kegiatan';
include '../head.php'
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdn.lineicons.com/1.0.0/LineIcons.min.css">

<style>
	html,body{
		color: #fff;
	}
	.lni{
		font-size: 64px;
	}

	.bg{
		background: linear-gradient(to right, #3c96ff 0%, #2dfbff 100%) !important;
	}

	.regform{
		box-shadow: 0px 8px 9px 0px rgba(69, 69, 69, 0.25);
	}

	.sign{
		color: #000;
	}
</style>

<div class="container-fluid bg">
	<div class="container">
		<br>
		<div class="row" style="text-align:justify !important;">
			<div class="col-md-8 " style="color: white !important"> <br>
				<div class="row">
					<div class="col-sm-3 col-md-2 col-lg-2">
						<i class="lni lni-enter" aria-hidden="true"></i>
					</div>

					<div class="col-sm-8 col-md-10 col-lg-8">
						<h1 class="heading">Pendaftaran</h1>
						<p>Untuk dapat menggunakan layanan E-sponsor kami anda di wajibkan melakukan proses pendaftaran akun terlebih dahulu yang tersedia pada form pada sebelah kanan halaman ini.</p>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-3 col-md-2 col-lg-2">
						<i class="lni lni-user" aria-hidden="true"></i>
					</div>

					<div class="col-sm-8 col-md-10 col-lg-8">
						<h1 class="heading">Buat Profil Akun</h1>
						<p>Pastikan pada proses pembuatan akun pada form sebelah kanan halaman ini anda memasukan data asli dan dilarang memberi tahu data akun anda ke orang lain.</p>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-3 col-md-2 col-lg-2">
						<i class="lni lni-cloud-upload" aria-hidden="true"></i>
					</div>

					<div class="col-sm-8 col-md-10 col-lg-8">
						<h1 class="heading">Posting Artikel</h1>
						<p>Sebelum melakukan posting artikel pastikan anda telah terdaftar pada layanan kami sehingga anda dapat melakukan login dan posting artikel, isikan data artikel anda selengkap mungkin.</p>
					</div>
				</div>


			</div>


			<!--form daftar anggota nya -->



			<div class="col-md-4"><br>
				<div class="card regform wow bounce animated" data-wow-delay="0.05s">
					<div class="card-body regform">
						<div class="myform form ">
							<div class="logo mb-3">
								<div class="col-md-12 text-center">
									<h1 class="sign" style="color:#777 !important">Daftar Akun</h1>
								</div>
							</div>


							<div style="text-align:left !important" class="alert alert-success alert-dismissible fade show" role="alert">
								Selamat anda telah terdaftar, Silahkan masuk <a href="signin.php"><b>klik disini </b></a>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>


							<form method=POST action="../module/tambah_user.php" name="registration">
								<div class="form-group">

									<input type="text"  name="nama_depan" class="form-control" id="nama_depan" aria-describedby="emailHelp" placeholder="Nama Depan Anda">
								</div>
								<div class="form-group">

									<input type="text"  name="nama_belakang" class="form-control" id="nama_belakang" aria-describedby="emailHelp" placeholder="Nama Belakang">
								</div>

								<div class="form-group">

									<input type="text"  name="no_hp" class="form-control" id="no_hp" aria-describedby="emailHelp" placeholder="Nomor Telepon / WhatsApp">
								</div>


								<div class="form-group">

									<input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Alamat Email">
								</div>
								<div class="form-group">

									<input type="password" name="sandi" id="sandi"  class="form-control" aria-describedby="emailHelp" placeholder="Kata Sandi Anda">
								</div>

								<div class="col-md-12 text-center mb-3">
									<button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">DAFTAR</button>
								</div>
								<div class="col-md-12 ">
									<div class="form-group">
										<p class="text-center"><a href="signin.php" id="signin">Sudah punya akun?</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br><br><br>


	</div></div>
	<?php
	include '../footer.php'
	?>