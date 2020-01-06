<?php
include_once("\insert\config.php");
$result = mysqli_query($mysqli, "SELECT * FROM tbl_kegiatan ORDER BY id_kegiatan DESC");
?>


<style type="text/css">
  tr, td,th{
    padding: 10px;
  }
  .containeredit{
    padding: 20px;
  }
  .modal-dialog{
    width:90%;
  }
</style>



<div class="containeredit" style="overflow: scroll;">

  <h2>Data Kegiatan Siswa</h2> <hr>

  <form method="post" action="view_pendamping/data_sortir.php">

<!-- <select name="nama_siswa">
  <option value="">Pilih nama</option>

  <?php

  include_once("\insert\config.php");
$result = mysqli_query($mysqli, "SELECT * FROM tbl_kegiatan ORDER BY id_kegiatan DESC"); 




             while($user_data = mysqli_fetch_array($result)) {  ?>

    <option value="<?php  echo $user_data['nama_siswa'];?>"><?php  echo $user_data['nama_siswa'];?></option>

  <?php     
    }
  ?>
</select> -->

  <select name="jurusann">
  <option value="">Pilih Jurusan</option>
  <option value="Menjahit">Menjahit</option>
  <option value="Service Elektronik">Servis Elektronik</option>
  <option value="Servis Motor">Servis Motor</option>
  <option value="Tata Rias">Tata Rias</option>
</select>

<input type="date" name="tanggall">

<tr>
  <td>
    <input class="btn btn-primary" type="submit" name="search" value="Sortir data">
  </td>
</tr>

</form><br>

<a class="btn btn-primary" href="http://localhost/siks_ahp/dashboard_pendamping.php?page=view_pendamping/tambah_kegiatan">Tambah Kegiatan</a><br>





<br>



<table id="example2" border="1" class="table table-bordered table-hover" >
  <thead>
  <tr>
    
    <th>No</th>
    <th>ID</th>
    <th>Nomor Induk</th>
    <th>Nama</th>
    <th>Nama Pendamping</th>
    <th>Bimbingan Keterampilan</th>
    <th>Bimbingan Mental </th>
    <th>Bimbingan Sosial dan Fisik</th>
    <th>Jurusan</th>
    <th>Tanggal</th>
    <!-- <th>Aksi</th> -->

  </tr>
  </thead>

  <tbody>
  
    <?php  
    include_once("\insert\config.php");
// $result = mysqli_query($mysqli, "SELECT * FROM tbl_kegiatan ORDER BY id_kegiatan DESC"); 

$result = mysqli_query($mysqli,"SELECT tbl_cs2.nik, tbl_kegiatan.id_kegiatan,tbl_kegiatan.nikk, tbl_kegiatan.nama_siswa,tbl_kegiatan.nama_pendamping,tbl_kegiatan.k_mental,tbl_kegiatan.k_sosial,tbl_kegiatan.k_keterampilan,tbl_kegiatan.jurusann,tbl_kegiatan.tanggall
FROM tbl_cs2
INNER JOIN tbl_kegiatan
ON tbl_cs2.id=tbl_kegiatan.id_kegiatan");

    $no = "1";
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";     
        echo "<td>".$no++."</td>";
        echo "<td> 00".$user_data['id_kegiatan']."</td>"; 
        echo "<td> 00".$user_data['nikk']."</td>";
        echo "<td>".$user_data['nama_siswa']."</td>"; 
        echo "<td>".$user_data['nama_pendamping']."</td>"; 
        echo "<td>".$user_data['k_mental']."</td>"; 
        echo "<td>".$user_data['k_sosial']."</td>";  
        echo "<td>".$user_data['k_keterampilan']."</td>";  
        echo "<td>".$user_data['jurusann']."</td>";  
        echo "<td>".$user_data['tanggall']."</td></tr>";  
        // echo "<td><a href='/siks_ahp/view_pendamping/edit_kk.php?id_kegiatan=$user_data[id_kegiatan]'>Edit</a>||<a href='/siks_ahp/view_pendamping/delete_kegiatan.php?id_kegiatan=$user_data[id_kegiatan]'>Delete</a></td></tr>";      
    }
    ?>
    
  
  </tbody>
</table><br><br>

<form action="view_pendamping/cetak_kk.php" method="post">

  <select name="tanggall">
  <option value="">Pilih Tahun</option>
  <option value="2019">2021</option>
  <option value="2019">2020</option>
  <option value="2019">2019</option>
  <option value="2018">2018</option>
  <option value="2017">2017</option>
  <option value="2016">2016</option>
  <option value="2016">2015</option>
  <option value="2016">2014</option>
</select>

  <input class="btn btn-primary" type="submit" name="cetak" value="Cetak">
  

</form>

<!-- <a href="view_pendamping\cetak_kk.php" class="btn btn-primary">Cetak</a> -->

</div>


