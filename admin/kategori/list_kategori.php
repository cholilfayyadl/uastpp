

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
                            <h4 class="card-title">Daftar Kategori</h4>
                            <h6 class="card-subtitle">Daftar Kategori <?php echo"$_SESSION[akun_username]"?></h6>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Kategori</th>
                                            <th>Nama Kategori</th>
                                            <th class="text-nowrap">Action</th>
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
                                            <td class="text-nowrap">
                                                <a href="../admin/adminweb.php?module=edit_kategori&id_kategori=<?php echo $kat['id_kategori'];?>" data-toggle="tooltip" data-original-title="Edit"> <i class="fas fa-pencil-alt text-inverse m-r-10"></i> </a>
                                                <a href="../admin/kategori/aksi_hapus.php?id_kategori=<?php echo $kat['id_kategori'];?>" onClick="return confirm('anda yakin ingin menghapus data ini?')" data-toggle="tooltip" data-original-title="Close"> <i class="fas fa-window-close text-danger"></i> </a>
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