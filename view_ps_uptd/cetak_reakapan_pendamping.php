<?php
// Create database connection using config file
include_once("config.php");

// Fetch all tbl_cs data from database
$result = mysqli_query($mysqli, "SELECT * FROM tbl_pendamping ORDER BY id DESC");
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
  <div class="row">
    <p align="center">REKAPAN HONOR PENDAMPING</p>
    <p align="center">UPTD PSBR RADIN INTAN LAMPUNG</p>
    <p align="center">2018</p>
    <img src="../img/logo.jpg" style="float: right;
    position: relative;
        left: -764px;
    top: -99px;
    width: 38px;">
    
  </div>


<hr style="height: 3px;
    background: black;">



<table id="example2" border="1" class="table table-bordered table-hover">
	<thead>
	<tr>
		
		<th>No</th>
		<th>Nama Pendamping</th>
		<th>Jurusan</th>
		<th>Jumlah Jam</th>
		<th>Honor</th>
	</tr>
     </thead>

     <tbody>
    <?php  
    $no = "1";
    while($user_data = mysqli_fetch_array($result)) {  

    

        echo "<tr>";     
        echo "<td>".$no++."</td>";
        echo "<td>".$user_data['nama_pendamping']."</td>"; 
        echo "<td>".$user_data['jurusan']."</td>"; 
        echo "<td>".$user_data['jumlah_jam']." Jam</td>";   

        echo "<td>Rp. ".$user_data['honor']."</td></tr>";           
    }
    ?>
    </tbody>
</table><br><br>

</div>


