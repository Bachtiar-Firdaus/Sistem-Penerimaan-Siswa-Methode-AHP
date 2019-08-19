<?php  
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO tb_intensitas (no_intensitas, keterangan) VALUES (%s, %s)",
                       GetSQLValueString($_POST['no_intensitas'], "int"),
                       GetSQLValueString($_POST['keterangan'], "text"));

  mysql_select_db($database_koneksi, $koneksi);
  $Result1 = mysql_query($insertSQL, $koneksi) or die(mysql_error());
}

mysql_select_db($database_koneksi, $koneksi);
$query_rs_intensitas = "SELECT * FROM tb_intensitas";
$rs_intensitas = mysql_query($query_rs_intensitas, $koneksi) or die(mysql_error());
$row_rs_intensitas = mysql_fetch_assoc($rs_intensitas);
$totalRows_rs_intensitas = mysql_num_rows($rs_intensitas);
?> 
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>

<body>
<div class="col-md-6">
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table width="100%" height="118">
    <tr valign="baseline">
      <td width="14%" align="left" valign="top" nowrap="nowrap">Nomor</td>
      <td width="86%"><input type="text" name="no_intensitas" class="form-control input-sm" value="" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="top" nowrap="nowrap">Keterangan</td>
      <td><input type="text" name="keterangan" value="" class="form-control input-sm" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td align="left" valign="top" nowrap="nowrap">&nbsp;</td>
      <td valign="bottom"><input type="submit" value="Tambah" class="btn btn-success" /></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1" />
</form>
</div>

<div class="col-md-6">

<table class="table table-striped table-hover table-bordered">
<thead>
  <tr align="center" valign="middle" bgcolor="#003366">
    <th><div align="center" class="style1">NO.</div></th>
    <th><div align="center" class="style1">INDEX</div></th>
    <th><div align="center" class="style1">KETERANGAN</div></th>
  </tr>
  </thead>
  <?php $no = 1; do { ?>
    <tr>
      <td align="center"><?php echo $no++; ?></td>
      <td><?php echo $row_rs_intensitas['no_intensitas']; ?></td>
      <td><?php echo $row_rs_intensitas['keterangan']; ?></td>
    </tr>
    <?php } while ($row_rs_intensitas = mysql_fetch_assoc($rs_intensitas)); ?>
</table>
</div>
</body>
</html> 
