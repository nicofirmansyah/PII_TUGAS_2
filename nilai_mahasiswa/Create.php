<!doctype html>
<html lang="en">

<head>
<title>Tambah Data</title>
</head>
 
<body>
<h1>Tambah</h1>
<a href="index.php">Kembali</a>
<br><br>
<form action="proses.php" method="post">
<label>NIM</label>
<br>
<input type="number" name="nim">
<br>
<label>Nama Mahasiswa</label>
<br>
<input type="text" name="nama">
<br>
<label>Jurusan/Prodi</label>
<br>
<input type="text" name="jurusan">
<br>
<label>Mata Kuliah</label>
<br>
<input type="text" name="mk">
<br>
<label>Nilai Ujian</label>
<br>
<input type="number" name="nilai">
<br>
<br><br>
<button type="submit" name="submit_simpan">Submit</button>
<button type="reset">Reset</button>
</form>
</body>

</html>