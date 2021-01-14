



<div class="row page-titles">



    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Tambah Kategori</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="adminweb.php?module=home">Home</a></li>
            <li class="breadcrumb-item active">Tambah Kategori</li>
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
                <div class="col-md-12">
                    <div class="card card-outline-info">
                        <div class="card-header">
                                <h4 class="m-b-0 text-white">Form Tambah Artikel</h4>
                            </div>
                        <div class="card-body">
                      
                                <form method="post" action="../admin/kategori/aksi_simpan.php" class="form-horizontal">

<div class="form-body">
                                        <h3 class="box-title">Info Kategori</h3>
                                        <hr class="m-t-0 m-b-25">
                                  
                                     



                                    <div class="form-group">
                                      
                                        <input type="hidden" class="form-control" name="id_user_kategori" id="id_user_kategori" value="<?php echo"$_SESSION[akun_id]";?>">
                                        <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" placeholder="Masukan Nama Kategori">
                                    </div>

                               


                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                    <button type="reset" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                </form>



                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-12">


                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Daftar Kategori</h4>
                            <h6 class="card-subtitle">Daftar Kategori <?php echo"$_SESSION[akun_username]"?> </h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Kategori</th>
                                            <th>Nama Kategori</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include "../lib/config.php";
                                        include "../lib/koneksi.php";

                                        $kueriKategori = mysqli_query($konek, "SELECT * FROM tbl_kategori WHERE id_user_kategori='$_SESSION[akun_id]' ORDER BY id_kategori DESC");

                                        $n = 1;
                                        while ($kat=mysqli_fetch_array($kueriKategori)) {
                                            ?>
                                            <tr>   

                                                <td><?= $n ?></td>
                                                <td><?php echo $kat['id_kategori'];?></td>
                                                <td><?php echo $kat['nama_kategori'];?></td>
                                            </tr>
                                            <?php $n++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>



                        </div>