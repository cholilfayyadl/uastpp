<?php 
include 'vfunc.php';

$grab = ngegrab('https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&order=relevance&playlistId=PL3ZQ5CpNulQkgX7BrF-Uun6Z1vd_Gdz6R&key=AIzaSyA-dlBUjVQeuc4a6ZN4RkNUYDFddrVLxrA&maxResults=50');
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
echo'


'.$name.'


';
}
}


?>