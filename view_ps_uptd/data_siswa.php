<?php
// Create database connection using config file
include_once("\insert\config.php");

// Fetch all tbl_cs data from database
$result = mysqli_query($mysqli, "SELECT * FROM tbl_cs ORDER BY id DESC");
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

<h1>Data Siswa</h1><br>



<table border="1">
	<tr>
		
		<th>No</th>
		<th>Nama</th>
		<th>Jurusan</th>
		<th>Kabupaten</th>
		<th>Aksi</th>
	</tr>
     </tr>
    <?php  
    $no = "1";
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";     
        echo "<td>".$no++."</td>";
        echo "<td>".$user_data['nama']."</td>"; 
        echo "<td>".$user_data['jurusan']."</td>"; 
        echo "<td>".$user_data['alko']."</td>";  
        echo "<td><a href='/program_april/view_ps_uptd/edit_ds.php?id=$user_data[id]'>Edit</a> | <a href='/program_april/view_ps_uptd/delete_ds.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
</table><br><br>

<a href="view_ps_uptd\cetak_ds.php" class="btn btn-primary">Cetak</a>

</div>


