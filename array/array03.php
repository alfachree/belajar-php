<?php

$siswa =[
    "nama"=>"Volodimyr Zelensky",
    "kelas"=>11,
    "alamat"=>[
        "desa"=>"Kharkhiv",
        "kec"=>"Donetsk",
        "kab"=>"Kursk"
    ]
    ];
    echo $siswa["nama"].PHP_EOL;
    echo $siswa["kelas"].PHP_EOL;
    echo $siswa["alamat"]["desa"].PHP_EOL;
    echo $siswa["alamat"]["kec"].PHP_EOL;
    echo $siswa["alamat"]["kab"].PHP_EOL;

?>