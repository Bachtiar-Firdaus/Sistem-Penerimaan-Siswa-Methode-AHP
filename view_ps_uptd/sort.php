<?php
// Create database connection using config file
include_once("config.php");
 
    $alko = $_POST['kabupaten'];
    // $tanggal = $_POST['tanggal'];
    // echo $alko;

// Fetch all tbl_cs data from database
$result = mysqli_query($mysqli, "SELECT * FROM tbl_cs2 Where alko ='$alko'");

?>

<html>

<head>    
    <title>IDENTIFIKASI CALON SISWA</title>
</head>

<body>
    <style>

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




<div class="row">
    <p align="center">REKAPAN DATA PERHITUNGAN SISWA BERDASARKAN KABUPATEN</p>
    <p align="center">UPTD PSBR RADIN INTAN LAMPUNG</p>
    
    <img src="../img/logo.jpg" style="float: right;
    position: relative;
    left: -881px;
    top: -66px;
    width: 38px;">
    
  </div>
  <hr style="height: 3px;
    background: black;">



    <table class="tableee" border=1>
    <tr>
        <th>No</th>
        <th>Nama Peserta</th>
        <th>Kabupaten</th>
        <th>Total</th>
        <th>Tanggal</th>
    </tr>
    <?php  
    $no = "1";
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$no++."</td>";        
        echo "<td>".$user_data['nama']."</td>"; 
        echo "<td>".$user_data['alko']."</td>"; 
        echo "<td>".$user_data['tot']."</td>"; 
        echo "<td>".$user_data['tanggal']."</td>"; 
        echo "</tr>";        
    }
    ?>
    </table>
  </div>
</body>
</html>





