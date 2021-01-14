<?php
$title = 'E-Sponsor | Pencarian dan Pemberian Dana Kegiatan';
include 'head.php';

include 'lib/config.php';
include 'lib/koneksi.php';

$tbl_signup = mysqli_query($konek, "SELECT COUNT(id_user) as USER FROM signup");
$row1 = mysqli_fetch_array($tbl_signup);

$tbl_artikel_pencari = mysqli_query($konek, "SELECT COUNT(id_artikel) as ARTIKEL FROM tbl_artikel WHERE moderator_artikel='m1'");
$row2 = mysqli_fetch_array($tbl_artikel_pencari);

$tbl_artikel_pemberi = mysqli_query($konek, "SELECT COUNT(id_artikel) as ARTIKEL FROM tbl_artikel WHERE moderator_artikel='m2'");
$row3 = mysqli_fetch_array($tbl_artikel_pemberi);
?>

<div class="wrapper-page">
    <!-- BACKDROP -->

    <div class="backdrop-global backdrop-patient d-flex align-items-center justify-content-start" style="background-image:url(/ecom/asset/images/flat.jpg);opacity: 0.95;">

        <div class="container">
            <div class="row d-flex align-items-center justify-content-between">
                <div class="col-md-9">

                    <h1 class="header-page font-brand-reg ">
                       Cari Semua Artikel

                    </h1>
                    <h5>Ayo salurkan bantuan anda untuk jalannya kegiatan ini menjadi lebih baik lagi dengan dana atau jasa dari anda. Silahkan klik salah satu artikel dibawah ini untuk melihat lebih detail.</h5>
                </div>
                

            </div>            
        </div>
    </div> <!-- END OF BACKDROP -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wrapper-list-donasi">
                    <div class="row">

                        <?php


// Langkah 1. Tentukan batas,cek halaman & posisi data
                        $batas   = 9;
                        $halaman = @$_GET['halaman'];
                        if(empty($halaman)){
                            $posisi  = 0;
                            $halaman = 1;
                        }
                        else{
                            $posisi  = ($halaman-1) * $batas;
                        }

// Langkah 2. Sesuaikan query dengan posisi dan batas
                        $query  = "SELECT * FROM tbl_artikel WHERE moderator_artikel='m1' OR moderator_artikel='m2' ORDER BY id_artikel DESC LIMIT $posisi,$batas";
                        $tampil = mysqli_query($konek, $query);


                        $no = $posisi+1;
                        while ($r=mysqli_fetch_array($tampil)){
                            ?>

<br>

                            <div class="col-md-4 col-sm-6 col-12 patient-card">
                                <div class="patient-cardbox on-going">

                                    <div class="patient-img">

                                        <a href="all_single_page_pencari.php?id_artikel=<?php echo $r['id_artikel'];?>&id_akun=<?php echo $r['id_user_artikel'];?>">
                                            <div class="main-img-patient lazy-load"
                                            data-src="http://localhost:8080/ecom/admin/artikel/upload/<?php echo $r['gambar'];?>"
                                            style="background-repeat: no-repeat; background-position: center; background-size:125%; padding-bottom:56%; min-width: 100%; ">


                                        </div>
                                    </a>
                                    <?php
                                    if($r['moderator_artikel'] == "m1"){
                                        echo " <div class='count-donatur' style='background:#fb4b5e !important;padding:10px 25px !important'>
                                        Pencari Sponsor
                                        </div>";
                                    }
                                    else {
                                        echo " <div class='count-donatur' style='background:#4CAF50 !important;padding:10px 25px !important'>
                                        Pemberi Sponsor
                                        </div>";
                                    }
                                    ?>


                                </div>
                                <div class="patient-info">
                                    <div class="patient-headline">
                                        <h4 class="patient-diagnosis"><a class="font-bold" href="all_single_page_pencari.php?id_artikel=<?php echo $r['id_artikel'];?>&id_akun=<?php echo $r['id_user_artikel'];?>"><b><?php echo $r['judul_artikel']; ?></b></a></h4>

                                        <div class="patient-name">
                                            <span style="color:#777">Kategori :</span> <span style="color:#3a99d8;"><?php echo $r['kategori_artikel']; ?></span><br>


                                            <?php
                                            if($r['nasional_artikel'] == 1 AND $r['internasional_artikel'] == 1){
                                                echo "<span style='color:#777'>Jangkauan :</span> <span style='color:#3a99d8;'>Nasional & Internasional</span>";
                                            }
                                            elseif ($r['nasional_artikel'] == 1) {
                                                echo "<span style='color:#777'>Jangkauan :</span> <span style='color:#3a99d8;'>Nasional</span>";
                                            }
                                            elseif ($r['internasional_artikel'] == 1) {
                                                echo "<span style='color:#777'>Jangkauan :</span> <span style='color:#3a99d8;'>Internasional</span>";
                                            }
                                            else {
                                                echo "<span style='color:#777'>Jangkauan :</span> <span style='color:#3a99d8;'> - </span>";
                                            }
                                            ?>


                                        </div>



                                    </div>

                                    <div class="patient-by text-truncate">
                                        Oleh Pengguna  Layanan E-Sponsor
                                    </div>



                                    <?php 
                                    $mulai = date('Y-m-d');
                                    $start_date = new DateTime($mulai);
                                    $end_date = new DateTime($r['batas_artikel']);
                                    $interval = $start_date->diff($end_date);
                                    ?>

                                    <div class="donation-progress progress" style="height:25px !important">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="0.227833615659702616224355355" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $interval->days ?>%" title="Tersisa <?php echo $interval->days ?> Hari">
                                            <span class="sr-only">100% terdanai</span>
                                            <?php
                                            echo "<b>Tersisa $interval->days Hari</b>";
                                            ?>
                                        </div>
                                    </div>
                                    <div class="stat-current">
                                        <div class="row">
                                            <div class="col-6">

                                                <p>Berakhir</p>
                                            </div>
                                            <div class="col-6 text-right">

                                                <p>Mulai</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                        $no++;
                    }
                    ?>                   

                </div> 






                <div class="text-center">
                    <ul class="pagination">



                        <?php
// Langkah 3: Hitung total data dan halaman serta link 1,2,3 
                        $query2     = mysqli_query($konek, "select * from tbl_artikel");
                        $jmldata    = mysqli_num_rows($query2);
                        $jmlhalaman = ceil($jmldata/$batas);
                        $disini = $_GET['halaman'];
                        echo " <span class='current'>
                        <li class='page-item'>
                         &nbsp
                        Page $disini of $jmlhalaman  
                        </li>
                        </span> ";

                        for($i=1;$i<=$jmlhalaman;$i++)
                            if ($i != $halaman){
                                echo "  
                                &nbsp  <span style='color:#ddd'>|</span> 
                                <li class='page-item'>
                                <a class='page-link' href='all_page_pencari.php?halaman=$i'>
                                <span><i class='fas'></i> Page $i</span>
                                </a>
                                </li>


                                ";
                            }
                            

                            ?>


                            

                            

                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- END CONTAINER -->


    <?php
    include 'footer.php'
    ?>
