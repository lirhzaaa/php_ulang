<?php
$server = mysqli_connect("localhost", "root", "", "studikasus");

require 'function.php';

if (isset($_POST["submit"])) {

    $nis = $_POST["nis"];
    $Inggris = $_POST["mapel1"];
    $Ngoding = $_POST["mapel2"];
    $Matematika = $_POST["mapel3"];
    $Agama = $_POST["mapel4"];
    $Sejarah = $_POST["mapel5"];
    $Indonesia = $_POST["mapel6"];

    $sql = "UPDATE `studi` SET 
                `Inggris`='$Inggris',
                `Ngoding`='$Ngoding',
                `Matematika`='$Matematika',
                `Agama`='$Agama',
                `Sejarah`='$Sejarah',
                `Indonesia`='$Indonesia'
                WHERE nis = '$nis'";
    $myquery = mysqli_query($server, $sql);

    if ($myquery) {
        echo "
        <script>
        alert('Data berhasil diubah');
        document.location.href = 'database2.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal ditambah');
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halo!</title>
</head>

<body>
    <?php
    $server = mysqli_connect("localhost", "root", "", "studikasus");

    $nis = $_GET['nis'];
    $sql = "SELECT * FROM studi WHERE nis = $nis";
    $myquery = mysqli_query($server, $sql);

    if (mysqli_num_rows($myquery) > 0) {
        while ($data = mysqli_fetch_assoc($myquery)) {
    ?>
            <form action="#" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><label for="nis">Masukkan NIS : </label></td>
                        <td><input type="number" name="nis" id="nis" value="<?php echo $data["nis"]; ?>"><br></td>
                    </tr>
                    <tr>
                        <td><label for="mapel1">Masukkan Nilai Inggris : </label></td>
                        <td><input type="number" name="mapel1" id="mapel1" value="<?php echo $data["Inggris"]; ?>"><br></td>
                    </tr>
                    <tr>
                        <td><label for="mapel2">Masukkan Nilai Ngoding : </label></td>
                        <td><input type="number" name="mapel2" id="mapel2" value="<?php echo $data["Ngoding"]; ?>"> <br></td>
                    </tr>
                    <tr>
                        <td><label for="mapel3">Masukkan Nilai Matematika : </label></td>
                        <td><input type="number" name="mapel3" id="mapel3" value="<?php echo $data["Matematika"]; ?>"> <br></td>
                    </tr>
                    <tr>
                        <td><label for="mapel4">Masukkan Nilai Agama : </label></td>
                        <td><input type="number" name="mapel4" id="mapel4" value="<?php echo $data["Agama"]; ?>"> <br></td>
                    </tr>
                    <tr>
                        <td><label for="mapel5">Masukkan Nilai Sejarah : </label></td>
                        <td><input type="number" name="mapel5" id="mapel5" value="<?php echo $data["Sejarah"]; ?>"> <br></td>
                    </tr>
                    <tr>
                        <td><label for="mapel6">Masukkan Nilai Indonesia : </label></td>
                        <td><input type="number" name="mapel6" id="mapel6" value="<?php echo $data["Indonesia"]; ?>"> <br></td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="submit">Kirimkan data</button></td>
                        <td><button type="hapus" name="hapus">hapus</button></td>
                    </tr>
                </table>
            </form>
    <?php
        }
    } else {
        echo "Data dalam tabel <b>studi</b> kosong!";
    }

    mysqli_close($server);
    ?>
</body>

</html>
