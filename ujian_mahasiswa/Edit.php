<?php
$id = $_GET['kode']; include 'model.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="en">

<head>
<title>Edit Ujian Mahasiswa</title>
</head>

<body>
<h1>Edit Ujian Mahasiswa</h1>
<a href="index.php">Kembali</a>
<br><br>
<form action="proses.php" method="post">
<label>Kode Mata Kuliah</label>
<br>
<input type="number" name="kode" value="<?php echo $data->kode_mk ?>">
<input type="hidden" name="kode_lama" value="<?php echo $data->kode_mk ?>">
<br>
<label>Mata Kuliah</label>
<br>
<input type="text" name="mk" value="<?php echo $data->mata_kuliah ?>">
<br>
<label>Prodi</label>
<br>
<input type="text" name="prodi" value="<?php echo $data->prodi ?>">
<br>
<label>Hari</label>
<br>
<input type="text" name="hari" value="<?php echo $data->hari_ujian ?>">
<br>
<label>Jam</label>
<br>
<input type="text" name="jam" value="<?php echo $data->jam ?>">
<br>
<label>Dosen Mata Kuliah</label>
<br>
<input type="text" name="dosen" value="<?php echo $data->dosen_mk?>">
<br>
<label>Jumlah Mahasiswa</label>
<br>
<input type="text" name="jumlah" value="<?php echo $data->jumlah_mahasiswa ?>">
<br>
<br><br>
<button type="submit" name="submit_edit">Submit</button>
</form>
</body>

</html>