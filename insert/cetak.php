<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 -->
<?php
// Create database connection using config file
include_once("config.php");

// Fetch all tbl_cs data from database
$result = mysqli_query($mysqli, "SELECT * FROM tbl_cs2 ORDER BY id DESC");
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


       

<div class="row">
    <p align="center">NAMA CALON SISWA</p>
    <p align="center">UPTD PSBR RADIN INTAN LAMPUNG</p>

    <img src="../img/logo.jpg" style="float: right;
    position: relative;
    left: -806px;
    top: -66px;
    width: 38px;">
    
  </div>

  <hr style="height: 3px;
    background: black;">






<table style="margin: auto;">
  <thead>
  <tr>
    
    <th rowspan="2">No</th>
    <th rowspan="2">ID</th>
    <th rowspan="2">Nama</th>
    <th rowspan="2">Alamat</th>
    <!-- <th rowspan="2">Tempat lahir</th> -->
    <th rowspan="2">Agama</th>
    <th rowspan="2">Pendidikan Terakhir</th>
    <!-- <th rowspan="2">Tanggal</th> -->

  </tr>
  </thead>
  <tbody>
  <tr>
    <?php  
    $no = "1";
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";     
        echo "<td>".$no++."</td>";
        echo "<td>".$user_data['id']."</td>"; 
        echo "<td>".$user_data['nama']."</td>"; 
        echo "<td>".$user_data['ald'].",".$user_data['alk'].",".$user_data['alko']."</td>"; 
        echo "<td>".$user_data['agama']."</td>";        
        echo "<td>".$user_data['pt']."</td>";        
        // echo "<td>".$user_data['tanggal']."</td></tr>"; 
    }
    ?>
    
  </tr>
  </tbody>
</table>

<br><br>


</div>


