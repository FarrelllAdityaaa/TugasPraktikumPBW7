<?php
include 'konekdb.php';
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$kodemk = $_POST['kodemk'];
$namamk = $_POST['namamk'];
$jumlahsks = $_POST['jumlahsks'];

$mahasiswa = "INSERT INTO mahasiswa VALUES('$npm','$nama','$jurusan','$alamat')";
$matakuliah = "INSERT INTO matakuliah VALUES('$kodemk','$namamk','$jumlahsks')";
$krs = "INSERT INTO krs VALUES(NULL,'$npm','$kodemk')";



if ($koneksi->query($mahasiswa) === TRUE && $koneksi->query($matakuliah) === TRUE && $koneksi->query($krs) === TRUE) {
    // echo "Data berhasil disimpan ke database pertama";
    $message = "Data berhasil ditambahkan";
    $message = urlencode($message);
    header("Location:index.php?message={$message}");
} else {
    // echo "Error: " . $sql1 . "<br>" . $conn1->error;
    $message = "Data gagal ditambahkan";
    $message = urlencode($message);
    header("Location:add.php?message={$message}");
}


// if ($koneksi->query($matakuliah) === TRUE) {
//     // echo "Data berhasil disimpan ke database pertama";
//     $message = "Data berhasil ditambahkan";
//     $message = urlencode($message);
//     header("Location:index.php?message={$message}");
// } else {
//     // echo "Error: " . $sql1 . "<br>" . $conn1->error;
//     $message = "Data gagal ditambahkan";
//     $message = urlencode($message);
//     header("Location:add.php?message={$message}");
// }



//  $mahasiswa = mysqli_query($kuliah, "INSERT INTO mahasiswa 
//  VALUES('$npm','$nama','$jurusan','$alamat')");
//  if ($mahasiswa) {
//     $message = "Data berhasil ditambahkan";
//     $message = urlencode($message);
//     header("Location:index.php?message={$message}");
// } else {
//     $message = "Data gagal ditambahkan";
//     $message = urlencode($message);
//     header("Location:add.php?message={$message}");
// }

// $matakuliah = mysqli_query($kuliah, "INSERT INTO matakuliah 
//  VALUES('$kodemk','$nama1','$jumlahsks')");
//  if ($matakuliah) {
//     $message = "Data berhasil ditambahkan";
//     $message = urlencode($message);
//     header("Location:index.php?message={$message}");
// } else {
//     $message = "Data gagal ditambahkan";
//     $message = urlencode($message);
//     header("Location:add.php?message={$message}");
// }