<?php 

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO tb_kriteria (kode_kriteria, nama_kriteria) VALUES (%s, %s)",
                       GetSQLValueString($_POST['kode_kriteria'], "text"),
                       GetSQLValueString($_POST['nama_kriteria'], "text"));

  mysql_select_db($database_koneksi, $koneksi);
  $Result1 = mysql_query($insertSQL, $koneksi) or die(mysql_error());
  
  //----tampilkan data kriteria---
    mysql_select_db($database_koneksi, $koneksi);
	$query_rs_kriteria = "SELECT id_kriteria FROM tb_kriteria ORDER BY kode_kriteria ASC";
	$rs_kriteria = mysql_query($query_rs_kriteria, $koneksi) or die(mysql_error());
	$totalRows_rs_kriteria = mysql_num_rows($rs_kriteria);
  
  //----kosongkan
  $emptySQL = "TRUNCATE temp_nilai";
		
		  mysql_select_db($database_koneksi, $koneksi);
		  $Result2 = mysql_query($emptySQL, $koneksi) or die(mysql_error());
  
  //---- input nilai temp_nilai
   for($a = 1; $a <= $totalRows_rs_kriteria; $a++) {

		for ($b = 1; $b <= $totalRows_rs_kriteria; $b++) {
		  $nilaiSQL = "INSERT INTO temp_nilai (baris, kolom, nilai) VALUES ($a, $b, 1)";
		
		  mysql_select_db($database_koneksi, $koneksi);
		  $Result3 = mysql_query($nilaiSQL, $koneksi) or die(mysql_error());

		}
	} 
   //--------------		 	
}

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

<div class="col-md-12">
<?php require_once('timeline/1.php'); ?>   
</div>
<div class="col-md-4">
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table width="100%" height="113">
    <tr valign="baseline">
      <td width="32%" align="left" nowrap="nowrap">KODE</td>
      <td width="68%"><input type="text" name="kode_kriteria" value="K<?= $nomor; ?>" size="32" class="form-control" readonly="readonly"/></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="left">NAMA KRITERIA</td>
      <td><input type="text" name="nama_kriteria" value="" size="32" class="form-control" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="left">&nbsp;</td>
      <td valign="bottom"><input type="submit" value="Tambah Kriteria" class="btn btn-success" /> <a href="?page=kriteria" class="btn btn-danger">Mulai</a></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1" />
</form>
</div>
<div class="col-md-8">
<div class="callout callout-warning">
<h4>Perhatian!</h4>
<p>Apabila Kriteria ditambahkan maka nilai Matriks Perbandingan akan kembali default.</p>
</div>
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
        <td><a href="?page=alternatif&kode=<?php echo $row_rs_kriteria['kode_kriteria']; ?>"><?php echo $row_rs_kriteria['nama_kriteria']; ?></a></td>
        <td align="center"><a href="?page=update/kriteria&id_kriteria=<?php echo $row_rs_kriteria['id_kriteria']; ?>">Edit</a></td>

        <td align="center"><a href="insert/delete_kriteria.php?id_kriteria=<?php echo $row_rs_kriteria['id_kriteria']; ?>">Delete</a></td>
        

        
      </tr>
      <?php } while ($row_rs_kriteria = mysql_fetch_assoc($rs_kriteria)); ?>
  </table>
</div>
