<link href="assetss/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assetss/datatables/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="assetss/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">



<?php
// Create database connection using config file
include_once("\insert\config.php");

// Fetch all tbl_cs data from database
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

<div class="containeredit">

<h3>Laporan Kegiatan Data Siswa</h3><hr><br>

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
  <option value="Servis Elektronik">Servis Elektronik</option>
  <option value="Servis Motor">Servis Motor</option>
  <option value="Tata Rias">Tata Rias</option>
</select>

<input type="date" name="tanggall">

<tr>
                <td><input class="btn btn-primary" type="submit" name="search" value="Sortir"></td>
            </tr>

</form><br>

<form action="view_kadis_sos_prov/cetak_seluruh_kegiatan.php" method="post">
<table id="example2" border="1" class="table table-bordered table-hover">
  <thead>
  <tr>
    
    <th>No</th>
    <th>Nama</th>
    <th>Nama pendamping</th>
    <th>Kegiatan Keterampilan</th>
    <th>Kegiatan Mental</th>
    <th>Kegiatan Sosial</th>
    <th>Jurusan</th>
    <th>Tanggal</th>

  </tr>
  </thead>
  <tbody>
  
    <?php  
    // Create database connection using config file
include_once("\insert\config.php");

// Fetch all tbl_cs data from database
$result = mysqli_query($mysqli, "SELECT * FROM tbl_kegiatan ORDER BY id_kegiatan DESC");
    $no = "1";
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";     
        echo "<td>".$no++."</td>";
        // echo "<td>".$user_data['id_kegiatan']."</td>"; 
        echo "<td>".$user_data['nama_siswa']."</td>"; 
        echo "<td>".$user_data['nama_pendamping']."</td>"; 
        echo "<td>".$user_data['k_mental']."</td>"; 
        echo "<td>".$user_data['k_sosial']."</td>";  
        echo "<td>".$user_data['k_keterampilan']."</td>";  
        echo "<td>".$user_data['jurusann']."</td>";  
        echo "<td>".$user_data['tanggall']."</td>";  
        // echo "<td><a href='/siks_ahp/view_pendamping/delete_kegiatan.php?id_kegiatan=$user_data[id_kegiatan]'>Delete</a></td></tr>";      
    }
    ?>
    
  
  </tbody>

</table>
<!-- <button class="btn btn-primary" type="submit">Cetak</button> -->
</form>

<br><br>

<form method="post" action="view_pendamping/cetak_kk.php"> 
 
<select name="tanggall">
  <option value="">Pilih Tahun</option>
  <option value="2021">2021</option>
  <option value="2020">2020</option>
  <option value="2019">2019</option>
  <option value="2018">2018</option>
  <option value="2017">2017</option>
  <option value="2016">2016</option>
  <option value="2016">2015</option>
  <option value="2015">2014</option>
</select>

<input class="btn btn-primary" type="submit" name="cetak" value="Cetak">


</form>

<!-- <a href="view_pendamping\cetak_kk.php" class="btn btn-primary">Cetak</a> -->

</div>


