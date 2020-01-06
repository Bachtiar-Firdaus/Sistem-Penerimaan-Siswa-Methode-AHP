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

<div class="containeredit">


<div class="row">
    <p align="center">LAPORAN KEGIATAN SISWA-SISWI</p>
    <p align="center">UPTD PSBR RADIN INTAN LAMPUNG</p>

    <img src="../img/logo.jpg" style="float: right;
    position: relative;
    left: -806px;
    top: -66px;
    width: 38px;">
    
  </div>

  <hr style="height: 3px;
    background: black;">



<table id="example2" border="1" class="table table-bordered table-hover">
  <thead>
  <tr>
    
    <th>No</th>
    <th>Nama</th>
    <th>Bimbingan Keterampilan</th>
    <th>Bimbingan Mental</th>
    <th>Bimbingan Sosial dan Fisik</th>
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
        // echo "<td><a href='/siks_ahp/view_pendamping/edit_kk.php?id=$user_data[id]'>Edit</a></tr>";        
    }
    ?>
    
  
  </tbody>
</table><br><br><br><br>

</div>


