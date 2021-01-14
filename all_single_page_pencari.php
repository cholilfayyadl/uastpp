<?php
$title = 'E-Sponsor | Pencarian dan Pemberian Dana Kegiatan';
include 'head.php';

include 'lib/config.php';
include 'lib/koneksi.php';

$id_artikel = $_GET['id_artikel'];
$id_akun = $_GET['id_akun'];
$data= mysqli_query($konek, "SELECT * FROM tbl_artikel WHERE id_artikel='$id_artikel'");
$pecah = mysqli_fetch_array($data);

$akun= mysqli_query($konek, "SELECT * FROM signup WHERE id_user='$id_akun'");
$dataAkun = mysqli_fetch_array($akun);
?>




<div class="wrapper-page">
    <!-- PATIENT PANEL OVERVIEW -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 align-self-center">
                <!-- PATIENT OVERVIEW -->

                <div class="wrapper-panel-box panel-patient" style="margin-top:15px;">
                    <div class="d-lg-flex d-md-block align-items-top">
                        <div class="image-patient" style="background-image:url('http://localhost:8080/ecom/admin/artikel/upload/<?php echo $pecah['gambar'];?>');">
                            <div class="info-medikator">
                                <div class="img-medikator">
                                    <img src="http://localhost:8080/ecom/asset/images/logo.png" alt="">
                                </div>
                                <div class="name-medikator">
                                    <label>Di Posting Oleh</label>
                                    <div class="name font-bold">Pengguna Layanan E-Sponsor</div>
                                </div>
                            </div>
                        </div>
                        <div class="info-patient">
                            <div class="info-overview">

                                <h2 class="font-brand-reg headline-patient"><?php echo $pecah['judul_artikel'] ?></h2>
                                



                                <div class="patient-name">


                                 <?php
                                 if($pecah['moderator_artikel'] == "m1"){
                                    echo " <span style='color:#777'>Moderator :</span> <span style='color:#3a99d8;'>Pencari Sponsor</span>";
                                }
                                else {
                                    echo " <span style='color:#777'>Moderator :</span> <span style='color:#3a99d8;'>Pemberi Sponsor</span>";
                                }
                                ?>


                                <br><span style="color:#777">Kategori :</span> <span style="color:#3a99d8;"><?php echo $pecah['kategori_artikel']; ?></span><br>


                                <?php
                                if($pecah['nasional_artikel'] == 1 AND $pecah['internasional_artikel'] == 1){
                                    echo "<span style='color:#777'>Jangkauan :</span> <span style='color:#3a99d8;'>Nasional & Internasional</span>";
                                }
                                elseif ($pecah['nasional_artikel'] == 1) {
                                    echo "<span style='color:#777'>Jangkauan :</span> <span style='color:#3a99d8;'>Nasional</span>";
                                }
                                elseif ($pecah['internasional_artikel'] == 1) {
                                    echo "<span style='color:#777'>Jangkauan :</span> <span style='color:#3a99d8;'>Internasional</span>";
                                }
                                else {
                                    echo "<span style='color:#777'>Jangkauan :</span> <span style='color:#3a99d8;'> - </span>";
                                }
                                ?>


                            </div>

                            <?php 
                            $mulai = date('Y-m-d');
                            $start_date = new DateTime($mulai);
                            $end_date = new DateTime($pecah['batas_artikel']);
                            $interval = $start_date->diff($end_date);
                            ?>

                            <div class="donation-progress progress" style="height:25px !important">
                                <div class="progress-bar" role="progressbar" aria-valuenow="0.04329004329004329004329004329"
                                aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $interval->days ?>%" title="Tersisa <?php echo $interval->days ?> Hari">
                                <?php
                                echo "<b>Tersisa $interval->days Hari</b>";
                                ?>
                            </div>
                        </div>
                        <div class="stat-current">
                            <div class="row">
                                <div class="col-6">

                                    <p style="color:#ccc !important">Berakhir</p>
                                </div>
                                <div class="col-6 text-right">

                                    <p style="color:#ccc !important">Mulai</p>
                                </div>
                            </div>
                        </div>
                        <div class="action">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-12">

                                    <a href="https://api.whatsapp.com/send?text=<?php echo $dataAkun['nama_depan'];?> saya ingin bekerja sama dengan anda terkait artikel <?php echo $pecah['judul_artikel'];?> pada www.e-sponsor.tk&phone=<?php echo $dataAkun['no_hp'];?>" style="background: #4CAF50 !important;border:none !important" class="btn btn-secondary btn-block"><span class="fab fa-whatsapp">&nbsp;&nbsp;</span>Hubungi WhatsApp</a>

                                </div>
                                <div class="col-md-6 col-sm-6 col-12">


                                    <!-- Button untuk mobile -->
                                    <div class="hubMobile">
                                        <a href="tel:<?php echo $dataAkun['no_hp'];?>" class="btn btn-ghost btn-block">&nbsp;&nbsp;</span> <span class="ti-mobile">&nbsp;&nbsp;</span>Hubungi Telepon</a>
                                    </div>
                                    <!-- end Btton untuk mobile -->


                                    <!-- Button untuk desktop -->
                                    <div class="hubDesktop">
                                        <a href="#exampleModal" class="btn btn-ghost btn-block" data-toggle="modal">
                                          <span class="ti-mobile">&nbsp;&nbsp;</span>Hubungi Pengguna
                                      </a>
                                  </div>

                                  <!-- Modal -->
                                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel"><?php echo $pecah['judul_artikel'];?></h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      <div class="modal-body">
                                        <h4><span class="ti-user"></span> &nbsp   <?php echo $dataAkun['nama_depan'];?></h4>
                                        <h4><span class="ti-mobile"></span> &nbsp   <?php echo $dataAkun['no_hp'];?></h4>
                                        <h4><span class="ti-email"></span>    &nbsp <?php echo $dataAkun['email'];?></h4>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Button untuk desktop -->




                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
