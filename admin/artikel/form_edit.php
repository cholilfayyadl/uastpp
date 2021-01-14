<?php 

include "../lib/config.php";
include "../lib/koneksi.php";

$id_artikel=$_GET['id_artikel'];
$queryEdit=mysqli_query($konek, "SELECT * FROM tbl_artikel WHERE id_artikel=".$id_artikel);
$listKat=mysqli_query($konek, "SELECT * FROM tbl_kategori");
$listMerek=mysqli_query($konek, "SELECT * FROM tbl_merek");

$hasilQuery=mysqli_fetch_array($queryEdit);
$data_idArtikel=$hasilQuery['id_artikel'];
$data_judulArtikel=$hasilQuery['judul_artikel'];
$data_deskripsiArtikel=$hasilQuery['deskripsi_artikel'];
$data_gambar=$hasilQuery['gambar'];

$data_moderatorArtikel=$hasilQuery['moderator_artikel'];
$data_kategoriArtikel=$hasilQuery['kategori_artikel'];
$data_batasArtikel=$hasilQuery['batas_artikel'];



?>




<div class="row page-titles">



    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Edit Artikel</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="adminweb.php?module=home">Home</a></li>
            <li class="breadcrumb-item active">Edit Artikel</li>
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
                <div class="col-lg-12">
                    <div class="card card-outline-info">
                        <div class="card-header">
                            <h4 class="m-b-0 text-white">Form Edit Artikel</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data" class="form-horizontal" action="../admin/artikel/aksi_edit.php">
                                <div class="form-body">
                                    <h3 class="box-title">Info Artikel</h3>
                                    <hr class="m-t-0 m-b-40">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">

                                                <label class="control-label text-right col-md-3">Judul Artikel</label>
                                                <div class="col-md-9">


                                                   <input type="hidden" class="form-control" id="id_artikel" name="id_artikel" value="<?php echo $data_idArtikel; ?>">
                                                   <input type="text" name="judul_artikel" id="judul_artikel" class="form-control" placeholder="Seminar Nasional Amikom Ke 5" value="<?=$data_judulArtikel?>">
                                                   <small class="form-control-feedback"> Ini Merupakan Judul Artikel Anda </small> </div>
                                               </div>
                                           </div>
                                           <!--/span-->
                                           <div class="col-md-6">
                                            <div class="form-group row">

                                                <label class="control-label text-right col-md-3">Thumbnail</label>
                                                <div class="col-md-9">

                                                  <input name="current_gambar" type="hidden" value="<?=$data_gambar?>">
                                                  <?php 
                                                  if($data_gambar != null){ 
                                                    $gmb = $base_url.'admin/artikel/upload/'.$data_gambar;
                                                }else{
                                                    $gmb = 'https://dummyimage.com/600x400/e2e2e2/fff';
                                                }
                                                ?>

                                           
                                      





                                                <div class="custom-file mb-3">



                                                  <input type="file" class="custom-file-input" name="gambar" id="gambar" accept="image/*" value="<?=$data_gambar?>">

                                                  <label class="custom-file-label form-control" for="customFile" ><?=$data_gambar?></label>





                                              </br></br>
                                          </div>

                                      </div>
                                  </div>


                              </div>
                              <!--/span-->
                          </div>
                          <!--/row-->
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="control-label text-right col-md-3">Moderator</label>
                                    <div class="col-md-9">
                                        <select class="form-control custom-select" name="moderator_artikel" id="moderator_artikel">
                                            <option  value="m1">Pencari Sponsor</option>
                                            <option  value="m2">Pemberi Sponsor</option>
                                        </select>
                                        <small class="form-control-feedback"> Pilih Tipe Moderator. </small> </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Batas Waktu </label>
                                        <div class="col-md-9">
                                            <input type="date" name="batas_artikel" id="batas_artikel" class="form-control" placeholder="dd/mm/yyyy" value="<?=$data_batasArtikel?>">
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Kategori</label>
                                        <div class="col-md-9">
                                            <select name="kategori_artikel" id="kategori_artikel" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                               <?php
                                               include "../lib/config.php";
                                               include "../lib/koneksi.php";

                                               $kueriKategori = mysqli_query($konek, "SELECT * FROM tbl_kategori WHERE id_user_kategori='$_SESSION[akun_id]'");

                                               $n = 1;
                                               while ($kat=mysqli_fetch_array($kueriKategori)) {
                                                ?>
                                                <option value="<?php echo $kat['nama_kategori'];?>"><?php echo $kat['nama_kategori'];?></option>

                                                <?php $n++; } ?>
                                            </select>
                                            <small class="form-control-feedback"> Kategori belum tersedia? <a href="adminweb.php?module=tambah_kategori">buat disini</a> </small>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Jangkauan</label>
                                        <div class="col-md-9">


                                            <div class="m-b-10">
                                                <div class="demo-checkbox">
                                                    <input type="checkbox" id="nasional_artikel" name="nasional_artikel" />
                                                    <label for="nasional_artikel">Nasional</label>

                                                    <input type="checkbox" id="internasional_artikel" name="internasional_artikel"/>
                                                    <label for="internasional_artikel">Internasional</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <h3 class="box-title">Deskripsi Artikel</h3>
                            <hr class="m-t-0 m-b-40">
                            <!--/row-->


                            <div class="form-group">

                                <textarea name="deskripsi_artikel" id="deskripsi_artikel" class="form-control" rows="10"><?php echo"$data_deskripsiArtikel";?></textarea>
                                <small class="form-control-feedback"> Di dukung dengan penggunaan bahasa HTML. </small>
                            </div>


                        </div>
                        <hr>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" name="edit" class="btn btn-success">Edit</button>
                                            <button type="reset" class="btn btn-inverse">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>






</div>