<?php
$title = 'E-Sponsor | Pencarian dan Pemberian Dana Kegiatan';
include 'head.php';
include 'vfunc.php';
$end = $_GET['page']; 



$grab = ngegrab('https://www.googleapis.com/youtube/v3/search?key=AIzaSyA-dlBUjVQeuc4a6ZN4RkNUYDFddrVLxrA&channelId=UCuMAjEaSMj7q7YLf0xW1MjQ&part=snippet,id&order=date&maxResults=9&pageToken='.$end.'');
$json = json_decode($grab);
if($json)
{
    $next_page = $json->nextPageToken;
    $prev_page = $json->prevPageToken;
    $total = number_format($json->pageInfo->totalResults);
    ?>
    <div class="wrapper-page">
        <!-- BACKDROP -->

        <div class="backdrop-global backdrop-patient d-flex align-items-center justify-content-start" style="background-image:url(asset/yt_bg.jpg);opacity: 0.90">

            <div class="container">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-md-9">

                        <h1 class="header-page font-brand-reg ">
                         Cari Semua Video

                     </h1>
                     <h5>Tersedia <b><?php echo $total; ?> Video</b> pada Channel Youtube E-Sponsor yang berisi tentang tips, trik, artikel seputar kegiatan dan event. Silahkan klik salah satu video dibawah ini untuk melihat lebih detail.</h5>
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



                        foreach ($json->items as $hasil)
                        {
                            $link= $hasil->snippet->resourceId->videoId;
                            $id= $hasil->id->videoId;
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
                            $date = dateyt($hasil->snippet->publishedAt);
                            $time=$hasil->snippet->videoPublishedAt; 
                            $duration= format_time($time);
                            $views= $hasil->statistics->viewCount;  
                            $link = str_replace(' ', '-', $name);
                            $link = preg_replace('/[^A-Za-z0-9\-]/', '', $link);
                            $link = preg_replace('/-+/', '-', $link);
                            echo"





                            <div class='col-md-4 col-sm-6 col-12 patient-card'>
                            <div class='patient-cardbox on-going'>

                            <div class='patient-img'>

                            <a href='all_single_page_pencari_video.php?v=$id'>
                            <div class='main-img-patient lazy-load'
                            data-src='https://i.ytimg.com/vi/$id/hqdefault.jpg'
                            style='background-repeat: no-repeat; background-position: center; background-size:125%; padding-bottom:56%; min-width: 100%;'>


                            </div>
                            </a>



                            </div>
                            <div class='patient-info'>
                            <div class='patient-headline'>
                            <h4 class='patient-diagnosis'><a class='font-bold' href='all_single_page_pencari_video.php?v=$id'><b>$name</b></a></h4><br>
                            <span style='background:#fb4b5e;color:#fbfbfb;padding:5px 10px;opacity:0.8;border-radius:10px;'>$date</span>
                            </div>

                            <div class='patient-by text-truncate'>
                            Oleh Pengguna Channel Youtube E-Sponsor
                            </div>






                            </div>
                            </div>
                            </div>


                            ";
                        }
                    }


                    ?>




                </div> 






                <div class="text-center">
                    <ul class="pagination">









                        <?php
                        if(empty($prev_page)){
                            echo'

                            <span class="current">
                            <li class="page-item">
                            &nbsp
                            '.$total.' Video   
                            </li>
                            </span>

                            &nbsp  <span style="color:#ddd">|</span>

                            <li class="page-item"> <a href="all_page_pencari_video.php?page='.$next_page.'" rel="dofollow" class="page-link"><span> Next Page <span style="color:#ddd">>></span> </span></a> </li>';
                        }
                        else{
                            echo'

                            <span class="current">
                            <li class="page-item">
                            &nbsp
                            '.$total.' Videos   
                            </li>
                            </span>

                            &nbsp  <span style="color:#ddd">|</span>


                            <li class="page-item"> <a href="all_page_pencari_video.php?page='.$prev_page.'" rel="dofollow" class="page-link"><span><span style="color:#ddd"><<</span> Prev Page </span></a> </li>   <span style="color:#ddd">|</span> 
                            <li class="page-item"> <a href="all_page_pencari_video.php?page='.$next_page.'" rel="dofollow" class="page-link"><span> Next Page <span style="color:#ddd">>></span> </span></a> </li>
                            ';
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
