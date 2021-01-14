

<div class="row page-titles">

    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Daftar Kategori</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="adminweb.php?module=home">Home</a></li>
            <li class="breadcrumb-item active">Daftar Kategori</li>
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


                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Daftar Artikel</h4>
                            <h6 class="card-subtitle">Daftar Artikel <?php echo"$_SESSION[akun_username]"?></h6>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Artikel</th>
                                            <th>Kategori</th>
                                            <th>jangkauan</th>
                                            <th>Judul</th>
                                            <th>Moderator</th>
                                            <th>Gambar</th>
                                            <th class="text-nowrap">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                       include "../lib/config.php";
                                       include "../lib/koneksi.php";

                                       $kueriKategori = mysqli_query($konek, "SELECT * FROM tbl_artikel WHERE id_user_artikel='$_SESSION[akun_id]' ORDER BY id_artikel DESC");

                                       $n = 1;
                                       while ($kat=mysqli_fetch_array($kueriKategori)) {
                                        ?>
                                        <tr>
                                            <td><?= $n ?></td>
                                            <td><?php echo $kat['id_artikel'];?></td>
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


                                            <td class="text-nowrap">
                                                <a href="../admin/adminweb.php?module=edit_artikel&id_artikel=<?php echo $kat['id_artikel'];?>" data-toggle="tooltip" data-original-title="Edit"> <i class="fas fa-pencil-alt text-inverse m-r-10"></i> </a>
                                                <a href="../admin/artikel/aksi_hapus.php?id_artikel=<?php echo $kat['id_artikel'];?>" onClick="return confirm('anda yakin ingin menghapus data ini?')" data-toggle="tooltip" data-original-title="Close"> <i class="fas fa-window-close text-danger"></i> </a>
                                            </td>
                                            <?php $n++; } ?>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>



            </div>