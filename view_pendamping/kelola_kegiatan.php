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

<div class="containeredit">

  <h2>Data Kegiatan Siswa</h2> <hr>

  <form method="post" action="view_pendamping/data_sortir.php">

  <select name="jurusan">
  <option value="">Pilih Jurusan</option>
  <option value="menjahit">Menjahit</option>
  <option value="elektronik">Elektronik</option>
  <option value="motor">Motor</option>
</select>

<input type="date" name="tanggal">

<tr>
                <td><input class="btn btn-primary" type="submit" name="search" value="Sortir data"></td>
            </tr>

</form><br>

<a class="btn btn-primary" href="http://localhost/program_april/dashboard_pendamping.php?page=view_pendamping/tambah_kegiatan">Tambah Kegiatan</a><br>





<br>



<table id="example2" border="1" class="table table-bordered table-hover">
  <thead>
  <tr>
    
    <th>No</th>
    <th>Nama</th>
    <th>Kegiatan Keterampilan</th>
    <th>Kegiatan Mental</th>
    <th>Kegiatan Sosial</th>
    <th>Jurusan</th>
    <th>Tanggal</th>
    <th>Aksi</th>

  </tr>
  </thead>

  <tbody>
  
    <?php  
    $no = "1";
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";     
        echo "<td>".$no++."</td>";
        // echo "<td>".$user_data['id_kegiatan']."</td>"; 
        echo "<td>".$user_data['nama_siswa']."</td>"; 
        echo "<td>".$user_data['k_mental']."</td>"; 
        echo "<td>".$user_data['k_sosial']."</td>";  
        echo "<td>".$user_data['k_keterampilan']."</td>";  
        echo "<td>".$user_data['jurusan']."</td>";  
        echo "<td>".$user_data['tanggal']."</td>";  
        echo "<td><a href='/program_april/view_pendamping/delete_kegiatan.php?id_kegiatan=$user_data[id_kegiatan]'>Delete</a> || <a href='/program_april/view_pendamping/edit_kk.php?id_kegiatan=$user_data[id_kegiatan]'>Edit</a></td></tr>";      
    }
    ?>
    
  
  </tbody>
</table><br><br>

<a href="view_pendamping\cetak_kk.php" class="btn btn-primary">Cetak</a>

</div>


