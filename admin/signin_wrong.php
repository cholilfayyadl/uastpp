<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if(isset($_SESSION['akun_id'])){ // Jika session username ada berarti dia sudah login
  header("location: signin.php"); // Kita Redirect ke halaman welcome.php
}

$title = 'Masuk Akun | Pencarian dan Pemberian Dana Kegiatan';
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
		<div class="row"style="text-align:justify !important;">
			<div class="col-md-8 " style="color: white !important"> <br>
				<div class="row" >
					<div class="col-sm-3 col-md-2 col-lg-2">
						<i class="lni lni-lock" aria-hidden="true"></i>
					</div>

					<div class="col-sm-8 col-md-10 col-lg-8">
						<h1 class="heading">Masuk Akun</h1>
						<p>Pastikan anda telah memiliki akun pada layanan kami terlebih dahulu agar anda dapat masuk pada layanan ini, jika belum mempunyai akun silahkan melakukan pendaftaran akun terlebih dahulu.</p>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-3 col-md-2 col-lg-2">
						<i class="lni lni-key" aria-hidden="true"></i>
					</div>

					<div class="col-sm-8 col-md-10 col-lg-8">
						<h1 class="heading">Rahasiakan</h1>
						<p>Simpan selalu data akun yang telah anda daftarkan sebelumnya agar anda dapat masuk pada layanan kami dan data anda terjaga dengan aman.</p>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-3 col-md-2 col-lg-2">
						<i class="lni lni-control-panel" aria-hidden="true"></i>
					</div>

					<div class="col-sm-8 col-md-10 col-lg-8">
						<h1 class="heading">Panel Kendali</h1>
						<p>Silahkan nikmati layanan yang kami sediakan untuk anda dan gunakan layanan tersebut dengan bijak agar layanan kami dapat bermanfaat bagi anda.</p>
					</div>
				</div>
			</div>


			<div class="col-md-4"><br>
				<div class="card regform wow bounce animated" data-wow-delay="0.05s">
					<div class="card-body regform">
						<div class="myform form ">
							<div class="logo mb-3">
								<div class="col-md-12 text-center">
									<h1 class="sign" style="color:#777 !important">Masuk Akun</h1>
								</div>
							</div>

								<div style="text-align:left !important" class="alert alert-warning alert-dismissible fade show" role="alert">
								Alamat Email atau Kata Sandi salah !
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							
							<form method=POST action="action_signin.php" name="registration">

								<div class="form-group">

									<input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Alamat Email">
								</div>
								<div class="form-group">

									<input type="sandi" name="sandi" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Kata Sandi Anda">
								</div>
								<div class="col-md-12 text-center mb-3">
									<button type="submit" name="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Masuk</button>
								</div>
								<div class="col-md-12 ">
									<div class="form-group">
										<p class="text-center"><a href="signup.php" id="signin">Anda belum punya akun?</a></p>
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