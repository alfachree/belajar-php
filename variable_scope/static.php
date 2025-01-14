<?php
function antrian(){
    static $antrian=1;
    echo $antrian.PHP_EOL;
    $antrian++;
}

antrian();
antrian();
antrian();
antrian();
antrian();
?>