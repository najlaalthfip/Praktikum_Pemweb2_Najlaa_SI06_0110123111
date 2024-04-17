<?php 
//Panggil file
require 'dbkoneksi.php';

//Tangkep data dari form
$_kode = $_POST['kode'];
$_nama = $_POST['nama'];
$_tmp_lahir = $_POST['tmp_lahir'];
$_tgl_lahir = $_POST['tgl_lahir'];
$_gender = $_POST['gender'];
$_email = $_POST['email'];
$_alamat = $_POST['alamat'];
$_kelurahan_id = $_POST['kelurahan_id'];
//Simpan data ke array
$data = [$_kode, $_nama, $_tmp_lahir, $_tgl_lahir, $_gender, $_email, $_alamat, $_kelurahan_id];
//Query SQL
$sql = "INSERT INTO pasien (kode, nama, tmp_lahir, tgl_lahir, gender, email, alamat, kelurahan_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
//Siapin statement
$stmt = $dbh->prepare($sql);
//Jalanin statement
$stmt->execute($data);
//Pindahin halaman ke data pasien
header('Location: data_pasien.php');
?>