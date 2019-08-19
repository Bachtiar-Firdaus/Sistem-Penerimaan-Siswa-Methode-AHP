<?php
mysql_select_db($database_koneksi, $koneksi);
$query_rs_kriteria = "SELECT * FROM tb_kriteria ORDER BY kode_kriteria ASC";
$rs_kriteria = mysql_query($query_rs_kriteria, $koneksi) or die(mysql_error());
$row_rs_kriteria = mysql_fetch_assoc($rs_kriteria);
$totalRows_rs_kriteria = mysql_num_rows($rs_kriteria);
?>
 
<div class="col-md-12">
<?php require_once('timeline/4.php'); ?>   
</div>


<table width="100%" class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th width="3%" align="center" valign="middle">NO.</th>
      <th width="16%" align="center" valign="middle">KODE</th>
      <th width="68%" align="center" valign="middle">HITUNG ALTERNATIF PER KRITERIA</th>
      <th width="13%" align="center" valign="middle">&nbsp;</th>
    </tr>
  </thead>
  <?php $no = 1; do { ?>
  <tr>
    <td align="center"><?php echo $no++; ?></td>
    <td><?php echo $row_rs_kriteria['kode_kriteria']; ?></td>
    <td><a href="?page=alternatif&amp;kode=<?php echo $row_rs_kriteria['kode_kriteria']; ?>"><?php echo $row_rs_kriteria['nama_kriteria']; ?></a></td>
    <td align="center"><a href="?page=update/kriteria&amp;id_kriteria=<?php echo $row_rs_kriteria['id_kriteria']; ?>">Change</a></td>
  </tr>
  <?php } while ($row_rs_kriteria = mysql_fetch_assoc($rs_kriteria)); ?>
</table>
</body>
</html>
