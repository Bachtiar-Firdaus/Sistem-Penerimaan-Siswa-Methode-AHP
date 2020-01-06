<?php

$databaseHost = 'localhost';
$databaseName = 'codegoo_ahp';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

$id_upload = $_POST['id_upload'];
$nama = $_POST['nama_cs'];

$nama_file   = $_FILES['fupload']['name'];
$lokasi_file = $_FILES['fupload']['tmp_name'];

$fotobaru = date('dmYHis').$nama_file;



// Baca lokasi file sementar dan nama file dari form (fupload)

// Tentukan folder untuk menyimpan file
$folder = "files/".$nama_file;
// tanggal sekarang
// $tgl_upload = date("Ymd");
// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file,$folder)){


  echo "Nama File : <b>$nama_file</b> sukses di upload";
  
  // Masukkan informasi file ke database
  $konek = mysqli_connect("localhost","root","","codegoo_ahp");

  $query = "INSERT INTO tbl_upload_cs (nama_file, nama_cs, tgl_upload)
            VALUES('$nama_file', '$nama', '$fotobaru')";
            
  mysqli_query($konek, $query);
  header("Location: http://localhost/siks_ahp/dashboard.php?page=insert/upload_berkas_calon");
die();
}
else{
  echo "File gagal di upload";
}
?>