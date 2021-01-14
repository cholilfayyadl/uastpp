<?php
$queryEdit=mysqli_query($konek, "SELECT * FROM signup WHERE id_user=$_SESSION[akun_id]");

$hasilQuery=mysqli_fetch_array($queryEdit);
$idUser=$hasilQuery['id_user'];
$namaDepan=$hasilQuery['nama_depan'];
$namaBelakang=$hasilQuery['nama_belakang'];
$noHp=$hasilQuery['no_hp'];
$email=$hasilQuery['email'];
$sandi=$hasilQuery['sandi'];
$gambar=$hasilQuery['gambar'];


$tbl_kategori = mysqli_query($konek, "SELECT COUNT(id_kategori) as KATEGORI FROM tbl_kategori WHERE id_user_kategori=$_SESSION[akun_id]");
$row1 = mysqli_fetch_array($tbl_kategori);


$tbl_artikel_pencari = mysqli_query($konek, "SELECT COUNT(id_artikel) as PENCARI FROM tbl_artikel WHERE moderator_artikel='m1' AND id_user_artikel=$_SESSION[akun_id]");
$row2 = mysqli_fetch_array($tbl_artikel_pencari);

$tbl_artikel_pemberi = mysqli_query($konek, "SELECT COUNT(id_artikel) as PEMBERI FROM tbl_artikel WHERE moderator_artikel='m2' AND id_user_artikel=$_SESSION[akun_id]");
$row3 = mysqli_fetch_array($tbl_artikel_pemberi);
$totalArtikel = $row2['PENCARI']+$row3['PEMBERI'];

?>

