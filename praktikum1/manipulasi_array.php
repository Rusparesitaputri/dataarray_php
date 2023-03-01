<?php
$arrayBuah = ["Jambu", "Melon", "Pisang", "pir"];

// mengurutkan nilai atau suatu array
sort($arrayBuah);

// menghapus nilai array yang paling akhir
array_pop($arrayBuah);

// mengapus keseluruhan isi variabel 
unset($arrayBuah [1]);

// untuk menambahkan nilai arrat y paling belakang
array_push($arrayBuah, "manggis");

// menghapus nilai array yang paling awal/depan
array_shift($arrayBuah);

// untuk menambahkan nilai yang paling depan
array_unshift($arrayBuah, "semangka");

// mengubah spesifik nilai array tertentu
$arrayBuah[0] = "alpukat" ;

foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}
