<?php
$title = 'E-Sponsor | Pencarian dan Pemberian Dana Kegiatan';
include 'head.php';
include 'vfunc.php';
include 'lib/config.php';
include 'lib/koneksi.php';

$tbl_signup = mysqli_query($konek, "SELECT COUNT(id_user) as USER FROM signup");
$row1 = mysqli_fetch_array($tbl_signup);


$tbl_artikel_pencari = mysqli_query($konek, "SELECT COUNT(id_artikel) as ARTIKEL FROM tbl_artikel WHERE moderator_artikel='m1'");
$row2 = mysqli_fetch_array($tbl_artikel_pencari);

$tbl_artikel_pemberi = mysqli_query($konek, "SELECT COUNT(id_artikel) as ARTIKEL FROM tbl_artikel WHERE moderator_artikel='m2'");
$row3 = mysqli_fetch_array($tbl_artikel_pemberi);

?>

<!-- SLIDER CAROUSEL -->
<div class="wrapper-carousel">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image:url('/ecom/asset/images/main.jpg');">
               <div class="overlay"></div>
               <div class="carousel-inner-wrapper">
                <div class="container">
                    <div class="container">
                        <div class="inner-content-slide text-center center-horizontal">
                            <h1>Acara Kegiatan Terkendala ?</h1>
                            <p>Apakah acara anda terkendala dana sponsor? ataukah anda mencari acara untuk disponsori. maka anda tepat berada pada halaman ini karena kami akan menghubungkan pemberi dan penerima sponsor kegiatan. 
                            </p>
                            <a href="admin/signup.php" class="btn btn-primary btn-md">DAFTAR AKUN SEKARANG</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item" style="background-image:url('/ecom/asset/images/main2.jpg');">
            <div class="overlay"></div>
            <div class="carousel-inner-wrapper">

                <div class="container">
                    <div class="inner-content-slide text-center center-horizontal">
                        <h1>Lebih Mudah Cari Sponsor</h1>
                        <p>Dengan bantuan E-sponsor anda akan lebih mudah menemukan pemberi sponsor pada kegiatan anda. Ayo jangan sampai tertinggal kesempatan ini. 
                        </p>
                        <a href="/zakat/" class="btn btn-primary btn-md">DAFTAR AKUN SEKARANG</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="carousel-item" style="background-image:url('/ecom/asset/images/main1.jpg');">
            <div class="overlay"></div>
            <div class="carousel-inner-wrapper">
                <div class="container">
                    <div class="inner-content-slide text-center center-horizontal">
                        <h1>Tingkatkan Relasi Anda </h1>
                        <p>Kegiatan anda akan lebih mudah terselenggara dengan baik jika memiliki relasi yang lebih banyak, dengan demikian bangunlah relasi pada layanan kami.
                        </p>
                        <a href="/zakat/" class="btn btn-primary btn-md">DAFTAR AKUN SEKARANG</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item" style="background-image:url('/ecom/asset/images/main3.jpg');">
            <div class="overlay"></div>
            <div class="carousel-inner-wrapper">
               <div class="container">
                <div class="inner-content-slide text-center center-horizontal">
                    <h1>Temukan Kesepakatan Bersama</h1>
                    <p>Bangunlah kesepakatan bersama antara pemberi dan penerima sponsor kegiatan sehingga terjalin pemahaman yang lebih baik. 
                    </p>
                    <a href="/zakat/" class="btn btn-primary btn-md">DAFTAR AKUN SEKARANG</a>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>
<!-- END OF SLIDER CAROUSEL -->

<!-- SUMMARY COUNT -->
<div class="container">
    <div class="wrapper-summary-home">
        <div class="row">
            <div class="col-md-4 col-12 wrapper-summ-count">
                <div class="summ-count">

                    <h3 class="font-bold"><span id="total_fund"><?php echo $row1['USER'] ?></span></h3>
                    <p>Total Anggota</p>
                </div>
            </div>
            <div class="col-md-4 col-6 wrapper-summ-count">
                <div class="summ-count">
                    <h3 class="font-bold"><span id="donator_count"><?php echo $row2['ARTIKEL'] ?></span></h3>
                    <p>Data Pencari Sponsor</p>
                </div>
            </div>
            <div class="col-md-4 col-6 wrapper-summ-count">
                <div class="summ-count">
                    <h3 class="font-bold"><span id="patient_count"><?php echo $row3['ARTIKEL'] ?></span></h3>
                    <p>Data Pemberi Sponsor</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END OF SUMMARY COUNT -->




