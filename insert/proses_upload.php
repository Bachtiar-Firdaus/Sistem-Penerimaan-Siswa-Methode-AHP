<?php
// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file1 = $_FILES['file_i']['tmp_name'];
$lokasi_file2 = $_FILES['file_k']['tmp_name'];
$file_i   = $_FILES['file_i']['name'];
$file_k   = $_FILES['file_k']['name'];
// Tentukan folder untuk menyimpan file
$folder = "files/$file_i,$file_k";
// tanggal sekarang
$tgl_upload = date("Ymd");
// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file1,$lokasi_file2,"$folder")){
  echo "Nama File : <b>$nama_file</b> sukses di upload";
  
  // Masukkan informasi file ke database
  $konek = mysqli_connect("localhost","root","","codegoo_ahp");

  $query = "INSERT INTO upload2 (file_ijasah, file_ktp, nama_cs)
            VALUES('$nama_file','$_POST[nama_cs]')";
            
  mysqli_query($konek, $query);
  header("Location: http://localhost/program_april/dashboard_ps_uptd.php?page=view_ps_uptd/surat_pemanggilan_datasiswa");
die();
}
else{
  echo "File gagal di upload";
}
?>