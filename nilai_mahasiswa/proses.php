<?php
include 'model.php';
if (isset($_POST['submit_simpan'])) {
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$mk = $_POST['mk'];
$nilai = $_POST['nilai'];
$model = new Model();
$model->insert($nim, $nama, $jurusan, $mk, $nilai); header('location:index.php');
}
if (isset($_POST['submit_edit'])) {
   
    $nim = $_POST['nim'];
    $nim_lama = $_POST['nim_lama'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $mk = $_POST['mk'];
    $nilai = $_POST['nilai'];
    $model = new Model();
    $model->update($nim_lama, $nim, $nama, $jurusan, $mk, $nilai); header('location:index.php');
    }
    if (isset($_GET['kode'])) {
    $id = $_GET['kode'];
    $model = new Model();
    $model->delete($id); header('location:index.php');
    }