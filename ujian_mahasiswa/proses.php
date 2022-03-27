<?php
include 'model.php';
if (isset($_POST['submit_simpan'])) {
$kode = $_POST['kode'];
$mk = $_POST['mk'];
$prodi = $_POST['prodi'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$dosen = $_POST['dosen'];
$jumlah = $_POST['jumlah'];
$model = new Model();
$model->insert($kode, $mk, $prodi, $hari, $jam, $dosen , $jumlah ); header('location:index.php');
}
if (isset($_POST['submit_edit'])) {
   
    $kode = $_POST['kode'];
    $kode_lama = $_POST['kode_lama'];
    $mk = $_POST['mk'];
    $prodi = $_POST['prodi'];
    $hari = $_POST['hari'];
    $jam = $_POST['jam'];
    $dosen = $_POST['dosen'];
    $jumlah = $_POST['jumlah'];

    $model = new Model();
    $model->update($kode_lama,$kode, $mk, $prodi, $hari, $jam, $dosen , $jumlah); header('location:index.php');
    }
    if (isset($_GET['kode'])) {
    $id = $_GET['kode'];
    $model = new Model();
    $model->delete($id); header('location:index.php');
    }