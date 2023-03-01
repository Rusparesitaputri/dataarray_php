<?php
$arrayBuah = ["Jambu", "Melon", "Pisang", "pir"];

print_r($arrayBuah);
echo "<br>";
var_dump($arrayBuah);
echo "<br>";
foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}
echo "<br>";
echo $arrayBuah[0];