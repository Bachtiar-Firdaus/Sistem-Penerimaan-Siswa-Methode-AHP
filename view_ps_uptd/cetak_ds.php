<?php
// Create database connection using config file
include_once("config.php");

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
    }
    ?>
</table><br><br>

</div>


