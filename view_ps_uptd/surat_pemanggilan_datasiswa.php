
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style type="text/css">
	tr, td,th{
		padding: 10px;
	}
	.containeredit{
		padding: 20px;
	}
	.modal-dialog{
		width:90%;
		margin-top: 150px;
	}
</style>

<div class="containeredit">

  <h1>Informasi</h1><br>

<button><a href="view_ps_uptd\upload.php">upload surat</a></button>


<table border="1">
	<tr>
		
		<th>No</th>
		<th>File Pemanggilan surat & data siswa</th>
		<th>Aksi</th>
	</tr>
	<tr>

<?php
  $konek = mysqli_connect("localhost","root","","codegoo_ahp");

  $query = "SELECT * FROM upload ORDER BY id_upload DESC";
  $hasil = mysqli_query($konek, $query);
$no = 1;
  while ($r = mysqli_fetch_array($hasil)){
    echo "<td>".$no++."</td>";
    echo "<td>".$r['nama_file']."</td>";
    echo "<td><a href=view_ps_uptd\simpan.php?file=$r[nama_file]\">Download File</a></td>";
  }
?>

	</tr>
</table><br><br>

</div>
