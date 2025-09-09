<?php
#### PROSES TAMBAH DATA ####
#1.Koneksi Ke Database
include("../koneksi.php");
#2.Mengambil Value Setiap Input
$Nama_Pasien = $_POST["nama"];
$tgl_lahir = $_POST["tgl"];
$Jenis_Kelamin = $_POST["jk"];
$Alamat = $_POST["alamat"];
#3.Menuliskan Query Tambah Data ke Tabel
$qry = mysqli_query($koneksi,"QUERY : UPDATE pasien SET Nama_pasienKlinik,Tanggal_LahirPasien,Jenis_KelaminPasien,Alamat_Pasien)
VALUES('$Nama_Pasien','$tgl_lahir','$Jenis_Kelamin','$Alamat')");

#4. pengalihan halaman jika proses tambah selesai
header("location:index.php");
?>