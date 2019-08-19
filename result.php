<?php  

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $kosong1 = "TRUNCATE TABLE tb_kriteria";
  $kosong2 = "TRUNCATE TABLE tb_result"; 
  $kosong3 = "TRUNCATE TABLE tb_peserta"; 
  $kosong4 = "TRUNCATE TABLE temp_nilai"; 
  $kosong5 = "TRUNCATE TABLE temp_nilai_peserta";

  mysql_select_db($database_koneksi, $koneksi);
  $Result1 = mysql_query($kosong1, $koneksi) or die(mysql_error());
  
  mysql_select_db($database_koneksi, $koneksi);
  $Result1 = mysql_query($kosong2, $koneksi) or die(mysql_error());
  
  mysql_select_db($database_koneksi, $koneksi);
  $Result1 = mysql_query($kosong3, $koneksi) or die(mysql_error());
  
  mysql_select_db($database_koneksi, $koneksi);
  $Result1 = mysql_query($kosong4, $koneksi) or die(mysql_error());
  
  mysql_select_db($database_koneksi, $koneksi);
  $Result1 = mysql_query($kosong5, $koneksi) or die(mysql_error());
  
  if ($Result1) {
  	echo "<script>
	alert('Data Berhasil di Reset');
	document.location = '?page=insert/kriteria';
	</script>";
  }
}

mysql_select_db($database_koneksi, $koneksi);
$query_rs_result = "SELECT * FROM view_total ORDER BY total DESC";
$rs_result = mysql_query($query_rs_result, $koneksi) or die(mysql_error());
$row_rs_result = mysql_fetch_assoc($rs_result);
$totalRows_rs_result = mysql_num_rows($rs_result);

/*SELECT nama_peserta, SUM(nilai * nilai_kriteria) FROM `tb_result` INNER JOIN tb_kriteria USING(kode_kriteria) 
INNER JOIN tb_peserta USING(id_peserta) GROUP BY id_peserta*/
?> 
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>

<body>
<div class="col-md-12">
<?php require_once('timeline/5.php'); ?>   
</div>

<p>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <input type="submit" value="RESET" class="btn btn-warning btn-lg"/>
  <input type="hidden" name="MM_insert" value="form1" />
</form>
</p> 
<table width="100%" class="table table-striped table-bordered table-hover">
<thead>
  <tr bgcolor="#006633">
    <th width="9%"><span class="style1">RANGKING </span></th>
    <th width="63%"><span class="style1">NAMA PESERTA</span></th>
    <th width="28%"><span class="style1">TOTAL</span></th>
  </tr>
  </thead>
  <?php $no = 1; do { ?>
    <tr>
      <td align="center"><?php echo $no++; ?></td>
      <td><?php echo $row_rs_result['nama_peserta']; ?></td>
      <td><?php echo number_format($row_rs_result['total'],3); ?></td>
    </tr>
    <?php } while ($row_rs_result = mysql_fetch_assoc($rs_result)); ?>
</table> 
