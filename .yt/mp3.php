<?php

//Code By Hakutaka//
//NO RECODE!!!//



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
$hhh=["user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 12_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148"];
$yutub="q=".$nama."=mp3";
$xhd = curl_init();
  curl_setopt($xhd, CURLOPT_URL, $css);
  curl_setopt($xhd, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($xhd, CURLOPT_POST, 1);
  curl_setopt($xhd, CURLOPT_HTTPHEADER, $hhh);
  curl_setopt($xhd, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($xhd, CURLOPT_POSTFIELDS, $yutub);
$rush=curl_exec($xhd);
$kuntul=json_decode($rush);
$harley=$kuntul->links;
if($harley == true){
$title=$kuntul->title;
$mp3=$kuntul->links->mp3->mp3128->f;
$size=$kuntul->links->mp3->mp3128->size;
$kapasitas=$kuntul->links->mp3->mp3128->q;
echo "$hijau       Welcome
$kuning  Judul : $title
$merah  Type : $mp3
$kuning  Size : $size
$merah  Kapasitas : $kapasitas

$kuning Ketik Y untuk Melanjutkan
";
echo "$putih input >> $birulaut";
$judulbenar=trim(fgets(STDIN));
if($judulbenar=="Y"){
$key=$harley->mp3->mp3128->k;
$vid=$kuntul->vid;
//Get Url Download Link//
$url="https://yt1s.com/api/ajaxConvert/convert";
$data="vid=".$vid."&k=".$key."";
$ytls=array(
"user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 12_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148"
);
$ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $ytls);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result=curl_exec($ch);
$js=json_decode($result);
$dlink=$js->dlink;
if($dlink==true){
echo "Masukan Nama Untuk Hasil
Contoh Hasil.mp3
";
echo "Input >> \33[1;32m";
$Grock=trim(fgets(STDIN));
echo"Sedang Mendownload Harap Sabar.....\n";
system("curl -s -o ".$Grock." ".$dlink."");
echo"Sukses... File Tersimpan Dengan Nama \n".$Grock;
}
else{
system("clear");
error_reporting(0);
$AAA1="https://yt1s.com/api/ajaxSearch/index";
$AAA2=[
"Host: yt1s.com",
"accept: */*",
"x-requested-with: XMLHttpRequest",
"user-agent: Mozilla/5.0 (Linux; Android 8.1.0; vivo 1817) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36",
"content-type: application/x-www-form-urlencoded; charset=UTF-8",
"origin: https://yt1s.com",
"sec-fetch-site: same-origin",
"sec-fetch-mode: cors",
"sec-fetch-dest: empty",
"referer: https://yt1s.com/youtube-to-mp3/en1",
"accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7"];
$AAA3="q=".$nama."&vt=mp3";
$AAA4 = curl_init();
  curl_setopt($AAA4, CURLOPT_URL, $AAA1);
  curl_setopt($AAA4, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($AAA4, CURLOPT_POST, 1);
  curl_setopt($AAA4, CURLOPT_HTTPHEADER, $AAA2);
  curl_setopt($AAA4, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($AAA4, CURLOPT_POSTFIELDS, $AAA3);
$AAA9=curl_exec($AAA4);
$J=json_decode($AAA9);
$AAA6=$J->vid;
if($AAA6==true){
$AAA7=$J->title;
$AAA8=$J->kc;
$Bajol="https://yt1s.com/api/ajaxConvert/convert";
$Hulkh=[
"Host: yt1s.com",
"accept: */*",
"x-requested-with: XMLHttpRequest",
"user-agent: Mozilla/5.0 (Linux; Android 8.1.0; vivo 1817) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36",
"content-type: application/x-www-form-urlencoded; charset=UTF-8",
"origin: https://yt1s.com",
"sec-fetch-site: same-origin",
"sec-fetch-mode: cors",
"sec-fetch-dest: empty",
"referer: https://yt1s.com/youtube-to-mp3/en1",
"accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7"];
$HAKU1="vid=".$AAA6."&k=".urlencode($AAA8)."";
$HAKU2 = curl_init();
  curl_setopt($HAKU2, CURLOPT_URL, $Bajol);
  curl_setopt($HAKU2, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($HAKU2, CURLOPT_POST, 1);
  curl_setopt($HAKU2, CURLOPT_HTTPHEADER, $Hulkh);
  curl_setopt($HAKU2, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($HAKU2, CURLOPT_POSTFIELDS, $HAKU1);
$Kimono=curl_exec($HAKU2);
$J=json_decode($Kimono);
$download=$J->dlink;
echo"Judul : $AAA7
Apakah Anda Ingin Mendownload??
Tekan Y Untuk Mendownload
Tekan N Untuk Membatalkan

Input >>";
$DO=trim(fgets(STDIN));
if($DO=="Y"){
echo " Masukan Nama Untuk Mp3Nya
Contoh Haku.mp3

Input>> ";
$nMp3=trim(fgets(STDIN));
system("clear");
echo "Sedang Mendownload \n";
system("curl -s -o ".$nMp3." ".$download."");
if(file_exists($nMp3)){
echo "Sukses ... File Sudah Di Download Dengan Nama ".$nMp3."\n";
}else{echo "Gagal";}
}else if($DO=="N"){
echo " Terimakasih";}



}
elseif($AAA6==false){
echo "Error";}
}
}
else if($judulbenar=="N"){
system(exit);}

}/*milik Harley*/
else if($harley == false){
echo "$birulaut Mohon Masukan Link Dengan Benar";
}
?>
