<?php
include 'connection.php'; 
class Model extends Connection
{
public function __construct()
{
    $this->conn = $this->get_connection();
}
public function insert($kode, $mk, $prodi, $hari, $jam, $dosen , $jumlah)
{
    $sql = "INSERT INTO ujian_mahasiswa (kode_mk, mata_kuliah, prodi, hari_ujian, jam, dosen_mk,jumlah_mahasiswa) VALUES ('$kode', '$mk', '$prodi', '$hari', '$jam', '$dosen' , '$jumlah')";
    $this->conn->query($sql);
}
public function tampil_data()
{
$sql = "SELECT * FROM ujian_mahasiswa";

$bind = $this->conn->query($sql); 
    while ($obj = $bind->fetch_object()) {
    $baris[] = $obj;
    }
    if (!empty($baris)) { return $baris;
    }
    }
    public function edit($id)
    {
    $sql = "SELECT * FROM ujian_mahasiswa WHERE kode_mk='$id'";
    $bind = $this->conn->query($sql); 
    while ($obj = $bind->fetch_object()) {
    $baris = $obj;
    }
    return $baris;
    }
    public function update($kode_lama,$kode, $mk, $prodi, $hari, $jam, $dosen , $jumlah)
    {




    $sql = "UPDATE ujian_mahasiswa SET kode_mk='$kode', mata_kuliah='$mk', prodi='$prodi', hari_ujian='$hari', jam='$jam', dosen_mk='$dosen', jumlah_mahasiswa='$jumlah'  WHERE kode_mk='$kode_lama'";
    $this->conn->query($sql);
    }
    public function delete($kode)
    {
   
    $sql = "DELETE FROM ujian_mahasiswa WHERE kode_mk='$kode'";
    $this->conn->query($sql);
    }
    }
    