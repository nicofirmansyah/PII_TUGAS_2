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
<h1>Laporan Data Ujian Mahasiswa</h1>
<table>
<thead>
<tr>
<th>Kode Mata Kuliah</th>
<th>Mata Kuliah</th>
<th>Prodi/Jurusan</th>
<th>Hari Ujian</th>
<th>Jam</th>
<th>Dosen Mata Kuliah</th>
<th>Jumlah Mata Kuliah</th>
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
    </tr>
    <?php endforeach;
    } else { ?>
    <tr>
    <td colspan="9">Belum ada data pada tabel Ujian mah
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
    