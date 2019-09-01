<?php
// Create database connection using config file
include_once("config.php");

// Fetch all tbl_cs data from database
$result = mysqli_query($mysqli, "SELECT * FROM tbl_cs ORDER BY id DESC");
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

<h3>Rekap Data Penerimaan Siswa</h3><br>



<table id="example2" border="1" class="table table-bordered table-hover">
	<thead>
	<tr>
		
		<th>No</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Pendidikan Terakhir</th>

		<th>Desa</th>
		<th>Kecamatan </th>
		<th>Kabupaten</th>
		<th>No KK</th>
		<!-- <th>NIK</th> -->
		<th>Jurusan</th>
		<th>Asrama</th>
    <th>Keterangan</th>
    <th>Tanggal</th>
	</tr>
     </thead>

     <tbody>
    <?php  
    $no = "1";
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";     
        echo "<td>".$no++."</td>";
        echo "<td>".$user_data['nama']."</td>"; 
        echo "<td>".$user_data['jk']."</td>"; 
        echo "<td>".$user_data['pt']."</td>";   

        echo "<td>".$user_data['ald']."</td>";          
        echo "<td>".$user_data['alk']."</td>";          
        echo "<td>".$user_data['alko']."</td>";          
        echo "<td>".$user_data['nokk']."</td>";          
        // echo "<td>".$user_data['nik']."</td>";          
        echo "<td>".$user_data['jurusan']."</td>";          
        echo "<td>".$user_data['asrama']."</td>";           
        echo "<td>".$user_data['keterangan']."</td>";           
        echo "<td>".$user_data['tanggal']."</td>";           
    }
    ?>
    </tbody>
</table><br><br>

</div>


