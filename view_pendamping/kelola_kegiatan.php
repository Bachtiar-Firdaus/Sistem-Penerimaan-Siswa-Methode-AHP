
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

<h1>Data Siswa</h1><br>



<table border="1">
  <tr>
    
    <th rowspan="2">No</th>
    <th rowspan="2">Nama</th>
    <th rowspan="2">Laporan Keterampilan</th>
    <th rowspan="2">Laporan Mental</th>
    <th rowspan="2">Laporan Sosial</th>
    <th rowspan="2">AKSI</th>

  </tr>
  <tr>
    <?php  
    $no = "1";
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";     
        echo "<td>".$no++."</td>";
        echo "<td>".$user_data['nama']."</td>"; 
        echo "<td>".$user_data['lk']."</td>"; 
        echo "<td>".$user_data['lm']."</td>"; 
        echo "<td>".$user_data['ls']."</td>";  
        echo "<td><a href='/program_april/view_pendamping/edit_kk.php?id=$user_data[id]'>Edit</a></tr>";        
    }
    ?>
    
  </tr>
</table><br><br>

<a href="view_pendamping\cetak_kk.php" class="btn btn-primary">Cetak</a>

</div>