<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Dashboard</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>


    <div class="col-md-7 col-4 align-self-center">
        <div class="d-flex m-t-10 justify-content-end">
            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                <div class="chart-text m-r-10">
                    <h6 class="m-b-0"><small>HARI INI</small></h6>
                    <h4 class="m-t-0 text-info"><i class="ti-calendar"></i> 
                        <?php

                        $array_hari = array(1=>"Senin","Selasa","Rabu","Kamis","Jumat", "Sabtu","Minggu");
                        $hari = $array_hari[date("N")];
                        $tanggal = date ("j");
                        $array_bulan = array(1=>"Januari","Februari","Maret", "April", "Mei", "Juni","Juli","Agustus","September","Oktober", "November","Desember");
                        $bulan = $array_bulan[date("n")];
                        $tahun = date("Y");
                        echo " $hari, $tanggal  $bulan  $tahun";


                        ?></h4>
                    </div>


                </div>

                <div class="chart-text m-r-10">
                    <h6 class="m-b-0"><small>WAKTU</small></h6>
                    <h4 class="m-t-0 text-info"><i class="ti-time"></i> 


                        <?php
                        date_default_timezone_set('Asia/Jakarta'); 
                        $waktu = date("H:i:s");

                        echo $waktu;

                        ?></h4>



                    </div>






                    <div class="">
                        <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i
                            class="ti-settings text-white"></i></button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="round round-lg align-self-center round-info"><i class="ti-dashboard"></i></div>
                                <div class="m-l-10 align-self-center">
                                    <h3 class="m-b-0 font-light"><?php echo $totalArtikel ?></h3>
                                    <h5 class="text-muted m-b-0">Total Artikel</h5></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-warning"><i class="mdi mdi-cellphone-link"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0 font-lgiht"><?php echo $row2['PENCARI'] ?></h3>
                                        <h5 class="text-muted m-b-0">Pencari Sponsor</h5></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-row">
                                        <div class="round round-lg align-self-center round-primary"><i class="mdi mdi-cart-outline"></i></div>
                                        <div class="m-l-10 align-self-center">
                                            <h3 class="m-b-0 font-lgiht"><?php echo $row3['PEMBERI'] ?></h3>
                                            <h5 class="text-muted m-b-0">Pemberi Sponsor</h5></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-row">
                                            <div class="round round-lg align-self-center round-danger"><i class="mdi mdi-bullseye"></i></div>
                                            <div class="m-l-10 align-self-center">
                                                <h3 class="m-b-0 font-lgiht"><?php echo $row1['KATEGORI'] ?></h3>
                                                <h5 class="text-muted m-b-0">Kategori</h5></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                            </div>
                            <!-- Row -->



                            <!-- Row -->
                            <div class="row">












                                <div class="col-lg-8 col-xlg-9 col-md-7">

                     <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Daftar Artikel</h4>
                            <h6 class="card-subtitle">Daftar Artikel <?php echo"$_SESSION[akun_username]"?></h6>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            
                                            <th>Kategori</th>
                                            <th>jangkauan</th>
                                            <th>Judul</th>
                                            <th>Moderator</th>
                                            <th>Gambar</th>
                                      
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                       include "../lib/config.php";
                                       include "../lib/koneksi.php";

                                       $kueriKategori = mysqli_query($konek, "SELECT * FROM tbl_artikel WHERE id_user_artikel='$_SESSION[akun_id]' ORDER BY id_artikel DESC LIMIT 8");

                                       $n = 1;
                                       while ($kat=mysqli_fetch_array($kueriKategori)) {
                                        ?>
                                        <tr>
                                            
                                            
                                            <td><?php echo $kat['kategori_artikel'];?></td>
                                            <td><?php 

                                            if($kat['nasional_artikel'] == 1 AND $kat['internasional_artikel'] == 1){
                                                echo "Nasional & Internasional";
                                            }
                                            elseif ($kat['nasional_artikel'] == 1) {
                                                echo "Nasional";
                                            }
                                             elseif ($kat['internasional_artikel'] == 1) {
                                                echo "Internasional";
                                            }
                                            else {
                                                echo " - ";
                                            }
                                            ?></td>
                                            <td><?php echo $kat['judul_artikel'];?></td>
                                            <td><?php 

                                            if($kat['moderator_artikel'] == "m1"){
                                                echo "<font color='red'>Pencari Sponsor</font>";
                                            }
                                            else {
                                                echo "<font color='green'>Pemberi Sponsor</font>";
                                            }
                                            ?></td>
                                            <td><img src="artikel/upload/<?php echo $kat['gambar'];?>" class="img-thumbnail" width="100px" height="100px"></td>


                                        
                                            <?php $n++; } ?>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                





                                </div>










                                <div class="col-lg-4 col-xlg-3 col-md-5">

                                    <div class="card">
                                        <img class="card-img-top" src="https://wrappixel.com/demos/admin-templates/material-pro/assets/images/background/profile-bg.jpg" alt="Card image cap">
                                        <div class="card-body little-profile text-center">

                                            <div class="pro-img">

                                                <?php
                                                if($gambar != null){
                                                 echo " <img src='/ecom/admin/pengaturan/upload/$gambar'/>";
                                             }
                                             else {

                                                echo " <img src='/ecom/admin/pengaturan/upload/no-image.jpg'/>";
                                            }
                                            ?>




                                        </div>


                                        <h3 class="m-b-0"><?php echo $namaDepan ?> <?php echo $namaBelakang ?></h3>
                                        <p><?php echo $email ?></p>


                                        <div class="row text-center m-t-20">
                                            <div class="col-lg-4 col-md-4 m-t-20">
                                                <h3 class="m-b-0 font-light"><?php echo $totalArtikel ?></h3><small>Total Artikel</small>
                                            </div>
                                            <div class="col-lg-4 col-md-4 m-t-20">
                                                <h3 class="m-b-0 font-light"><?php echo $row2['PENCARI'] ?></h3><small>Artikel Pencari</small>
                                            </div>
                                            <div class="col-lg-4 col-md-4 m-t-20">
                                                <h3 class="m-b-0 font-light"><?php echo $row3['PEMBERI'] ?></h3><small>Artikel Pemberi</small>
                                            </div>
                                        </div>

                                        <hr>
                                        <div class="card-body" style="text-align: left !Important"> <small class="text-muted">Alamat Email </small>
                                            <h6> <?php echo $email ?></h6> 
                                            <small class="text-muted p-t-30 db">Nomor Telepon</small>
                                            <h6><?php echo $noHp ?></h6> 



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Row -->
                        <!-- Row -->
















