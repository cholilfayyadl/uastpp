<?php
$title = 'E-Sponsor | Pencarian dan Pemberian Dana Kegiatan';
include 'head.php';
include 'vfunc.php';
include 'lib/config.php';
include 'lib/koneksi.php';

$id_video = $_GET['v'];
$id_akun = $_GET['id_akun'];
$data= mysqli_query($konek, "SELECT * FROM tbl_artikel WHERE id_artikel='$id_artikel'");
$pecah = mysqli_fetch_array($data);

$akun= mysqli_query($konek, "SELECT * FROM signup WHERE id_user='$id_akun'");
$dataAkun = mysqli_fetch_array($akun);



$yf=ngegrab('https://www.googleapis.com/youtube/v3/videos?key=AIzaSyA-dlBUjVQeuc4a6ZN4RkNUYDFddrVLxrA&part=snippet,contentDetails,statistics,topicDetails&id='.$_GET['v'].'');
$yf=json_decode($yf);
if($yf)
{
    foreach ($yf->items as $item)
    {
        $name=$item->snippet->title;
        $tages = str_replace(' ', '-', $name);
        $tages = preg_replace('/[^A-Za-z0-9\-]/', '', $tages);
        $tages = str_replace('---', '-', $tages);
        $tagess = explode('-', $tages);
        $des = $item->snippet->description;
        $date = dateyt($item->snippet->publishedAt);
        $channelId = $item->snippet->channelId;
        $chtitle = $item->snippet->channelTitle;
        $ctd=$item->contentDetails;
        $duration=format_time($ctd->duration);
        $hd = $ctd->definition;
        $st= $item->statistics;
        $views = number_format($st->viewCount);
        $likes = $st->likeCount;
        $dislikes = $st->dislikeCount;
        $persentase = number_format($likes/$dislikes);
        $favoriteCount = $st->favoriteCount;
        $commentCount = number_format($st->commentCount);
        $names = str_replace(" - "," ",$name);
        $source_id = $_GET['v'];

        $cd = preg_replace("/[^A-Za-z0-9[:space:]]/","$1",$name); 
        $cd = str_replace('','', $cd); 
        $masbro = ucwords($cd);

        {

            $title='Download '.$masbro.' Lagu dan Video';
            $description ='Free download and streaming video '.$masbro.' in MP3 3GP MP4 FLV WEBM MKV Full HD 720p 1080p bluray formats';

        }

        $tag=$name;
        $tag=str_replace(" ",",", $tag);
        $dtag=$des;
        $des = $item->snippet->description;
        $desc = str_replace(urldecode('%0a'), '<br/>', $des);

        ?>




        <div class="wrapper-page">
            <!-- PATIENT PANEL OVERVIEW -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 align-self-center">
                        <!-- PATIENT OVERVIEW -->

                        <div class="wrapper-panel-box panel-patient" style="margin-top:15px;">
                            <div class="d-lg-flex d-md-block align-items-top">


                                <div class="image-patient">
                                 <iframe src="https://www.youtube.com/embed/<?php echo $id_video ?>" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" width="100%" height="100%" sandbox="allow-scripts allow-pointer-lock allow-same-origin allow-forms" allowfullscreen="allowfullscreen"
                                    mozallowfullscreen="mozallowfullscreen" 
                                    msallowfullscreen="msallowfullscreen" 
                                    oallowfullscreen="oallowfullscreen" 
                                    webkitallowfullscreen="webkitallowfullscreen"></iframe>
                                </div>

                                <div class="info-patient">
                                    <div class="info-overview">

                                        <h2 class="font-brand-reg headline-patient"><?php echo $name ?></h2>




                                        <div class="patient-name" style="font-size: 12px">




                                            <span style="color:#777"><i class="ti-eye"></i> &nbsp &nbsp <?php echo $views; ?> View Counts</span><br>
                                            <span style="color:#777"><i class="ti-stats-up"></i> &nbsp &nbsp <?php echo number_format($likes); ?> Like Counts</span><br>
                                            <span style="color:#777"><i class="ti-stats-down"></i> &nbsp  &nbsp <?php echo number_format($dislikes); ?> Dislike Counts</span><br>
                                            <span style="color:#777"><i class="ti-comment"></i> &nbsp  &nbsp <?php echo $commentCount; ?> Comment Counts</span><br>



                                        </div>

                                        <?php 
                                        $mulai = date('Y-m-d');
                                        $start_date = new DateTime($mulai);
                                        $end_date = new DateTime($pecah['batas_artikel']);
                                        $interval = $start_date->diff($end_date);
                                        ?>

                                        <div class="donation-progress progress" style="height:25px !important">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $persentase ?>%"
                                                aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $persentase ?>%" title="Tidak Disukai oleh <?php echo $persentase ?>%">
                                                <?php
                                                if($persentase < 20 ){
                                                    echo"";
                                                }
                                                elseif ($persentase > 20) {
                                                 echo "<b> $persentase% Tidak Disukai </b>";
                                             }
                                             else{
                                                echo "";
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="stat-current">
                                        <div class="row">
                                           <div class="col-6">

                                            <p style="color:#ccc !important">Dislikes</p>
                                        </div>
                                        <div class="col-6 text-right">

                                            <p style="color:#ccc !important">Likes</p>
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
                        <p> 
                        Kami menggunakan Youtube API Versi 3 tetapi tidak disertifikasi atau didukung oleh Youtube, video ini berasal dari Channel E-Sponsor.</p>
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

                                    <p>

                                        <?php echo $desc; ?>
                                        
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
                                                <div class="float-left" style="color:#3a99d8;">ID Video</div>


                                                <span class='float-right'><?php echo $id_video ?></span>
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


                                                <span class='float-right'><?php echo $name; ?></span>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td class="">
                                                <div class="float-left" style="color:#3a99d8;">Dilihat</div>


                                                <span class='float-right'><?php echo $views ?></span>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td class="">
                                                <div class="float-left" style="color:#3a99d8;">Disukai</div>

                                                <span class='float-right'><?php echo number_format($likes) ?></span>


                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">
                                                <div class="float-left" style="color:#3a99d8;">Tidak Disukai</div>


                                                <span class='float-right'><?php echo number_format($dislikes) ?></span>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="">
                                                <div class="float-left" style="color:#3a99d8;">Komentar</div>


                                                <span class='float-right'><?php echo $commentCount; ?></span>
                                            </td>

                                        </tr>




                                        <tr>
                                            <td>
                                                <h4 class="font-bold">
                                                    <div class="float-left">Alamat</div> 
                                                    <span class="float-right" style="font-weight:bold;"> <a href="https://www.youtube.com/watch?v=<?php echo $id_video ?>">Youtube</a></span>
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


                    <?php
                }
            }
            ?>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                        <!-- DONATUR LIST -->
                        <div class="patient-side-info">
                            <h4 class="sec-sub-title font-bold">Pencari Sponsor Terbaru</h4>
                            <div class="row wrapper-donatur-list">






                              <?php 
                              $q= mysqli_query($konek,"SELECT * FROM tbl_artikel WHERE moderator_artikel='m1' ORDER BY id_artikel DESC LIMIT 8");
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
                      $q= mysqli_query($konek,"SELECT * FROM tbl_artikel WHERE moderator_artikel='m2' ORDER BY id_artikel DESC LIMIT 8");
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


