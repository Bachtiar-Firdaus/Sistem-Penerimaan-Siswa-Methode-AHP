<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_kegiatan = $_POST['id_kegiatan'];
    // $nik = $_POST['nik'];

    $nama_siswa = $_POST['nama_siswa'];
    $nama_pendamping = $_POST['nama_pendamping'];
    $k_mental = $_POST['k_mental'];
    $k_sosial = $_POST['k_sosial'];
    $k_keterampilan = $_POST['k_keterampilan'];
    $jurusan = $_POST['jurusan'];
    $tanggall = $_POST['tanggall'];


    // update user data
    $result = mysqli_query($mysqli, "UPDATE tbl_kegiatan SET  nama_siswa ='$nama_siswa',nama_pendamping ='$nama_pendamping', k_mental = '$k_mental', k_sosial = '$k_sosial', k_keterampilan = '$k_keterampilan', jurusan = '$jurusan',tanggall = '$tanggall' WHERE id_kegiatan=$id_kegiatan");

    // Redirect to homepage to display updated user in list
    header("Location:http://localhost/siks_ahp/dashboard_pendamping.php?page=view_pendamping/kelola_kegiatan");
}
?>