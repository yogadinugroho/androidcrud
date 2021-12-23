<?php
require_once('koneksi.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $nomor_hp = $_POST['nomor_hp'];
    $alamat = $_POST['alamat'];

    $sql = "insert into siswa (nama,kelas,jurusan,nomor_hp,alamat) values ('$nama','$kelas','$jurusan','$nomor_hp','$alamat')";

    if(mysqli_query($con, $sql)){
        echo "Data berhasil di tambahkan";
    }else{
        echo "Data gagal di tambahkan";
    }

    mysqli_close($con);
}
?>