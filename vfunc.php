<?php
error_reporting(0);
function tmgrab($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$uaa = $_SERVER['HTTP_USER_AGENT'];
    curl_setopt($ch, CURLOPT_USERAGENT, "User-Agent: $uaa");

    return curl_exec($ch);
}
function ngegrab($url){$ch = curl_init(); curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($ch,CURLOPT_ENCODING,'gzip');
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, '1');
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
$header[] = "Accept-Language: en";
$header[] = "User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.0; de; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3
";
$header[] = "Pragma: no-cache";
$header[] = "Cache-Control: no-cache";
$header[] = "Accept-Encoding: gzip,deflate";
$header[] = "Content-Encoding: gzip";
$header[] = "Content-Encoding: deflate";
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
$load = curl_exec($ch);
curl_close($ch);
return $load;}

// ngegrab source key ytb
$source       = ngegrab('http://www.youtube.com/yts/jsbin/player-vflyC4_W-/en_US/base.js');
$pecah = explode('"', $source); 
$tampil= $pecah[4425];

// hapus ini jika mau ganti ke api sendiri alias random api di bawah soal nya defaulnya nya pakai mapi dan devkey dan ini di arahin ke source key ytb langsung
$mapi=''.$tampil.'';
$devkey=''.$tampil.'';


// yg ketiga bkn api sendiri ini adalah set default random key
$apiclient=array('AIzaSyDzr_1u41daT8zPJCckRNR1u1Ot1PeRrjA','AIzaSyBFnjVlkL2v8xO1Tg0dSnWCCnZgbLrt5oM','AIzaSyA-dlBUjVQeuc4a6ZN4RkNUYDFddrVLxrA');
$ngacak=array_rand($apiclient);
// default tingga ubah xmapi ke mapi xdevkey ke devkey
$xmapi=$apiclient[$ngacak];
$xdevkey=''.$xmapi.'';



function tm($content,$start,$end){
if($content && $start && $end) {
$r = explode($start, $content);
if (isset($r[1])){
$r = explode($end, $r[1]);
return $r[0];}
return '';}}
function format_time($t) {
$tm = str_replace('PT','',$t);
$tm = str_replace('H',':',$tm);
$tm = str_replace('M',':',$tm);
$tm = str_replace('S','',$tm);
return $tm;}
/*
function write_to_file($q)
{$filename = 'sitemap.txt';
$fh = fopen($filename, "a");
if(flock($fh, LOCK_EX))
{fwrite($fh, $q);
flock($fh, LOCK_UN);}
fclose($fh);}
*/
function dateyt($date)
{
$date = substr($date,0,10);
$date = explode('-',$date);
$mn = date('F',mktime(0,0,0,$date[1]));
$dates=''.$date[2].' '.$mn.' '.$date[0].'';
return $dates;
}
?>