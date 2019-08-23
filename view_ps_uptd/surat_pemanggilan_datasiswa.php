
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
            $no=0;
            $query = mysql_query("SELECT * FROM upload ORDER BY id_upload"); 
            while($data = mysql_fetch_array($query)){
            $no++
        ?>
    <tr>
        <td><?=$no?></td>
        <td><?php echo $data['nama_file']; ?></td>
        <td><a href="view_ps_uptd\simpan.php?filename=<?=$data['nama_file']?>">Download</a></td>    
    </tr>
        <?php 
        } 
        ?>

	</tr>
</table><br><br>

</div>
