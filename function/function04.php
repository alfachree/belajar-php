<?php
function sapa($nama,$hari,$waktu){
    echo "Halo $nama, Wahai, selamat datang di kota Zaramaraz hari $hari, pada waktu $waktu\n ";

}
echo "namamu siapa? masukkan disini :";
$nama = trim (fgets(STDIN));
echo " ini hari apa? :";
$hari = trim (fgets(STDIN));
echo " apa waktunya? :";
$waktu = trim (fgets(STDIN));

sapa("$nama,$hari,$waktu");

?>