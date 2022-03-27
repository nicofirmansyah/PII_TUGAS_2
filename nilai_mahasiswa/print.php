<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
<title>Cetak Data</title>
<style>
h1 {
text-align: center;
}

table, td,
th {
border: 1px solid #ddd; text-align: left;
}

table {
border-collapse: collapse; width: 100%;
}

th,
td {
padding: 15px;
}
</style>
</head>

<body>
<h1>Laporan Data Nilai Ujian Mahasiswa</h1>
<table>
<thead>
<tr>
<th>NIM</th>
<th>Nama Mahasiswa</th>
<th>Jurusan/Prodi</th>
<th>Mata Kuliah</th>
<th>Nilai Mahasiswa</th>
</tr>
</thead>
<tbody>
<?php
 
 $result = $model->tampil_data(); if (!empty($result)) {
    foreach ($result as $data) : ?>
    <tr>
    <td><?= $data->nim ?></td>
    <td><?= $data->nama_mahasiswa ?></td>
    <td><?= $data->jurusan ?></td>
    <td><?= $data->mata_kuliahh   ?></td>
    <td><?= $data->nilai ?></td>
    </tr>
    <?php endforeach;
    } else { ?>
    <tr>
    <td colspan="9">Belum ada data pada tabel Nilai Ujian mah
    asiswa.</td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    <script>
    window.print();
    </script>
    </body>
    
    </html>
    