<?php
include 'connection.php'; 
class Model extends Connection
{
public function __construct()
{
    $this->conn = $this->get_connection();
}
public function insert($nim, $nama, $jurusan, $mk, $nilai)
{
    
    $sql = "INSERT INTO `nilai_ujian`(`nim`, `nama_mahasiswa`, `jurusan`, `mata_kuliahh`, `nilai`) VALUES ('$nim', '$nama', '$jurusan', '$mk', '$nilai')";
    $this->conn->query($sql);
}
public function tampil_data()
{
$sql = "SELECT * FROM nilai_ujian";

$bind = $this->conn->query($sql); 
    while ($obj = $bind->fetch_object()) {
    $baris[] = $obj;
    }
    if (!empty($baris)) { return $baris;
    }
    }
    public function edit($id)
    {
    $sql = "SELECT * FROM nilai_ujian WHERE nim='$id'";
    $bind = $this->conn->query($sql); 
    while ($obj = $bind->fetch_object()) {
    $baris = $obj;
    }
    return $baris;
    }
    public function update($nim_lama, $nim, $nama, $jurusan, $mk, $nilai)
    {
    $sql = "UPDATE nilai_ujian SET nim='$nim', nama_mahasiswa='$nama', jurusan='$jurusan', mata_kuliahh='$mk', nilai='$nilai'
     WHERE nim='$nim_lama'";
    $this->conn->query($sql);
    }
    public function delete($nim)
    {
   
    $sql = "DELETE FROM nilai_ujian WHERE nim='$nim'";
    $this->conn->query($sql);
    }
    }
    