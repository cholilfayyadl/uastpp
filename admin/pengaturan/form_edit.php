<?php
include "../lib/config.php";
include "../lib/koneksi.php";
 
$idUser=$_GET['id_user'];
$queryEdit=mysqli_query($konek, "SELECT * FROM signup WHERE id_user=".$idUser);

$hasilQuery=mysqli_fetch_array($queryEdit);
$idUser=$hasilQuery['id_user'];
$namaDepan=$hasilQuery['nama_depan'];
$namaBelakang=$hasilQuery['nama_belakang'];
$noHp=$hasilQuery['no_hp'];
$email=$hasilQuery['email'];
$sandi=$hasilQuery['sandi'];
$gambar=$hasilQuery['gambar'];


$tbl_artikel_pencari = mysqli_query($konek, "SELECT COUNT(id_artikel) as ARTIKEL FROM tbl_artikel WHERE moderator_artikel='m1' AND id_user_artikel=$idUser");
$row2 = mysqli_fetch_array($tbl_artikel_pencari);

$tbl_artikel_pemberi = mysqli_query($konek, "SELECT COUNT(id_artikel) as PEMBERI FROM tbl_artikel WHERE moderator_artikel='m2' AND id_user_artikel=$idUser");
$row3 = mysqli_fetch_array($tbl_artikel_pemberi);
$total = $row2['ARTIKEL']+$row3['PEMBERI'];

?>

<div class="row page-titles">

    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Edit Kategori</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="adminweb.php?module=home">Home</a></li>
            <li class="breadcrumb-item active">Edit Kategori</li>
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











 <div class="row">
<div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Form Ubah Data</h4>
                                <h6 class="card-subtitle">Ubah Data <?php echo $email ?></h6>
                                <form class="form-horizontal p-t-20" method="post" enctype="multipart/form-data" action="../admin/pengaturan/aksi_edit.php">
                                    <div class="form-group row">
                                        <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?php echo $idUser; ?>">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label">Nama Depan</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-user"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" name="nama_depan" id="nama_depan" placeholder="Nama Depan" value="<?php echo $namaDepan ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="exampleInputuname3" class="col-sm-3 control-label">Nama Belakang</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-user"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" name="nama_belakang" id="nama_belakang" placeholder="Nama Belakang" value="<?php echo $namaBelakang ?>">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="exampleInputEmail3" class="col-sm-3 control-label">Email*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-email"></i>
                                                    </span>
                                                </div>
                                                <input type="email" class="form-control" id="email" name="email"placeholder="Enter email" value="<?php echo $email ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="web" class="col-sm-3 control-label">Nomor*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-mobile"></i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" id="no_hp" name="no_hp"placeholder="Enter No Hp" value="<?php echo $noHp ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword4" class="col-sm-3 control-label">Kata Sandi*</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ti-lock"></i>
                                                    </span>
                                                </div>
                                                <input type="password" class="form-control" id="sandi" name="sandi" placeholder="Enter pwd" value="<?php echo $sandi ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword5" class="col-sm-3 control-label">Foto Profil</label>



                                        <div class="col-sm-9">
                                       










                                            <input name="current_gambar" type="hidden" value="<?=$gambar?>">
                                                  <?php 
                                                  if($gambar != null){ 
                                                    $gmb = $base_url.'admin/pengaturan/upload/'.$gambar;
                                                }else{
                                                    $gmb = '/ecom/admin/pengaturan/upload/no-image.jpg';
                                                }
                                                ?>

                                           
                                      





                                                <div class="custom-file mb-3">



                                                  <input type="file" class="custom-file-input" name="gambar" id="gambar" accept="image/*" value="<?=$gambar?>">

                                                  <label class="custom-file-label form-control" for="customFile" ><?=$gambar?></label>





                                              </br></br>
                                          </div>












                                        </div>




                                    </div>
                                  

                                    <div class="form-group">
                                        <div class="checkbox checkbox-success">
                                            <input id="checkbox1" type="checkbox" onchange="document.getElementById('setuju').disabled = !this.checked;" checked>
                                            <label for="checkbox1"> Saya telah membaca dengan jelas <a href="#exampleModal" data-toggle="modal">Persetujuan Layanan</a> </label>
                                        </div>
                                    </div>



                                
                                  <!-- Modal -->
                                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel">Persetujuan Layanan</h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      <div class="modal-body">
                                        <h4><span class="ti-user"></span> &nbsp Data akun merupakan data asli saya</h4>
                                        <h4><span class="ti-mobile"></span> &nbsp Nomor saya dapat dilihat pengguna lain</h4>
                                        <h4><span class="ti-email"></span> &nbsp Email saya dapat dilihat pengguna lain</h4><br>
                                        Saya sepenuh nya akan bertanggung jawab atas data akun, artikel, dan semua perubahan pada akun saya.

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Button untuk desktop -->




                                    <button type="submit" id="setuju" name="setuju" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                    <button type="reset" class="btn btn-inverse waves-effect waves-light">Cancel</button>




                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
          <!-- Column -->
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
                                        <h3 class="m-b-0 font-light"><?php echo $total ?></h3><small>Total Artikel</small>
                                    </div>
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h3 class="m-b-0 font-light"><?php echo $row2['ARTIKEL'] ?></h3><small>Artikel Pencari</small>
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

                   
                    
              