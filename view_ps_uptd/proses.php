<?php
// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];
// Tentukan folder untuk menyimpan file
$folder = "files/$nama_file";
// tanggal sekarang
$tgl_upload = date("Ymd");
// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file,"$folder")){
  echo "Nama File : <b>$nama_file</b> sukses di upload";
  
  // Masukkan informasi file ke database
  $konek = mysqli_connect("localhost","root","","codegoo_ahp");

  $query = "INSERT INTO upload (nama_file, deskripsi, tgl_upload)
            VALUES('$nama_file', '$_POST[deskripsi]', '$tgl_upload')";
            
  mysqli_query($konek, $query);
  header("Location: http://localhost/siks_ahp/dashboard_ps_uptd.php?page=view_ps_uptd/surat_pemanggilan_datasiswa");
die();
}
else{
  echo "File gagal di upload";
}
?>