<?php
include_once '../../sistem/koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$email = $_POST['email'];
$telp = $_POST['telp'];
$password = md5($_POST['password']);
$cabang=$_POST['cabang'];
$level = 'Pegawai';
$username=$_POST['username'];
$query = mysqli_query($koneksi, "INSERT INTO admin (id_admin, nama, jenis_kelamin, email, telp, password, level,id_cabang,username) VALUES ('$id', '$nama', '$jenis_kelamin', '$email', '$telp', '$password', '$level','$cabang','$username')");
if ($query) {
    $_SESSION['pesan'] = [
        'status' => 'success',
        'msg' => 'Pegawai Berhasil ditambahkan'
    ];
    header('location: ../index.php?page=pegawai');
} else {
    $_SESSION['pesan'] = [
        'status' => 'error',
        'msg' => 'Pegawai Gagal ditambahkan'
    ];
    header('location: ../index.php?page=pegawai');
}
