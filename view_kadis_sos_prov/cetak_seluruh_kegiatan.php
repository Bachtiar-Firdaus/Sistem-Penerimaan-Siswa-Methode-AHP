<?php
// Create database connection using config file
include_once("config.php");

// Fetch all tbl_cs data from database
$result = mysqli_query($mysqli, "SELECT * FROM tbl_kegiatan ORDER BY id_kegiatan DESC");
?>
<style type="text/css">
	table, td, th {  
  border: 1px solid black;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
  overflow: scroll;
}

.containeredit{
    padding: 10px;
    text-align: -webkit-center;
  }

th, td {
  padding: 7px;
}
</style>

<div class="containeredit">

<h3>Rekap Data Seluruh Kegiatan Siswa</h3><br>



<table id="example2" border="1" class="table table-bordered table-hover">
  <thead>
  <tr>
    
    <th>No</th>
    <th>Nama</th>
    <th>Laporan Kegiatan Mental</th>
    <th>Laporan Kegiatan Sosial</th>
    <th>Laporan Kegiatan Keterampilan</th>
    <th>Jurusan</th>
    <th>Tanggal</th>

  </tr>
  </thead>

  <tbody>

    <?php  
    $no = "1";
    while($row = mysqli_fetch_array($result)) {         
        echo "<tr>";     
        echo "<td>".$no++."</td>";
        // echo "<td>".$user_data['id_kegiatan']."</td>"; 
        echo "<td>".$row['nama_siswa']."</td>"; 
        echo "<td>".$row['k_mental']."</td>"; 
        echo "<td>".$row['k_sosial']."</td>"; 
        echo "<td>".$row['k_keterampilan']."</td>"; 
        echo "<td>".$row['jurusan']."</td>";  
        echo "<td>".$row['tanggal']."</td></tr>";  
        // echo "<td><a href='/program_april/view_pendamping/edit_kk.php?id=$user_data[id]'>Edit</a></tr>";        
    }
    ?>
    
  
  </tbody>
</table><br><br><br><br>

</div>


