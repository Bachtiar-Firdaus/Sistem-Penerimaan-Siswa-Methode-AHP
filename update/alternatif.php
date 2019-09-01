<?php  

mysql_select_db($database_koneksi, $koneksi);
$query_rs_id = "SELECT * FROM tbl_cs ORDER BY id ASC";
$rs_id = mysql_query($query_rs_id, $koneksi) or die(mysql_error());
$row_rs_id = mysql_fetch_assoc($rs_id);
$totalRows_rs_id = mysql_num_rows($rs_id);
  
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE tbl_cs SET nama=%s WHERE id=%s",
                       GetSQLValueString($_POST['nama'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_koneksi, $koneksi);
  $Result1 = mysql_query($updateSQL, $koneksi) or die(mysql_error());
}

$colname_rs_peserta = "-1";
if (isset($_GET['id'])) {
  $colname_rs_peserta = $_GET['id'];
}
mysql_select_db($database_koneksi, $koneksi);
$query_rs_peserta = sprintf("SELECT * FROM tbl_cs WHERE id = %s", GetSQLValueString($colname_rs_peserta, "int"));
$rs_peserta = mysql_query($query_rs_peserta, $koneksi) or die(mysql_error());
$row_rs_peserta = mysql_fetch_assoc($rs_peserta);
$totalRows_rs_peserta = mysql_num_rows($rs_peserta);
?><style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
<div class="col-md-6">
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table width="100%" height="75">
    <tr valign="baseline">
      <td nowrap="nowrap">Nama</td>
      <td><input type="text" name="nama" value="<?php echo htmlentities($row_rs_peserta['nama'], ENT_COMPAT, 'utf-8'); ?>" size="32" class="form-control" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap">&nbsp;</td>
      <td valign="bottom"><input type="submit" value="Simpan" class="btn btn-primary"/></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1" />
  <input type="hidden" name="id" value="<?php echo $row_rs_peserta['id']; ?>" />
</form>
</div>
<div class="col-md-6">
<table width="100%" class="table table-striped table-bordered table-hover">
<thead>
  <tr align="center" bgcolor="#003366">
    <th width="5%"><span class="style1">NO.</span></th>
    <th width="76%"><span class="style1">NAMA</span></th>
    <th width="19%"><span class="style1"> </span></th>
  </tr>
  </thead>
  <?php $no = 1; do { ?>
    <tr>
      <td align="center"><?php echo $no++; ?></td>
      <td><?php echo $row_rs_id['nama']; ?></td>
      <td><a href="?page=update/alternatif&id=<?php echo $row_rs_id['id']; ?>">Edit Peserta</a></td>
    </tr>
    <?php } while ($row_rs_id = mysql_fetch_assoc($rs_id)); ?>
</table> 
</div>