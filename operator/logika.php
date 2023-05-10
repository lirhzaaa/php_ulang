<?php
echo "<h1>Logika</h1>";

echo "<h3>Logika And</h3>";
$x = 100;
$z = 50;

if ($x === 100 AND $z == 50) {
    var_dump($x == 100 AND $z == 50);
}
echo "<hr>";

echo "<h3>Logika or</h3>";
$x = 100;
$z = 50;

if ($x == 100 or $z == 80) {
    var_dump($x == 100 or $z == 80);
}
echo "<hr>";
    
echo "<h3>Logika ||</h3>";
$x = 100;
$y = 50;

if ($x == 100 || $z == 80) {
    var_dump($x == 100 || $z == 80);
}
echo "<hr>";
?>