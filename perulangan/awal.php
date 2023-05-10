<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan</title>
</head>
<body>

<?php
echo "<h1>Perulangan</h1>";
echo "<h3>While</h3>";

$a =1;
    while ($a <= 20) {
        echo $a." ";
        $a++;
    }
    echo "<hr>";



    echo "<h3>Do While</h3>";

    $a = 10;
    do {
        echo $a." ";
        $a++;
    } while ($a <= 15);
    echo "<hr>";




    echo "<h3>For</h3>";

    for ($a=5; $a <= 20; $a++) { 
        echo $a ." ";
    }
    echo "<hr>";

    echo "<h3>Foreach</h3>";
    $angka = array('1', '2', '3', '4');

    foreach ($angka as $key => $value) {
    echo $key . "<br>";
}
    echo "<hr>";




?>

</body>
</html>