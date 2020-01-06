<?php 

include 'config.php';

$id_upload = $_GET['id_upload'];

// Ambil Data yang Dikirim dari Form
$nama = $_POST['nama_cs'];

// Cek apakah user ingin mengubah fotonya atau tidak
if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
  // Ambil data foto yang dipilih dari form
  $fupload = $_FILES['fupload']['name'];
  $tmp = $_FILES['fupload']['tmp_name'];
  
  // Rename nama fotonya dengan menambahkan tanggal dan jam upload
  $fotobaru = date('dmYHis').$fupload;
  
  // Set path folder tempat menyimpan fotonya
  $path = "files/".$fotobaru;

  // Proses upload
  if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
    // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
    $query = "SELECT * FROM tbl_upload_cs WHERE id_upload='".$id_upload."'";
    $sql = mysqli_query($mysqli, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

    // Cek apakah file foto sebelumnya ada di folder images
    if(is_file("files/".$data['fupload'])) // Jika fupload ada
      unlink("files/".$data['fupload']); // Hapus file foto sebelumnya yang ada di folder images
    
    // Proses ubah data ke Database
    $query = "UPDATE tbl_upload_cs SET nama_cs='".$nama."', nama_file='".$fotobaru."' WHERE id_upload='".$id_upload."'";
    $sql = mysqli_query($mysqli, $query); // Eksekusi/ Jalankan query dari variabel $query

    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
 // Eksekusi/ Jalankan query dari variabel $query
      
      header("location: http://localhost/siks_ahp/dashboard.php?page=insert/upload_berkas_calon"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
      header("location: http://localhost/siks_ahp/dashboard.php?page=insert/upload_berkas_calon");
    }
  }else{
    // Jika gambar gagal diupload, Lakukan :
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
    header("location: http://localhost/siks_ahp/dashboard.php?page=insert/upload_berkas_calon");
  }
}

?>

