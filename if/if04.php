<?php
echo "Masukkan nama :";
$nama = trim(fgets(STDIN));
echo "Masukkan nilai anda :";
$nilai = trim(fgets(STDIN));
echo "Masukkan kelas anda :";
$kelas = trim(fgets(STDIN));

if($nilai <= 0){
    echo "$nama, Anda mungkin belum mengikuti ujian,$nama, cobalah untuk ikut ujian";

}elseif($nilai<60){
    echo "nilai : $nilai\n";
    echo "grade : E";

}elseif($nilai<70){
    echo "nilai : $nilai\n";
    echo "grade : D";

}elseif($nilai<80){
    echo "nilai : $nilai\n";
    echo "grade : C";
}elseif($nilai<90){
    echo "nilai : $nilai\n";
    echo "grade : B";
}elseif($nilai<100){
    echo "nilai : $nilai\n";
    echo "grade : A";

}elseif($nilai>100){
        echo "nilai : $nilai\n";
        echo "grade : A+";
    

}elseif($nilai>150){
    echo "Maaf kawan $nama dari kelas $kelas, nilai ini infalid, tidak ada nilai yang melebihi 100 namun nilai anda $nilai, jadi masukkan nilai yang falid pada data ini..";
}

?>