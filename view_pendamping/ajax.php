<?php
include "config.php";
$karyawan = mysqli_fetch_array(mysqli_query($mysqli, "select * from tbl_kegiatan where id_kegiatan='$_GET[id_kegiatan]'"));
$data_karyawan = array(
	'nama_siswa'   	=>  $karyawan['nama_siswa'],
    // 'jenis_kelamin'  	=>  $karyawan['jenis_kelamin'],
    // 'address'    		=>  $karyawan['address'],
              	);
 echo json_encode($data_karyawan);

 ?>

