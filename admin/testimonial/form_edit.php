<?php
include "../lib/config.php";
include "../lib/koneksi.php";
 
$id_testimonial=$_GET['id_testimonial'];
$queryEdit=mysqli_query($konek, "SELECT * FROM tbl_testimonial WHERE id_testimonial=".$id_testimonial);

$hasilQuery=mysqli_fetch_array($queryEdit);
$idTestimonial=$hasilQuery['id_testimonial'];
$isiTestimonial=$hasilQuery['isi_testimonial'];
?>





<div class="row page-titles">



    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Tambah Testimonial</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="adminweb.php?module=home">Home</a></li>
            <li class="breadcrumb-item active">Tambah Testimonial</li>
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
                                <h4 class="m-b-0 text-white">Form Tambah Testimonial</h4>
                            </div>
                        <div class="card-body">
                      
                                <form method="post" action="../admin/testimonial/aksi_edit.php" class="form-horizontal">

<div class="form-body">
                                        <h3 class="box-title">Info Testimonial</h3>
                                        <hr class="m-t-0 m-b-25">
                                  
                                     



                                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="id_testimonial" id="id_testimonial" value="<?php echo"$idTestimonial";?>">
                                        <textarea name="isi_testimonial" id="isi_testimonial" class="form-control" rows="10"><?php echo"$isiTestimonial";?></textarea>
                                        <small class="form-control-feedback"> Di dukung dengan penggunaan bahasa HTML. </small>
                                    </div>

                                    <div class="form-group">
                                        <div class="checkbox checkbox-success">
                                            <input id="checkbox1" type="checkbox" onchange="document.getElementById('setuju').disabled = !this.checked;" checked>
                                            <label for="checkbox1"> Saya telah membaca dengan jelas <a href="../persyaratan.php">Persetujuan Layanan</a> </label>
                                        </div>
                                    </div>


                                    <button type="submit" id="setuju" name="setuju" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                    <button type="reset" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                </form>



                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-12">


                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Daftar Testimonial</h4>
                            <h6 class="card-subtitle">Daftar Testimonial <?php echo"$_SESSION[akun_username]"?> </h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Testimonial</th>
                                            <th>Isi Testimonial</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include "../lib/config.php";
                                        include "../lib/koneksi.php";

                                        $kueriTestimonial = mysqli_query($konek, "SELECT * FROM tbl_testimonial WHERE id_user_testimonial='$_SESSION[akun_id]'");

                                        $n = 1;
                                        while ($kat=mysqli_fetch_array($kueriTestimonial)) {
                                            ?>
                                            <tr>   

                                                <td><?= $n ?></td>
                                                <td><?php echo $kat['id_testimonial'];?></td>
                                                <td><?php echo substr($kat['isi_testimonial'], 0, 100);?> . . . . . . .</td>
                                            </tr>
                                            <?php $n++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>



                        </div>


    




                   