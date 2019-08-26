<?php
// Create database connection using config file
include_once("config.php");
 
    $alko = $_POST['kabupaten'];
    // echo $alko;

// Fetch all tbl_cs data from database
$result = mysqli_query($mysqli, "SELECT * FROM tbl_cs Where alko ='$alko'");

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

<p align="center">REKAPAN DATA PERHITUNGAN SISWA BERDASARKAN KABUPATEN</p>
<!-- <p align="center">BIMBINGAN KETERAMPILAN </p> -->
<p align="center">UPTD PSBR RADIN INTAN LAMPUNG TAHUN 2018</p>

    <table class="tableee" border=1>
    <tr>
        <th>No</th>
        <th>Nama Peserta</th>
        <th>Kabupaten</th>
        <th>Total</th>
    </tr>
    <?php  
    $no = "1";
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$no++."</td>";        
        echo "<td>".$user_data['nama']."</td>"; 
        echo "<td>".$user_data['alko']."</td>"; 
        echo "<td>".$user_data['tot']."</td>"; 
        echo "</tr>";        
    }
    ?>
    </table>
  </div>
</body>
</html>





