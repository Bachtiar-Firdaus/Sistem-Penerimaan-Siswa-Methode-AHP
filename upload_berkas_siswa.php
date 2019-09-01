<?php
$konek = mysqli_connect("localhost","root","","codegoo_ahp");
$no=0;
$query = "SELECT * FROM tbl_upload_berkas ORDER BY id_berkas DESC";
$hasil = mysqli_query($konek, $query);
while ($r = mysqli_fetch_array($hasil)){ 
$no++
?>

<?php 

?>
<?php 
}
?>
</table>
</div>
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Upload surat pernyataan,data siswa & pemanggilan</h3>
			</div>
			<div class="box-body">
				<button class="btn btn-primary"><a href="upload.php" style="color: white;">++ Upload
						Surat</a></button><br><br>
				<table id="example2" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Nama Berkas</th>
							<th>Deskripsi</th>
							<th>DL</th>
						</tr>
					</thead>
					<tbody>
						<?php
$konek = mysqli_connect("localhost","root","","codegoo_ahp");
$no=0;
$query = "SELECT * FROM tbl_upload_berkas ORDER BY id_berkas DESC";
$hasil = mysqli_query($konek, $query);
while ($r = mysqli_fetch_array($hasil)){ 
$no++
?>

<?php 
echo "<tr>";
echo "<td>$no</td>";
echo "<td>$r[nama_berkas]</b></td>";
echo "<td>$r[nama]</b></td>";
echo "<td>$r[deskripsi]</td>";
echo "<td><a href=\"simpan.php?file=$r[nama_berkas]\">Download File</a></td>";
echo "</tr>"
?>
<?php
}
?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>