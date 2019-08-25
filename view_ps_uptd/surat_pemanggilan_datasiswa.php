<!-- 
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
		<th>Nama File</th>
		<th>Deskripsi</th>
		<th>Aksi</th>
	</tr>
	



<?php
	
  $konek = mysqli_connect("localhost","root","","codegoo_ahp");

  $no=0;

  $query = "SELECT * FROM upload ORDER BY id_upload DESC";
  $hasil = mysqli_query($konek, $query);

  while ($r = mysqli_fetch_array($hasil)){ 
  	$no++
  	?>

  	<?php 

  	echo "<tr>";

  	

  	echo "<td>$no</td>";
  	echo "<td>$r[nama_file]</b></td>";
  	echo "<td>$r[deskripsi]</td>";
  	echo "<td><a href=\"view_ps_uptd\simpan.php?file=$r[nama_file]\">Downl
    oad File</a></td>";

    echo "</tr>"

  	?>


  	<?php 
  }


  	?>

  </table>

</div> -->
  	<!-- 
  	<td>Deskripsi : $r[deskripsi]</td>
  	<td><a href=\"view_ps_uptd\simpan.php?file=$r[nama_file]\">Downl
    oad File</a></td>


    echo "Nama File : <b>$r[nama_file]</b> <br>";
    echo "Deskripsi : $r[deskripsi] <br>";
    echo "<a href=\"view_ps_uptd\simpan.php?file=$r[nama_file]\">Downl
    oad File</a><hr><br>";
    
    
    
  }
?> -->


	<div class="row">
		<div class="col-xs-12">
            <div class="box">
				<div class="box-header">
					<h3 class="box-title">Upload surat pernyataan,data siswa & pemanggilan</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">

					<button class="btn btn-primary"><a href="view_ps_uptd\upload.php" style="color: white;">++ Upload Surat</a></button><br><br>

					<table id="example2" class="table table-bordered table-hover">
						<thead>
							<tr>
                                <th>No</th>
                                <th>Nama File</th>
								<th>Nama Surat</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>

							<?php
	
  $konek = mysqli_connect("localhost","root","","codegoo_ahp");

  $no=0;

  $query = "SELECT * FROM upload ORDER BY id_upload DESC";
  $hasil = mysqli_query($konek, $query);

  while ($r = mysqli_fetch_array($hasil)){ 
  	$no++
  	?>

  	<?php 



  	

  	echo "<tr>";

  	

  	echo "<td>$no</td>";
  	echo "<td>$r[nama_file]</b></td>";
  	echo "<td>$r[deskripsi]</td>";
  	echo "<td><a href=\"view_ps_uptd\simpan.php?file=$r[nama_file]\">Downl
    oad File</a></td>";

    echo "</tr>"

  	?>

							<!-- <tr>
								<td>1</td>
                                <td>Surat Pemanggilan $ data siswa</td>
                                <td>surat1.doc</td>
								<td><input type="button" class="btn btn-success"
										value="Download" name="" id=""></td>
							</tr> -->

<?php
}

 ?>


						</tbody>
					</table>
				</div>
		</div>
	</div>
</div>



