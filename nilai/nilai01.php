<?php
echo "Masukkan nilai awal :";
$awal = trim(fgets(STDIN));

echo "Masukkan nilai akhir :";
$akhir = trim(fgets(STDIN));

for ($awal; $awal <= $akhir; $awal++){
    echo "Antrian ke-$awal, silahkan maju\n";
}
?>