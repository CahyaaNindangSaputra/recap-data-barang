<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alat Foto</title>
</head>
<body>
    <h2>Sewa rental alat foto </h2>
<form method="post" action="proses.php">

<label> No pelanggan : </label>
<input type="text" name="rental" >

<br><br>
<label> Nama Pelanggan : </label>
<input type="text" name="nama">
<br><br>

<label> Berapa hari :</label>
<input type="number" name="hari">

<br><br>

<label> Pilihan Kondisi : </label><br>
<input type="radio" name="kondisi" value="bagus">Bagus <br>
<input type="radio" name="kondisi" value="lumayan">lumayan<br>
<input type="radio" name="kondisi" value="jelek">jelek<br>

<input type="submit" name="submit" value="submit">

</form>
<form action="logout.php" method="POST">
<button type="submit"><a href='indexlogin.php'>Logout</a></button>
</body>
</html>