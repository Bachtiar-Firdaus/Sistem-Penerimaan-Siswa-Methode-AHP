<?php
// Create database connection using config file
include_once("\insert\config.php");

// Fetch all tbl_cs data from database
$result = mysqli_query($mysqli, "SELECT * FROM tbl_cs ORDER BY id DESC");
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

  <select>
  <option value="volvo">Pilih Jurusan</option>
  <option value="saab">Menjahit</option>
  <option value="opel">Elektronik</option>
  <option value="audi">Motor</option>
</select>

<input type="date" name="tanggals">

<button>Tambah kegiatan siswa</button>

<h1>Data Siswa</h1> 



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
        echo "<td>".$user_data['nama']."</td>"; 
        echo "<td>".$user_data['lk']."</td>"; 
        echo "<td>".$user_data['lm']."</td>"; 
        echo "<td>".$user_data['ls']."</td>";  
        echo "<td>".$user_data['jurusan']."</td>";  
        echo "<td>".$user_data['tanggal']."</td>";  
        echo "<td><a href='/program_april/view_pendamping/edit_kk.php?id=$user_data[id]'>Edit</a></tr>";        
    }
    ?>
    
  
  </tbody>
</table><br><br>

<a href="view_pendamping\cetak_kk.php" class="btn btn-primary">Cetak</a>

</div>


