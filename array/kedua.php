<?php
$nama = ["azhril", "dante", "owl", "simon"];

for ($i=0; $i < count($nama); $i++){ 
    echo $nama[$i]."<br>";
}

echo "<hr>";

$hewan = ["Sapi", "Kerbau", "Banteng", "Asep"];

foreach($hewan as $isi){
    echo $isi."<br>";
}


echo "<hr>";


$setan = ["Zalanbur", "Dasim", "Wasnan", "Tibbir"];

$a = 0;
while ($a < count($setan)) {
    echo $setan[$a]."<br>";
    $a++;
}


?>