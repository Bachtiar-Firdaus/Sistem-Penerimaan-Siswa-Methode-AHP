
<?php  

  

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO tbl_cs (nama) VALUES (%s)",
                       GetSQLValueString($_POST['nama'], "text"));

  mysql_select_db($database_koneksi, $koneksi);
  $Result1 = mysql_query($insertSQL, $koneksi) or die(mysql_error());
  
    //----tampilkan data kriteria---
    mysql_select_db($database_koneksi, $koneksi);
	$query_rs_kriteria = "SELECT id FROM tbl_cs ORDER BY id ASC";
	$rs_kriteria = mysql_query($query_rs_kriteria, $koneksi) or die(mysql_error());
	$totalRows_rs_kriteria = mysql_num_rows($rs_kriteria);
  
  //----kosongkan
  $emptySQL = "TRUNCATE temp_nilai_peserta";
		
		  mysql_select_db($database_koneksi, $koneksi);
		  $Result2 = mysql_query($emptySQL, $koneksi) or die(mysql_error());
  
  //---- input nilai temp_nilai_peserta
   for($a = 1; $a <= $totalRows_rs_kriteria; $a++) {

		for ($b = 1; $b <= $totalRows_rs_kriteria; $b++) {
		  $nilaiSQL = "INSERT INTO temp_nilai_peserta (baris, kolom, nilai) VALUES ($a, $b, 1)";
		
		  mysql_select_db($database_koneksi, $koneksi);
		  $Result3 = mysql_query($nilaiSQL, $koneksi) or die(mysql_error());

		}
	} 
   //--------------		 
}


mysql_select_db($database_koneksi, $koneksi);
$query_rs_peserta = "SELECT * FROM tbl_cs ORDER BY id ASC";
$rs_peserta = mysql_query($query_rs_peserta, $koneksi) or die(mysql_error());
$row_rs_peserta = mysql_fetch_assoc($rs_peserta);
$totalRows_rs_peserta = mysql_num_rows($rs_peserta);
?><style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>

<div class="col-md-12">
<?php require_once('timeline/3.php'); ?>   
</div>

<div class="col-md-6">
<div class="callout callout-danger">
<h4>Perhatian!</h4>
<p>Apabila Alternatif ditambahkan maka nilai Matriks Perbandingan akan kembali default.</p>
</div>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table width="100%" height="75">
    <tr valign="baseline">
      <td nowrap="nowrap">Nama</td>
      <td>

        <div class="form-group">

        <select name="nama" class="form-control">

<?php

$databaseHost = 'localhost';
$databaseName = 'codegoo_ahp';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 


// Fetch all tbl_cs data from database
$result = mysqli_query($mysqli, "SELECT * FROM tbl_cs2 where con !='2'");

             while($user_data = mysqli_fetch_array($result)) {  ?>

    <option><?php  echo $user_data['nama'];?></option>

  <?php     
    }
  ?>

  </select>
  </div>
        <!-- <input type="text" name="nama" value="" size="32" class="form-control" /> -->



      </td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap">&nbsp;</td>
      <td valign="bottom"><input type="submit" value="Simpan" class="btn btn-primary"/></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1" />
</form> 
</div>
<div class="col-md-6">
<table width="100%" class="table table-striped table-bordered table-hover">
<thead>
  <tr align="center" bgcolor="#003366">
    <th width="5%"><span class="style1">NO.</span></th>
    <th width="76%"><span class="style1">NAMA</span></th>
    <th width="5%"><span class="style1">ID</span></th>
    <th width="19%"><span class="style1"> </span></th> 
    <th width="19%"><span class="style1"> </span></th> 
  </tr>
  </thead>
  <?php $no = 1; do { ?>
    <tr>
      <td align="center"><?php echo $no++; ?></td>
      <td><?php echo $row_rs_peserta['nama']; ?></td>
      <td><?php echo "00" .$row_rs_peserta['id']+3 ?></td>
      <td><a href="?page=update/alternatif&id=<?php echo $row_rs_peserta['id']; ?>">Edit Peserta</a></td>
      <td><a href="insert/delete_alternatife.php?id=<?php echo $row_rs_peserta['id']; ?>">Delete</a></td>
    </tr>
    <?php } while ($row_rs_peserta = mysql_fetch_assoc($rs_peserta)); ?>
</table> 
</div>