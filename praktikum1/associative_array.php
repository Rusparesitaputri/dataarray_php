<?php
$profileArray = [
    "nama"=> "Ruspa",
    "kelas" => "TI 11"
];

echo $profileArray["nama"] . "<br>";
echo $profileArray["kelas"] . "<br>";



$profileMultiArray = [
    [
        "nama" => " Ruspa",
        "smester" => 4
    ], [
        "nama" => "Zharifah",
        "smester" => 5
    ], [
        "nama" => " nikita",
        "smester" => 2
    ]
];
foreach($profileMultiArray as $profile){
    echo $profile['nama'] . "<br>";
    echo $profile['smester'] . "<br>";
}
