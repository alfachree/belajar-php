<?php
echo "Enter a screet code :";
 $kode = trim (fgets(STDIN));

$kode = 1;

switch($kode){
    case 1:
        echo "Welcome commander, nice too meet you";
        break;
    case 2:
        echo "Welcome sir, ihope thise day is good";
        break;
    case 3 :
        echo "Welcome sir, what have ido to you?";
        break;
    default :
        echo "who are you?";
        break;
}
?>