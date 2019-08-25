<?php 

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE tb_kriteria SET kode_kriteria=%s, nama_kriteria=%s WHERE id_kriteria=%s",
                       GetSQLValueString($_POST['kode_kriteria'], "text"),
                       GetSQLValueString($_POST['nama_kriteria'], "text"),
                       GetSQLValueString($_POST['id_kriteria'], "int"));

  mysql_select_db($database_koneksi, $koneksi);
  $Result1 = mysql_query($updateSQL, $koneksi) or die(mysql_error());
}

//------------ PARAMETER UPDATE ----------
$colname_rs_update = "-1";
if (isset($_GET['id_kriteria'])) {
  $colname_rs_update = $_GET['id_kriteria'];
}
mysql_select_db($database_koneksi, $koneksi);
$query_rs_update = sprintf("SELECT * FROM tb_kriteria WHERE id_kriteria = %s", GetSQLValueString($colname_rs_update, "int"));
$rs_update = mysql_query($query_rs_update, $koneksi) or die(mysql_error());
$row_rs_update = mysql_fetch_assoc($rs_update);
$totalRows_rs_update = mysql_num_rows($rs_update);

//----------- DAFTAR KRITERIA ---------
mysql_select_db($database_koneksi, $koneksi);
$query_rs_kriteria = "SELECT * FROM tb_kriteria ORDER BY kode_kriteria ASC";
$rs_kriteria = mysql_query($query_rs_kriteria, $koneksi) or die(mysql_error());
$row_rs_kriteria = mysql_fetch_assoc($rs_kriteria);
$totalRows_rs_kriteria = mysql_num_rows($rs_kriteria);
?>
<?php 

if ($totalRows_rs_kriteria == 0) {
	$nomor = 1;	
}elseif ($totalRows_rs_kriteria > 0) {
	$nomor = $totalRows_rs_kriteria + 1;
}
?>


<div class="col-md-4">
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table width="100%" height="113">
    <tr valign="baseline">
      <td width="32%" align="left" nowrap="nowrap">KODE</td>
      <td width="68%"><input type="text" name="kode_kriteria" value="<?php echo htmlentities($row_rs_update['kode_kriteria'], ENT_COMPAT, 'utf-8'); ?>" size="32" class="form-control" readonly="readonly" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="left">NAMA KRITERIA</td>
      <td><input type="text" name="nama_kriteria" value="<?php echo htmlentities($row_rs_update['nama_kriteria'], ENT_COMPAT, 'utf-8'); ?>" size="32" class="form-control" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="left">&nbsp;</td>
      <td valign="bottom"><input type="submit" value="Edit Kriteria" class="btn btn-success" />
       <!-- <a href="?page=insert/#" class="btn btn-danger">Start Begin</a></td> -->
    </tr>
  </table>
   <input type="hidden" name="MM_update" value="form1" />
  <input type="hidden" name="id_kriteria" value="<?php echo $row_rs_update['id_kriteria']; ?>" />
</form>
</div>
<div class="col-md-8">
  <table width="100%" class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th width="3%" align="center" valign="middle">NO.</th>
        <th width="16%" align="center" valign="middle">KODE</th>
        <th width="68%" align="center" valign="middle">NAMA</th>
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
</div> 