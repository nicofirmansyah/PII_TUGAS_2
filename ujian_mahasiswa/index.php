<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
    

<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<title>Data Ujian Mahasiswa</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Data Ujian Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../nilai_mahasiswa/index.php">Data Nilai Ujian Mahasiswa</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<center><h1>Data Ujian Mahasiswa</h1></center>
<br><br>
<a href="create.php" class="btn btn-primary">Tambah Data</a>
<br>
<a href="print.php" class="btn btn-success mt-3" target="_blank">Cetak Data</a>
<br>
<table class="table">
<thead>
<tr>
<th>Kode Mata Kuliah</th>
<th>Mata Kuliah</th>
<th>Prodi/Jurusan</th>
<th>Hari Ujian</th>
<th>Jam</th>
<th>Dosen Mata Kuliah</th>
<th>Jumlah Mahasiswa</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
$result = $model->tampil_data(); if (!empty($result)) {
foreach ($result as $data) : ?>
<tr>
<td><?= $data->kode_mk ?></td>
<td><?= $data->mata_kuliah ?></td>
<td><?= $data->prodi ?></td>
<td><?= $data->hari_ujian ?></td>
<td><?= $data->jam ?></td>
<td><?= $data->dosen_mk ?></td>
<td><?= $data->jumlah_mahasiswa ?></td>
<td>
<a name="edit" id="edit" href="edit.php?kode=<?= $data->kode_mk ?>">Edit</a>
<a name="hapus" id="hapus" href="proses.php?kode=<?= $data->kode_mk ?>">Delete</a>
</td>
</tr>
<?php endforeach;
} else { ?>
<tr>
<td colspan="9">Belum ada data pada tabel Ujian
mahasiswa.</td>
</tr>
 
<?php } ?>
</tbody>
</table>
</div>
</div>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>