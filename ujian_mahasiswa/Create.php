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
<label>Kode Mata Kuliah</label>
<br>
<input type="number" name="kode">
<br>
<label>Mata Kuliah</label>
<br>
<input type="text" name="mk">
<br>
<label>Prodi</label>
<br>
<input type="text" name="prodi">
<br>
<label>Hari Ujian</label>
<br>
<input type="text" name="hari">
<br>
<label>Jam</label>
<br>
<input type="text" name="jam">
<br>
<label>Dosen Mata Kuliah</label>
<br>
<input type="text" name="dosen">
<br>
<label>Jumlah Mahasiswa</label>
<br>
<input type="number" name="jumlah">
<br>
<br><br>
<button type="submit" name="submit_simpan">Submit</button>
<button type="reset">Reset</button>
</form>
</body>

</html>