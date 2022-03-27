<?php
$id = $_GET['kode']; include 'model.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="eng">

<head>
<title>Edit Nilai Ujian Mahasiswa</title>
</head>

<body>
<h1>Edit Ujian Mahasiswa</h1>
<a href="index.php">Kembali</a>
<br><br>
<form action="proses.php" method="post">
<label>NIM</label>
<br>
<input type="hidden" name="nim_lama" value="<?php echo $data->nim ?>">
<input type="number" name="nim" value="<?php echo $data->nim ?>">
<br>
<label>Nama Mahasiswa</label>
<br>
<input type="text" name="nama" value="<?php echo $data->nama_mahasiswa?>">
<br>
<label>Jurusan/Prodi</label>
<br>
<input type="text" name="jurusan" value="<?php echo $data->jurusan ?>">
<br>
<label>Mata Kuliah</label>
<br>
<input type="text" name="mk" value="<?php echo $data->mata_kuliahh ?>">
<br>
<label>Nilai Mahasiswa</label>
<br>
<input type="text" name="nilai" value="<?php echo $data->nilai ?>">
<br><br>
<button type="submit" name="submit_edit">Submit</button>
</form>
</body>

</html>