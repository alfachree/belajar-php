<?php
$siswa = [
    "siswa 1"=>[
        "N" =>"William Arnold De Ons",
        "A" => "Islam",
        "M" => "BHS Inggris",
        "A" => "PG.Pagotan",
        "K" => "12",
        "U" => "Tugas BHS Inggris",
    ],
    "siswa 2"=>[
        "N" =>"Richard",
        "A" => "Islam",
        "M" => "BHS Inggris",
        "A" => "INKA Madiun",
        "K" => "12",
        "U" => "Tugas BHS Inggris",
    ]
    ];
    foreach($siswa as $murid => $santri){
        echo strtoupper($murid).PHP_EOL;

        foreach($santri as $data =>$isi){
            echo ucwords($data)." : ". $isi . PHP_EOL;
        }
    }
    

?>