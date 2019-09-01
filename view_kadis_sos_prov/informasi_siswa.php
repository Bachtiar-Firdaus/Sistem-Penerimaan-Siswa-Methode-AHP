<link href="assetss/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assetss/datatables/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="assetss/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">


<?php
// Create database connection using config file
include_once("\insert\config.php");

// Fetch all tbl_cs data from database
// $result = mysqli_query($mysqli, "SELECT * FROM tbl_cs ORDER BY tot DESC limit 2");

// $result = mysqli_query($mysqli, "SELECT * FROM tbl_cs order by id DESC ");
$result = mysqli_query($mysqli, "SELECT * FROM tbl_cs where keterangan = 'diterima' ");
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



<h3>Informasi Siswa</h3><hr><br>


<form method="post" action="view_kadis_sos_prov/cetak_info_siswa.php">

  <!-- <select name="keterangan">
  <option value="diterima">Diterima</option>
  <option value="menjahit">Menjahit</option>
  <option value="elektronik">Elektronik</option>
  <option value="motor">Motor</option>
</select> -->

<select name="jurusan">
  <option value="menjahit">Menjahit</option>
  <option value="motor">Motor</option>
  <option value="elektronik">Elektronik</option>
</select>

<input type="date" name="tanggal">

<tr>
                <td><input class="btn btn-primary" type="submit" name="search" value="Sortir Data"></td>
            </tr>

</form><br>



<table id="example2" border="1" class="table table-bordered table-hover">
	<thead>
	<tr>
		
		<th>No</th>
		<th>Nama</th>
		<th>Jurusan</th>
		<th>Kabupaten</th>
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
        echo "<td>".$user_data['jurusan']."</td>"; 
        echo "<td>".$user_data['alko']."</td>";        
        echo "<td>".$user_data['keterangan']."</td>";        
        echo "<td>".$user_data['tanggal']."</td></tr>";        
    }
    ?>
    </tbody>
</table><br><br>

<a href="view_ps_uptd\cetak_ds.php" class="btn btn-primary">Cetak</a>

</div>


