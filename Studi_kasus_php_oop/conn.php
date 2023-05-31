<?php

$server = mysqli_connect("localhost", "root", "", "studikasus");

if (!$server) {
    die("Connection failed: " . mysqli_connect_error());
}

$nis = $_GET["nis"];
$Inggris = $_GET["mapel1"];
$Ngoding = $_GET["mapel2"];
$Matematika = $_GET["mapel3"];
$Agama = $_GET["mapel4"];
$Sejarah = $_GET["mapel5"];
$Indonesia = $_GET["mapel6"];

$sql = "INSERT INTO studi (`nis`, `Inggris`, `Ngoding`, `Matematika`, `Agama`, `Sejarah`, `Indonesia`) VALUES ('$nis', '$Inggris', '$Ngoding', '$Matematika', '$Agama', '$Sejarah', '$Indonesia')";

if (mysqli_query($server, $sql)) {
    echo "Penyimpanan Berhasil...";
} else {
    echo "Yahhh Gagal...";
}

mysqli_close($server);

?>
<a href="database2.php">Tampilkan Table</a>
