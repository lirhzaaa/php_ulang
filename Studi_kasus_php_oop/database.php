<!DOCTYPE html>
<html>
<head>
  <title>Mapel</title>
</head>
<body>

    <script>
    alert('Selamat datang');
    </script>
<center>
  <h1>Nis</h1>
  <form action="conn.php" method="GET">
  Nis <br> <input type = "number" name = "nis"> </input> <br><br>
  
  <h1>Nilai mapel</h1>
  <form action="conn.php" method="GET" name = "formAngka">
  <form method="post" action="">
    <label for="mapel1">Inggris :</label>
    <input type="number" name="mapel1" id="mapel1" required><br><br>
    
    <label for="mapel2">Ngoding :</label>
    <input type="number" name="mapel2" id="mapel2" required><br><br>
    
    <label for="mapel3">Matematika :</label>
    <input type="number" name="mapel3" id="mapel3" required><br><br>
    
    <label for="mapel4">Agama :</label>
    <input type="number" name="mapel4" id="mapel4" required><br><br>
    
    <label for="mapel5">Sejarah :</label>
    <input type="number" name="mapel5" id="mapel5" required><br><br>
    
    <label for="mapel6">Indonesia :</label>
    <input type="number" name="mapel6" id="mapel6" required><br><br>
    
    <input type="submit" value="Hitung">
    <input type = "reset" name = "reset"> </input> <br><br>
  </form>
  </center>

</body>
</html>