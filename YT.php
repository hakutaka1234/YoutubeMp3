<?php
system("clear");
echo " \33[1;31mMasukan Pilihan 
[1] YOUTUBE TO MP3
[2] YOUTUBE TO MP4
";
echo "\33[1;33mInput >> ";
$balmond=trim(fgets(STDIN));
if($balmond=="1"){
include(".yt/mp3.php");}
if($balmond=="2"){
include(".yt/mp4.php");}
