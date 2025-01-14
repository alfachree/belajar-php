<?php
$nama = "Reza";
$nilai = 80;

function tampilnilai(){
  global $nama, $nilai;
  echo $nama . $nilai;
}
tampilnilai();

?>