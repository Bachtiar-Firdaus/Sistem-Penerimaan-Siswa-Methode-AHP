sd

<?php
// Load file koneksi.php
$databaseHost = 'localhost';
$databaseName = 'codegoo_ahp';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
// Ambil data NIS yang dikirim oleh index.php melalui URL
$id_upload = $_GET['id_upload'];

// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
$query = "SELECT * FROM tbl_upload_cs WHERE id_upload='$id_upload'";
$sql = mysqli_query($mysqli, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

// Cek apakah file fotonya ada di folder images
if(is_file("files/".$data['nama_file'])) // Jika foto ada
	unlink("files/".$data['nama_file']); // Hapus foto yang telah diupload dari folder images

// Query untuk menghapus data siswa berdasarkan NIS yang dikirim
$query2 = "DELETE FROM tbl_upload_cs WHERE id_upload='$id_upload'";
$sql2 = mysqli_query($mysqli, $query2); // Eksekusi/Jalankan query dari variabel $query

if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	header("location: http://localhost/siks_ahp/dashboard.php?page=insert/upload_berkas_calon"); // Redirect ke halaman index.php
}else{
	// Jika Gagal, Lakukan :
	echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>
