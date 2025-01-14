<?php
echo "namamu siapa? masukkan disini :";
$nama = trim (fgets(STDIN));

function sapa($nama){
    echo "Halo $nama, Wahai, ini kejutan... \n ";

}
sapa("$nama");

?>