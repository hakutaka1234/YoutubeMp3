<?php

error_reporting(0);
function POST($url, $post){
  $header=["user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 12_0 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.0 Mobile/15E148 Safari/604.1"];
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
  return curl_exec($ch);  
}
function bersih(){system("clear");}
$hitam="\33[1;30m";
$merah="\33[1;31m";
$hijau="\33[1;32m";
$kuning="\33[1;33m";
$biru="\33[1;34m";
$ungu="\33[1;35m";
$birulaut="\33[1;36m";
$putih="\33[1;37m";
$abuabu="\33[1;38m";
$Putih="\33[1;39m";
bersih();
/*Yt Download*/
echo "$kuning Masukan URL : $merah";
$nama=trim(fgets(STDIN));
$css="https://yt1s.com/api/ajaxSearch/index";
$yutub="q=".$nama."=mp3";
$rush=(POST($css, $yutub));
$kuntul=json_decode($rush);
$AYOK=$kuntul->vid;
if($AYOK==true){
$judul=$kuntul->title;
$beb="137"; //1080p
$beba="136"; //720p
$bebb="135"; //480p
$bebc="18"; //360p
$bebd="133"; //240p
$bebe="160"; //144p
$seribu=$kuntul->links->mp4->$beb->q;
$seribua=$kuntul->links->mp4->$beba->q;
$seribub=$kuntul->links->mp4->$bebb->q;
$seribuc=$kuntul->links->mp4->$bebc->q;
$seribud=$kuntul->links->mp4->$bebd->q;
$seribue=$kuntul->links->mp4->$bebe->q;
bersih();
echo "$hijau
++++++ TOOLS BY HAKUTAKA
++++++ SCRIPT DOWNLOAD YT
++++++ AUTHOR : github.com/hakutaka1234

$kuning JUDUL :$merah $judul
";
echo "$birulaut Pilih Kualitas
$hijau >>1] KUALITAS $seribu
$merah >>2] KUALITAS $seribua
$biru >>3] KUALITAS $seribub
$kuning >>4] KUALITAS $seribuc
$hijau >>5] KUALITAS $seribud
$merah >>6] KUALITAS $seribue
";
echo"$birulaut Input >> $merah";
$hu=trim(fgets(STDIN));
if($hu=="1"){
$haku="137";
$Links=$kuntul->links->mp4->$haku->k;
$VID=$kuntul->vid;
$bu="https://yt1s.com/api/ajaxConvert/convert";
$dty="vid=".$VID."&k=".urlencode($Links)."";
$GET_DW=(POST($bu, $dty));
if($GET_DW==true){
$Gua=json_decode($GET_DW);
$Dlink=$Gua->dlink;
include("src.php");
echo "\n Sedang Mendownload...
 ";
system("curl -s -o ".$MEKISOURCE." ".$Dlink."");
if(file_exists("$MEKISOURCE")){
system("mv Hasil.mp4 /sdcard");
echo "Sukses... File Sudah Di Pindahkan Ke Memori Anda\nDengan Nama Hasil.mp4";
}
}else{ echo "Error";}}

if($hu=="2"){
$haku="136";
$Links=$kuntul->links->mp4->$haku->k;
$VID=$kuntul->vid;
$bu="https://yt1s.com/api/ajaxConvert/convert";
$dty="vid=".$VID."&k=".urlencode($Links)."";
$GET_DW=(POST($bu, $dty));
if($GET_DW==true){
$Gua=json_decode($GET_DW);
$Dlink=$Gua->dlink;
include("src.php");
echo "\n Sedang Mendownload...
 ";
system("curl -s -o ".$MEKISOURCE." ".$Dlink."");
if(file_exists("$MEKISOURCE")){
system("mv Hasil.mp4 /sdcard");
echo "Sukses... File Sudah Di Pindahkan Ke Memori Anda\nDengan Nama Hasil.mp4";
}
}else{ echo "Error";}}



if($hu=="3"){
$haku="135";
$Links=$kuntul->links->mp4->$haku->k;
$VID=$kuntul->vid;
$bu="https://yt1s.com/api/ajaxConvert/convert";
$dty="vid=".$VID."&k=".urlencode($Links)."";
$GET_DW=(POST($bu, $dty));
if($GET_DW==true){
$Gua=json_decode($GET_DW);
$Dlink=$Gua->dlink;
include("src.php");
echo "\n Sedang Mendownload...
 ";
system("curl -s -o ".$MEKISOURCE." ".$Dlink."");
if(file_exists("$MEKISOURCE")){
system("mv Hasil.mp4 /sdcard");
echo "Sukses... File Sudah Di Pindahkan Ke Memori Anda\nDengan Nama Hasil.mp4";
}
}else{ echo "Error";}}

if($hu=="4"){
$haku="18";
$Links=$kuntul->links->mp4->$haku->k;
$VID=$kuntul->vid;
$bu="https://yt1s.com/api/ajaxConvert/convert";
$dty="vid=".$VID."&k=".urlencode($Links)."";
$GET_DW=(POST($bu, $dty));
if($GET_DW==true){
$Gua=json_decode($GET_DW);
$Dlink=$Gua->dlink;
include("src.php");
echo "\n Sedang Mendownload...
 ";
system("curl -s -o ".$MEKISOURCE." ".$Dlink."");
if(file_exists("$MEKISOURCE")){
system("mv Hasil.mp4 /sdcard");
echo "Sukses... File Sudah Di Pindahkan Ke Memori Anda\nDengan Nama Hasil.mp4";
}
}else{ echo "Error";}}

if($hu=="5"){
$haku="133";
$Links=$kuntul->links->mp4->$haku->k;
$VID=$kuntul->vid;
$bu="https://yt1s.com/api/ajaxConvert/convert";
$dty="vid=".$VID."&k=".urlencode($Links)."";
$GET_DW=(POST($bu, $dty));
if($GET_DW==true){
$Gua=json_decode($GET_DW);
$Dlink=$Gua->dlink;
include("src.php");
echo "\n Sedang Mendownload...
 ";
system("curl -s -o ".$MEKISOURCE." ".$Dlink."");
if(file_exists("$MEKISOURCE")){
system("mv Hasil.mp4 /sdcard");
echo "Sukses... File Sudah Di Pindahkan Ke Memori Anda\nDengan Nama Hasil.mp4";
}
}else{ echo "Error";}}

if($hu=="6"){
$haku="160";
$Links=$kuntul->links->mp4->$haku->k;
$VID=$kuntul->vid;
$bu="https://yt1s.com/api/ajaxConvert/convert";
$dty="vid=".$VID."&k=".urlencode($Links)."";
$GET_DW=(POST($bu, $dty));
if($GET_DW==true){
$Gua=json_decode($GET_DW);
$Dlink=$Gua->dlink;
include("src.php");
echo "\n Sedang Mendownload...
 ";
system("curl -s -o ".$MEKISOURCE." ".$Dlink."");
if(file_exists("$MEKISOURCE")){
system("mv ".$MEKISOURCE." /sdcard");
echo "Sukses... File Sudah Di Pindahkan Ke Memori Anda\nDengan Nama ".$MEKISOURCE;
}
}else{ echo "Error";}}

}else if($AYOK==false){
echo "$merah MAAF MASUKKAN URL DENGAN BENAR\n";}
