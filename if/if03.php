<?php
echo "Masukkan nama :";
$nama = trim(fgets(STDIN));
echo "Masukkan nilai anda :";
$nilai = trim(fgets(STDIN));

if($nilai>=80){
    echo "Selamat $nama, anda lulus dari ruangan penyesalan, semoga harimu menyenangkan.";

}else{
    echo "Maaf $nama, anda belum lulus ujian menangkap ayamnya, silahkan ulangi lagi.";
}
?>