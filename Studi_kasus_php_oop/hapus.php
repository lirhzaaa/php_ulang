<?php
    $nis = $_GET['nis'];
    $server = mysqli_connect("localhost","root","","studikasus");
    echo $nis; 
 
    $sql = "DELETE FROM studi WHERE nis = '$nis'";

    $query = mysqli_query($server, $sql);
     if ($query) {
        echo "Data berhasil dihapus!";
        echo "<a href='database2.php'> Tampilkan Data</a>";
    } else {
        echo "Penghapusan gagal <br>".mysqli_error($server);
    }
?>