<?php
$file = fopen("halo.txt","w");

$teks = " Halo \n";
fwrite($file,$teks);

$teks = " Saya sedang belajar PHP";
fwrite($file,$teks);

fclose($file);
?>