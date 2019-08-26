
<?php
// Create database connection using config file
include_once("config.php");

// Fetch all tbl_cs data from database
$result = mysqli_query($mysqli, "SELECT * FROM tbl_cs ORDER BY id DESC");
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

<div class="containeredit">


       

<p align="center">LAPORAN PETUGAS PENDAMPING JURUSAN</p>
<p align="center">BIMBINGAN KETERAMPILAN </p>
<p align="center">UPTD PSBR RADIN INTAN LAMPUNG TAHUN 2018</p>






<table>
  <thead>
  <tr>
    
    <th rowspan="2">No</th>
    <th rowspan="2">Nama</th>
    <th rowspan="2">Bulan</th>
    <th rowspan="2">Laporan Keterampilan</th>
    <th rowspan="2">Laporan Mental</th>
    <th rowspan="2">Laporan Sosial</th>
    <th rowspan="2">Jurusan</th>

  </tr>
  </thead>
  <tbody>
  <tr>
    <?php  
    $no = "1";
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";     
        echo "<td>".$no++."</td>";
        echo "<td>".$user_data['nama']."</td>"; 
        echo "<td>".$user_data['tanggal']."</td>"; 
        echo "<td>".$user_data['lk']."</td>"; 
        echo "<td>".$user_data['lm']."</td>"; 
        echo "<td>".$user_data['ls']."</td>";        
        echo "<td>".$user_data['jurusan']."</td></tr>";        
    }
    ?>
    
  </tr>
  </tbody>
</table>

<br><br>


</div>


