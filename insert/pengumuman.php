
	<div class="row">
		<div class="col-xs-12">
            <div class="box">
				<div class="box-header">
					<h3 class="box-title">Pengumuman</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">

					<table id="example2" class="table table-bordered table-hover">
						<thead>
							<tr>
                                <th>NO</th>
                                <th>Jenis Surat</th>
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

