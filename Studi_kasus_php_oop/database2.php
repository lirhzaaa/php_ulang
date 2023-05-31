<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan 1</title>
</head>
<body>

<?php
$server = mysqli_connect("localhost", "root", "", "studikasus");

if ($server) {
    echo "";
} else {
    echo "Gagal";
}

$sql    = "SELECT * FROM studi";
$result = mysqli_query($server, $sql);
?>

<center>
    <table border="1" cellspacing="1" cellpadding="10">
        <tr>
            <th>Nis</th>
            <th>Inggris</th>
            <th>Ngoding</th>
            <th>Matematika</th>
            <th>Agama</th>
            <th>Sejarah</th>
            <th>Indonesia</th>
            <th>Total</th>
            <th>Rata</th>
            <th>Aksi</th>
        </tr>

        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($display = mysqli_fetch_assoc($result)) {
                $nis = $display["nis"];
                $total = $display["Inggris"] + $display["Ngoding"] + $display["Matematika"] + $display["Agama"] + $display["Sejarah"] + $display["Indonesia"];
                $rata = $total / 6;
                ?>
                <tr>
                    <td><?php echo $nis; ?></td>
                    <td><?php echo $display["Inggris"]; ?></td>
                    <td><?php echo $display["Ngoding"]; ?></td>
                    <td><?php echo $display["Matematika"]; ?></td>
                    <td><?php echo $display["Agama"]; ?></td>
                    <td><?php echo $display["Sejarah"]; ?></td>
                    <td><?php echo $display["Indonesia"]; ?></td>
                    <td><?php echo number_format($total); ?></td>
                    <td><?php echo number_format($rata, 2); ?></td>
                    <td>
                        <a href="hapus.php?nis=<?php echo $nis ?>">Hapus</a> |
                        <a href="ubah.php?nis=<?php echo $nis ?>">Ubah</a>
                    </td>
                </tr>
                <?php
            }
        } else {
            ?>
            <tr>
                <td colspan="10">No data found</td>
            </tr>
        <?php } ?>
    </table>
</center>
</body>
</html>