<!-- SECTION PATIENT -->
<section class="sec-global sec-home-patient" id="pencari">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="sec-title text-center">
            <div class="title">Pencari dan Pemberi Sponsor</div>
            <div class="desc">Berikut adalah para anggota pencari sponsor dan pemberi sponsor, bantu acara kegiatan mereka menjadi lebih baik lagi dengan cara anda!</div>
        </div><!-- END SECTION TITLE -->

        <!-- SECTION BODY -->
        <div class="sec-body">
            <div class="row">



                <!-- ARTIKEL -->
                <?php 
                $q= mysqli_query($konek,"SELECT * FROM tbl_artikel WHERE moderator_artikel='m1' OR moderator_artikel='m2' ORDER BY id_artikel DESC LIMIT 9");
                while ($r = mysqli_fetch_array($q)) {
                 ?>
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
                            <h4 class="patient-diagnosis"><a class="font-bold" href="all_single_page_pencari.php?id_artikel=<?php echo $r['id_artikel'];?>&id_akun=<?php echo $r['id_user_artikel'];?>"><b><?php echo ucwords($r['judul_artikel']); ?></b></a></h4>

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

                                    <p style="color:#ccc !important">Berakhir</p>
                                </div>
                                <div class="col-6 text-right">

                                    <p style="color:#ccc !important">Mulai</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <!-- END ARTIKEL -->






    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            <a href="all_page_pencari.php?halaman=1" class="btn btn-outline-primary" >Lihat Semua Kegiatan</a>
        </div>
    </div>

</div><!-- END SECTION BODY -->

</div>
</section><!-- END OF SECTION PATIENT -->



<!-- SECTION TESTIMONIAL -->
<section class="sec-global sec-testimonials" id="testimoni" style="background-image:url(/ecom/asset/images/flat-transparent.png);opacity: 0.95;">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="sec-title text-center">
            <div class="title">Testimonials</div>
            <div class="desc">Berikut adalah testimonial dari pengguna yang telah bergabung.</div>
        </div><!-- END SECTION TITLE -->
        <div class="sec-body">
            <div class="row">





                <?php
                $q= mysqli_query($konek,"SELECT * FROM tbl_testimonial ORDER BY id_testimonial DESC LIMIT 3");
                while ($r = mysqli_fetch_array($q)) {
                    ?>


                    <div class="col-md-4 col-sm-6 col-12 ard-testimonials">
                        <div class="card card-testi">
                            <div class="card-body">

                                <div class="photo-testi">

                                    <?php
                                    $q1= mysqli_query($konek,"SELECT * FROM signup WHERE id_user=$r[id_user_testimonial]");

                                    while ($r1 = mysqli_fetch_array($q1)) {
                                        if($r1['gambar'] != null){
                                            ?>  


                                            <img style="width: 70px !important" src="/ecom/admin/pengaturan/upload/<?php echo $r1['gambar'];?>"/>




                                            <?php
                                        }
                                        else {

                                            ?>


                                            <img style="width: 70px !important" src="/ecom/admin/pengaturan/upload/no-image.jpg"/>


                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <h5 class="card-title"><?php echo ucwords($r1['nama_depan']); ?></h5>
                                    <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                                    <p class="card-text"><?php echo $r['isi_testimonial'];?></p>
                                <!-- <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a> -->


                                    <?php
                                    
                                }
                                ?>  
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>





            </div>
        </div>
    </div>
</section><!-- END OF TESTIMONIAL -->







<section class="sec-global sec-article" style="background: white !important" id="video">
    <div class="container">
        <div class="sec-title text-left">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="title">Video pilihan Kami</div>
                    <div class="desc">Dapatkan tips, trik, artikel seputar kegiatan dan event pada Channel Youtube E-sponsor.</div>
                </div>

                <div class="col-md-4 text-right"><br>
                    <a href="all_page_pencari_video.php" class="btn btn-outline-primary">Lihat Semua Video</a>

                </div>

            </div>
        </div>
        <div class="sec-body">
            <div class="row">
                <div class="col-md-8">


                 <?php 


                 $grab = ngegrab('https://www.googleapis.com/youtube/v3/videos?part=snippet,contentDetails&chart=mostPopular&regionCode=ID&maxResults=1&key=AIzaSyA-dlBUjVQeuc4a6ZN4RkNUYDFddrVLxrA');
                 $json = json_decode($grab);
                 if($json)
                 {
                    foreach ($json->items as $hasil)
                    {
                        $link= $hasil->snippet->resourceId->videoId;
                        $id= $hasil->id;
                        $name= $hasil->snippet->title;
                        $permo=preg_replace("![^a-z0-9]+!i", " ", $name); 
                        $perm= trim($permo);
                        $perm = str_replace(" ","-",$perm);
                        $perm = str_replace("%20","-",$perm);
                        $perm = str_replace("--","-",$perm);
                        $perm = str_replace("---","-",$perm);
                        $perm = str_replace("+","-",$perm);
                        $perm = str_replace("_","-",$perm);
                        $perma= strtolower($perm);
                        $desc = $hasil->snippet->description;
                        $des = substr($hasil->snippet->description,0,190);
                        $desbr = nl2br ( $des );
                        $chtitle = $hasil->snippet->channelTitle;
                        $chid = $hasil->snippet->channelId;
                        $date = dateyt($hasil->contentDetails->snippet->videoPublishedAt);
                        $time=$hasil->contentDetails->videoPublishedAt; 
                        $duration= format_time($time);
                        $views= $hasil->statistics->viewCount;  
                        $link = str_replace(' ', '-', $name);
                        $link = preg_replace('/[^A-Za-z0-9\-]/', '', $link);
                        $link = preg_replace('/-+/', '-', $link);
                        echo"


                        <a href='all_single_page_pencari_video.php?v=$id' class='featured-article'>
                        <div class='img-article' style='background-image:url(https://i.ytimg.com/vi/$id/maxresdefault.jpg);'></div>
                        <div class='inner-featured'>
                        <div class='info-featured'>
                        <h2 class='title-article'>$name</h2><br>
                        <img src='asset/yt.png' width='50px' style='margin-top:-15px !important'> <span style='font-size:24px;'> &nbsp Trending Youtube Now</span>
                        </div>
                        </div>
                        </a>

                        ";
                    }
                }


                ?>


            </div>




            <div class="col-md-4">

               <?php 


               $grab = ngegrab('https://www.googleapis.com/youtube/v3/playlistItems?part=snippet,contentDetails&order=relevance&playlistId=PL3ZQ5CpNulQkgX7BrF-Uun6Z1vd_Gdz6R&key=AIzaSyA-dlBUjVQeuc4a6ZN4RkNUYDFddrVLxrA&maxResults=3');
               $json = json_decode($grab);
               if($json)
               {
                foreach ($json->items as $hasil)
                {
                    $link= $hasil->snippet->resourceId->videoId;
                    $id= $hasil->snippet->resourceId->videoId;
                    $name= $hasil->snippet->title;
                    $permo=preg_replace("![^a-z0-9]+!i", " ", $name); 
                    $perm= trim($permo);
                    $perm = str_replace(" ","-",$perm);
                    $perm = str_replace("%20","-",$perm);
                    $perm = str_replace("--","-",$perm);
                    $perm = str_replace("---","-",$perm);
                    $perm = str_replace("+","-",$perm);
                    $perm = str_replace("_","-",$perm);
                    $perma= strtolower($perm);
                    $desc = $hasil->snippet->description;
                    $des = substr($hasil->snippet->description,0,190);
                    $desbr = nl2br ( $des );
                    $chtitle = $hasil->snippet->channelTitle;
                    $chid = $hasil->snippet->channelId;
                    $date = dateyt($hasil->contentDetails->videoPublishedAt);
                    $time=$hasil->contentDetails->videoPublishedAt; 
                    $duration= format_time($time);
                    $views= $hasil->statistics->viewCount;  
                    $link = str_replace(' ', '-', $name);
                    $link = preg_replace('/[^A-Za-z0-9\-]/', '', $link);
                    $link = preg_replace('/-+/', '-', $link);
                    echo"


                    <a href='all_single_page_pencari_video.php?v=$id' class='other-article'>
                    <div class='img-article' style='background-image:url(https://i.ytimg.com/vi/$id/hqdefault.jpg);'></div>
                    <div class='inner-article'>
                    <div class='info-article'>
                    <h4 class='title-article'>$name</h4>
                    <div class='date-article font-light'> $date </div>
                    </div>
                    </div>
                    </a>



                    ";
                }
            }


            ?>




        </div>




    </div>
</div>
</div>
</section>












</div>
</section><!-- END OF SECTION PATIENT -->





<!-- SECTION PART DONASI SEMUA -->
<section class="sec-global sec-donate-all bg-white" id="tentang" style="opacity: 0.85">
    <div class="container">
        <div class="sec-body-single">
            <div class="row align-items-center">
                <div class="col-md-4 text-center">
                    <img src="asset/images/bingung.png" alt=""  class="img_donate_all">
                </div>
                <div class="col-md-8 info-donate-all">
                    <h3 class="font-bold text-color-sec"><br>Kami Adalah Solusi Anda!</h3>
                    <p>E-Sponsor adalah website yang menyediakan layanan untuk mempermudah pemberi dan penerima sponsor kegiatan menjadi lebih mudah terkoneksi, maka dari itu kami berkomitmen untuk menjadikan acara kegiatan anda lebih baik lagi serta memudahkan dalam pencarian dana sponsor kegiatan.</p>
                    
                </div>
            </div>
        </div>

    </div>
</section><!-- END OF PART DONASI SEMUA -->



<?php
include 'footer.php'
?>


