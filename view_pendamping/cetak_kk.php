<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php
// Create database connection using config file
include_once("config.php");

// Fetch all tbl_cs data from database
$result = mysqli_query($mysqli, "SELECT * FROM tbl_kegiatan ORDER BY id_kegiatan DESC");
?>
<style type="text/css">

  table, tr,td,th{
    border :1px solid black;
    padding: 10px;
    border-collapse: collapse;

  }
  
  .containeredit{
    padding: 10px;
    text-align: -webkit-center;
  }
  .modal-dialog{
    width:90%;
  }
</style>

<div class="container" style="margin-top: 30px;" class="text-center">


       

<p align="center">LAPORAN PETUGAS PENDAMPING JURUSAN</p>
<p align="center">BIMBINGAN KETERAMPILAN SEMUA JURUSAN </p>
<p align="center">UPTD PSBR RADIN INTAN LAMPUNG TAHUN 2018</p>






<table style="margin: auto;">
  <thead>
  <tr>
    
    <th rowspan="2">No</th>
    <th rowspan="2">Nama</th>
    <th rowspan="2">Laporan Keterampilan</th>
    <th rowspan="2">Laporan Mental</th>
    <th rowspan="2">Laporan Sosial</th>
    <th rowspan="2">Jurusan</th>
    <th rowspan="2">Tanggal</th>

  </tr>
  </thead>
  <tbody>
  <tr>
    <?php  
    $no = "1";
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";     
        echo "<td>".$no++."</td>";
        echo "<td>".$user_data['nama_siswa']."</td>"; 
        echo "<td>".$user_data['k_keterampilan']."</td>"; 
        echo "<td>".$user_data['k_mental']."</td>"; 
        echo "<td>".$user_data['k_sosial']."</td>";        
        echo "<td>".$user_data['jurusan']."</td>";        
        echo "<td>".$user_data['tanggal']."</td></tr>"; 
    }
    ?>
    
  </tr>
  </tbody>
</table>

<br><br>


</div>