</div> <!-- END OF PATIENT OVERVIEW -->

<!-- FUNDRAISER BANNER -->
<div class="info-fundraiser d-flex justify-content-center align-items-center">
    <div>
        <p><span class="font-bold">Baca dengan baik-baik detail artikel ini</span> untuk bekerja sama dengan pengguna ini silahkan hubungi via WhatsApp dengan tombol hijau di atas.</p>
    </div>

</div><!-- END OF FUNDRAISER BANNER -->

<!-- NAVIGATION PATIENT -->
<div class="wrapper-nav-patient">
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link active" id="kisah-tab" data-toggle="tab" href="#kisah" role="tab"
            aria-controls="kisah" aria-selected="true">Deskripsi</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="rincian-dana-tab" data-toggle="tab" href="#rincian-dana" role="tab"
            aria-controls="rincian-dana" aria-selected="false">Detail Artikel</a>
        </li>

    </ul>
</div>
<!-- END OF NAVIGATION PATIENT -->
</div>
</div>
</div> <!-- END OF TOP PANEL PATIENT -->

<section class="sec-global sec-detail-patient bg-white">
    <div class="container">
        <div class="sec-body">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="tab-content" id="myTabContent">
                        <!-- TAB MAIN KISAH -->
                        <div class="tab-pane fade show active" id="kisah" role="tabpanel" aria-labelledby="kisah-tab">
                            <div class="markdown">
                                <h3>Apa itu <?php echo $pecah['judul_artikel']; ?>?</h3>
                                <p>
                                    <div style="text-align: justify;">
                                        <?php echo $pecah['deskripsi_artikel']; ?>

                                    </div>
                                </p>
                            </div>
                        </div><!-- END OF TAB MAIN KISAH -->



                        <!-- TAB MAIN RINCIAN DANA -->
                        <div class="tab-pane fade" id="rincian-dana" role="tabpanel" aria-labelledby="rincian-dana-tab">
                            <h4 class="sec-sub-title font-bold">Detail Artikel</h4>
                            <table class="table table-rincian-dana">
                                <tbody>


                                    <tr>
                                        <td class="">
                                            <div class="float-left" style="color:#3a99d8;">ID Artikel</div>


                                            <span class='float-right'><?php echo $pecah['id_artikel']; ?></span>
                                        </td>

                                    </tr>



                                    <?php
                                    if($pecah['moderator_artikel'] == "m1"){
                                        echo " <tr>
                                        <td class=''>
                                        <div class='float-left' style='color:#3a99d8;'>Moderator</div>


                                        <span class='float-right'>Pencari Sponsor</span>
                                        </td>

                                        </tr>";
                                    }
                                    else {
                                        echo " <tr>
                                        <td class=''>
                                        <div class='float-left' style='color:#3a99d8;'>Moderator</div>


                                        <span class='float-right'>Pemberi Sponsor</span>
                                        </td>

                                        </tr>";
                                    }
                                    ?>





                                    <tr>
                                        <td class="">
                                            <div class="float-left" style="color:#3a99d8;">Judul</div>


                                            <span class='float-right'><?php echo $pecah['judul_artikel']; ?></span>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td class="">
                                            <div class="float-left" style="color:#3a99d8;">Kategori</div>


                                            <span class='float-right'><?php echo $pecah['kategori_artikel']; ?></span>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td class="">
                                            <div class="float-left" style="color:#3a99d8;">Jangkauan</div>


                                            <?php
                                            if($pecah['nasional_artikel'] == 1 AND $pecah['internasional_artikel'] == 1){
                                                echo " <span class='float-right'>Nasional & Internasional</span>";
                                            }
                                            elseif ($pecah['nasional_artikel'] == 1) {
                                                echo " <span class='float-right'>Nasional</span>";
                                            }
                                            elseif ($pecah['internasional_artikel'] == 1) {
                                                echo " <span class='float-right'>Internasional</span>";
                                            }
                                            else {
                                                echo " <span class='float-right'> - </span>";
                                            }
                                            ?>


                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">
                                            <div class="float-left" style="color:#3a99d8;">Nomor</div>


                                            <span class='float-right'><?php echo $dataAkun['no_hp']; ?></span>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="">
                                            <div class="float-left" style="color:#3a99d8;">Email</div>


                                            <span class='float-right'><?php echo $dataAkun['email']; ?></span>
                                        </td>

                                    </tr>




                                    <tr>
                                        <td>
                                            <h4 class="font-bold">
                                                <div class="float-left">Batas Waktu</div> 
                                                <span class="float-right" style="font-weight:bold;"> Tersisa <?php echo $interval->days ?> Hari</span>
                                            </h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="alert alert-primary" role="alert">
                                Baca lebih lanjut mengenai tentang kami <a href="index.php#tentang" target="_blank"> E-Sponsor</a>
                            </div>
                            <br>

                        </div><!-- END OF TAB MAIN RINCIAN DANA -->


                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                            <!-- DONATUR LIST -->
                            <div class="patient-side-info">
                                <h4 class="sec-sub-title font-bold">Pencari Sponsor Terbaru</h4>
                                <div class="row wrapper-donatur-list">






                                  <?php 
                                  $q= mysqli_query($konek,"SELECT * FROM tbl_artikel WHERE moderator_artikel='m1' ORDER BY id_artikel DESC LIMIT 4");
                                  while ($r = mysqli_fetch_array($q)) {
                                     ?>

                                     <div class="col-3 list-donator">
                                        <a class="donatur-list" href="all_single_page_pencari.php?id_artikel=<?php echo $r['id_artikel'];?>&id_akun=<?php echo $r['id_user_artikel'];?>">
                                            <div class="donatur-avatar" title="<?php echo $r['judul_artikel'];?>" style="border-radius:10%; background-image:url('http://localhost:8080/ecom/admin/artikel/upload/<?php echo $r['gambar'];?>');"></div>
                                        </a>
                                    </div>

                                <?php } ?>








                            </div>
                        </div><!-- END OF DONATUR LIST -->
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                        <!-- DONATUR LIST -->
                        <div class="patient-side-info">
                            <h4 class="sec-sub-title font-bold">Pemberi Sponsor Terbaru</h4>
                            <div class="row wrapper-donatur-list">






                              <?php 
                              $q= mysqli_query($konek,"SELECT * FROM tbl_artikel WHERE moderator_artikel='m2' ORDER BY id_artikel DESC LIMIT 4");
                              while ($r = mysqli_fetch_array($q)) {
                                 ?>

                                 <div class="col-3 list-donator">
                                    <a class="donatur-list" href="all_single_page_pencari.php?id_artikel=<?php echo $r['id_artikel'];?>&id_akun=<?php echo $r['id_user_artikel'];?>">
                                        <div class="donatur-avatar" title="<?php echo $r['judul_artikel'];?>" style="border-radius:10%; background-image:url('http://localhost:8080/ecom/admin/artikel/upload/<?php echo $r['gambar'];?>');"></div>
                                    </a>
                                </div>

                            <?php } ?>








                        </div>
                    </div><!-- END OF DONATUR LIST -->
                </div>


                <div class="col-md-12">
                    <div class="info-fundraiser d-lg-block d-md-flex align-items-center justify-content-center">
                        <div>
                            <p><span class="font-bold">Menghubungi segera pembuat artikel ini adalah cara efektif agar mudah mencapai kesepakatan bersama. Ayo bangun kerja sama segera !</span>
                            </p>
                        </div>
                        <br>
                        <a href="https://api.whatsapp.com/send?text=<?php echo $dataAkun['nama_depan'];?> saya ingin bekerja sama dengan anda terkait artikel <?php echo $pecah['judul_artikel'];?> pada www.e-sponsor.tk&phone=<?php echo $dataAkun['no_hp'];?>" style="background: #4CAF50 !important;border:none !important;margin-bottom: 10px" class="btn btn-secondary btn-block"><span class="fab fa-whatsapp">&nbsp;&nbsp;</span>Hubungi WhatsApp</a>


                      <!-- Button untuk mobile -->
                                    <div class="hubMobile">
                                        <a href="tel:<?php echo $dataAkun['no_hp'];?>" class="btn btn-ghost btn-block" style="background: #fff">&nbsp;&nbsp;</span> <span class="ti-mobile">&nbsp;&nbsp;</span>Hubungi Telepon
                                        </a>
                                    </div>
                                    <!-- end Btton untuk mobile -->


                                    <!-- Button untuk desktop -->
                                    <div class="hubDesktop">
                                        <a href="#exampleModal" class="btn btn-ghost btn-block" data-toggle="modal" style="background: #fff">
                                          <span class="ti-mobile">&nbsp;&nbsp;</span> Hubungi Pengguna  
                                      </a>
                                  </div>

                                  <!-- Modal -->
                                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel"><?php echo $pecah['judul_artikel'];?></h3>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      <div class="modal-body">
                                        <h4><span class="ti-user"></span> &nbsp   <?php echo $dataAkun['nama_depan'];?></h4>
                                        <h4><span class="ti-mobile"></span> &nbsp   <?php echo $dataAkun['no_hp'];?></h4>
                                        <h4><span class="ti-email"></span>    &nbsp <?php echo $dataAkun['email'];?></h4>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Button untuk desktop -->




                    </div><!-- END OF FUNDRAISER BANNER -->
                </div>

            </div>
        </div>
    </div>
</div>

</div>
</section>


</div>






<?php
include 'footer.php'
?>


