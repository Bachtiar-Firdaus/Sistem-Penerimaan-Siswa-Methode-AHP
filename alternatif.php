<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
<div class="col-md-12">
<?php require_once('Connections/koneksi.php');
// ---- menampilkan kriteria berdasrakan kode ------

/*as,das,d ( K1 )*/
$colname_rs_kriteria = "-1";
if (isset($_GET['kode'])) {
  $colname_rs_kriteria = $_GET['kode'];
}
mysql_select_db($database_koneksi, $koneksi);
$query_rs_kriteria = sprintf("SELECT * FROM tb_kriteria WHERE kode_kriteria = %s", GetSQLValueString($colname_rs_kriteria, "text"));
$rs_kriteria = mysql_query($query_rs_kriteria, $koneksi) or die(mysql_error());
$row_rs_kriteria = mysql_fetch_assoc($rs_kriteria);
$totalRows_rs_kriteria = mysql_num_rows($rs_kriteria);

//------ untuk menyimpan nilai ke table RESULT



$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {

	$sql = mysql_query("SELECT kode_kriteria FROM tb_result WHERE kode_kriteria= '$colname_rs_kriteria'") or die(mysql_error());
	$cek = mysql_num_rows($sql); 
		  if ($cek > 0) {
			//----- untuk menampilkan jumlah banyaknya peserta untuk dilakukan looping
			  mysql_select_db($database_koneksi, $koneksi);
			  $query_rs_peserta = "SELECT * FROM tbl_cs";
			  $rs_peserta = mysql_query($query_rs_peserta, $koneksi) or die(mysql_error());
			  $totalRows_rs_peserta = mysql_num_rows($rs_peserta);
				
			  for($jmlh = 1; $jmlh <= $totalRows_rs_peserta; $jmlh++) {
			  
			  $insertSQL = sprintf("UPDATE tb_result SET nilai=%s WHERE kode_kriteria=%s AND id=%s",
								   GetSQLValueString($_POST['nilai'.$jmlh], "double"),
								   GetSQLValueString($_POST['kode_kriteria'], "text"),
								   GetSQLValueString($_POST['id'.$jmlh], "int"));
								   
			  mysql_select_db($database_koneksi, $koneksi);
			  $Result1 = mysql_query($insertSQL, $koneksi) or die(mysql_error());
			  }
		  }else{
			//----- untuk menampilkan jumlah banyaknya peserta untuk dilakukan looping
			  mysql_select_db($database_koneksi, $koneksi);
			  $query_rs_peserta = "SELECT * FROM tbl_cs";
			  $rs_peserta = mysql_query($query_rs_peserta, $koneksi) or die(mysql_error());
			  $totalRows_rs_peserta = mysql_num_rows($rs_peserta);
				
			  for($jmlh = 1; $jmlh <= $totalRows_rs_peserta; $jmlh++) {
			  $insertSQL = sprintf("INSERT INTO tb_result (kode_kriteria, id, nilai) VALUES (%s, %s, %s)",
								   GetSQLValueString($_POST['kode_kriteria'], "text"),
								   GetSQLValueString($_POST['id'.$jmlh], "int"),
								   GetSQLValueString($_POST['nilai'.$jmlh], "double"));
			
			  mysql_select_db($database_koneksi, $koneksi);
			  $Result1 = mysql_query($insertSQL, $koneksi) or die(mysql_error());
			  }
		}	  
}


//* -------- EDIT ---------


if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE temp_nilai_peserta SET nilai=%s WHERE baris=%s AND kolom =%s",
                       GetSQLValueString($_POST['nilai'], "double"),
                       GetSQLValueString($_POST['baris'], "int"),
                       GetSQLValueString($_POST['kolom'], "int"));

  mysql_select_db($database_koneksi, $koneksi);
  $Result1 = mysql_query($updateSQL, $koneksi) or die(mysql_error());

	$updateSQL2 = sprintf("UPDATE temp_nilai_peserta SET nilai=1/%s WHERE kolom=%s AND baris=%s",
                       GetSQLValueString($_POST['nilai'], "double"),
                       GetSQLValueString($_POST['baris'], "int"),
                       GetSQLValueString($_POST['kolom'], "int"));
					     
  mysql_select_db($database_koneksi, $koneksi);
  $Result1 = mysql_query($updateSQL2, $koneksi) or die(mysql_error());
  
}
//------- tampilkan data array dari database

mysql_select_db($database_koneksi, $koneksi);
$result=mysql_query('SELECT * FROM temp_nilai_peserta');
$angka = array();
while ($row=mysql_fetch_row($result)) {
    $angka[] = $row[3];
}
$no = 0;

//----untuk nilai eigin
mysql_select_db($database_koneksi, $koneksi);
$resultx=mysql_query('SELECT * FROM temp_nilai_peserta');
$eigen = array();
while ($baris=mysql_fetch_row($resultx)) {
    $eigen[] = $baris[3];
}
$nox = 0;
$noy = 0; 

//----untuk nilai eigin
mysql_select_db($database_koneksi, $koneksi);
$resultx=mysql_query('SELECT * FROM temp_nilai_peserta');
$lambda = array();
while ($baris=mysql_fetch_row($resultx)) {
    $lambda[] = $baris[3];
}
$noz = 0;
 
//echo var_dump($nox);
// exit;
//--------------- untuk mengisi data combox 1 dan 2
mysql_select_db($database_koneksi, $koneksi);
$query_rs_kriteria1 = "SELECT * FROM tbl_cs";
$rs_kriteria1 = mysql_query($query_rs_kriteria1, $koneksi) or die(mysql_error());
$row_rs_kriteria1 = mysql_fetch_assoc($rs_kriteria1);
$totalRows_rs_kriteria1 = mysql_num_rows($rs_kriteria1);
$totalRows_rs_rasio =  $totalRows_rs_kriteria1;

mysql_select_db($database_koneksi, $koneksi);
$query_rs_kriteria2 = "SELECT * FROM tbl_cs";
$rs_kriteria2 = mysql_query($query_rs_kriteria2, $koneksi) or die(mysql_error());
$row_rs_kriteria2 = mysql_fetch_assoc($rs_kriteria2);
$totalRows_rs_kriteria2 = mysql_num_rows($rs_kriteria2);

//menampilkan daftar nilai dari tabel intensitas
mysql_select_db($database_koneksi, $koneksi);
$query_rs_intensitas = "SELECT * FROM tb_intensitas ORDER BY no_intensitas ASC";
$rs_intensitas = mysql_query($query_rs_intensitas, $koneksi) or die(mysql_error());
$row_rs_intensitas = mysql_fetch_assoc($rs_intensitas);
$totalRows_rs_intensitas = mysql_num_rows($rs_intensitas);

//--------------- untuk menampilkan jumlah baris dan kolom berdasarkan jumlah peserta
mysql_select_db($database_koneksi, $koneksi);
$query_rs_peserta = "SELECT * FROM tbl_cs";
$rs_peserta = mysql_query($query_rs_peserta, $koneksi) or die(mysql_error());
$row_rs_peserta = mysql_fetch_assoc($rs_peserta);
$totalRows_rs_peserta = mysql_num_rows($rs_peserta);
$jumlahPeserta = mysql_num_rows($rs_peserta);
?>
<div class="col-md-12">
<?php require_once('timeline/4.php'); ?>   
</div>

<h3><strong><?php echo $row_rs_kriteria['nama_kriteria']; ?> ( <?php echo $row_rs_kriteria['kode_kriteria']; ?> )</strong></h3><!-- nama kriteria yang dipilih -->



<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">

  <table width="100%" height="49">
    <tr valign="baseline">
      <td height="43" align="left"><div align="left">Baris:</div>
        <select name="baris" class="form-control">
        <?php 
do {  
?>
        <option value="<?php echo $row_rs_kriteria1['id']?>"><?php echo $row_rs_kriteria1['nama']?></option>
        <?php
} while ($row_rs_kriteria1 = mysql_fetch_assoc($rs_kriteria1));
?>
      </select>      </td>
      <td align="left">&nbsp;</td>
      <td align="left"><div align="left">Kolom</div>
        <select name="kolom" class="form-control">
        <?php 
do {  
?>
        <option value="<?php echo $row_rs_kriteria2['id']?>"><?php echo $row_rs_kriteria2['nama']?></option>
        <?php
} while ($row_rs_kriteria2 = mysql_fetch_assoc($rs_kriteria2));
?>
      </select>      </td>
      <td align="left">&nbsp;</td>
      <td align="left"><div align="left">Nilai</div>
        <select name="nilai" id="nilai" class="form-control">
		  <?php
        do {  
        ?>
          <option value="<?php echo $row_rs_intensitas['no_intensitas']?>"><?php echo $row_rs_intensitas['no_intensitas'] ." - ".$row_rs_intensitas['keterangan']?></option>
          <?php
        } while ($row_rs_intensitas = mysql_fetch_assoc($rs_intensitas));
          $rows = mysql_num_rows($rs_intensitas);
          if($rows > 0) {
              mysql_data_seek($rs_intensitas, 0);
              $row_rs_intensitas = mysql_fetch_assoc($rs_intensitas);
          }
        ?>
        </select>
	 </td>
      <td align="left">&nbsp;</td>
      <td align="left" valign="bottom"><input type="submit" value="INSERT" class="btn btn-warning btn-block" /></td>
    </tr>
  </table>

  <input type="hidden" name="MM_update" value="form1" />
  <input type="hidden" name="id" value="<?php echo $row_rs_edit['id']; ?>" />
</form>

<hr />

<table class="table table-striped table-hover table-bordered">
    <tr>
    	<td>KRITERIA</td>
    <?php for($i=1; $i <= $jumlahPeserta; $i++){ 
	//MENAMPILKAN DATA KRITERIA HORIZONTAL
	mysql_select_db($database_koneksi, $koneksi);
	$query_rs_kolom = "SELECT * FROM tbl_cs WHERE id = $i";
	$rs_kolom = mysql_query($query_rs_kolom, $koneksi) or die(mysql_error());
	$row_kolom = mysql_fetch_assoc($rs_kolom);
	
	?>
        <th bgcolor="#006699"><span class="style1"><?= $row_kolom['nama'];?></span> </th>
    <?php } ?>    

    </tr>
    
<?php for($i=1; $i <= $jumlahPeserta; $i++){ 

//MENAMPILKAN DATA KRITERIA VERTICAL
	mysql_select_db($database_koneksi, $koneksi);
	$query_rs_baris = "SELECT * FROM tbl_cs WHERE id = $i";
	$rs_baris = mysql_query($query_rs_baris, $koneksi) or die(mysql_error());
	$row_baris = mysql_fetch_assoc($rs_baris);
?>
<tr>
<th bgcolor="#006699"><span class="style1"><?= $row_baris['nama']; ?></span></th>
<?php for($j=1; $j<= $jumlahPeserta; $j++){ ?>
<td><?php 
	$angkabaru[$i][$j]=$angka[$no];
	$angkabaru1[$j][$i]=$angkabaru[$i][$j];
	echo $angkabaru[$i][$j];
?></td>

<?php $no++; 
	}
}
?>
</tr>

<tr>
<th bgcolor="#006699"><span class="style1">Jumlah</span></th>
<?php
for($i=1; $i <= $jumlahPeserta; $i++){
      $jumlah[$i]=array_sum($angkabaru1[$i]);
	  ?>
      <td><?= $jumlah[$i]; ?></td>
<?php } ?>
    </tr>

</table>

<hr />
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
<p><input type="submit" value="Simpan Hasil" class="btn btn-success btn-block btn-lg" /></p>
<table border="1" class="table table-striped table-hover table-bordered">
    <tr>
    	<td>KRITERIA</td>
    <?php for($i=1; $i <= $jumlahPeserta; $i++){ 
	//MENAMPILKAN DATA KRITERIA HORIZONTAL
	mysql_select_db($database_koneksi, $koneksi);
	$query_rs_kolom = "SELECT * FROM tbl_cs WHERE id = $i";
	$rs_kolom = mysql_query($query_rs_kolom, $koneksi) or die(mysql_error());
	$row_kolom = mysql_fetch_assoc($rs_kolom);
	?>
        <th bgcolor="#006699"><span class="style1"><?= $row_kolom['nama']; ?></span> </th>
      <?php } ?>    
      <th bgcolor="#006699"><span class="style1">JUMLAH</span> </th>
      <th bgcolor="#006699"><span class="style1">RATA-RATA</span> </th>
    </tr>
    
<?php 
	$rata = 0;
for($x=1; $x <= $jumlahPeserta; $x++){ 
//MENAMPILKAN DATA KRITERIA VERTICAL
	mysql_select_db($database_koneksi, $koneksi);
	$query_rs_baris = "SELECT * FROM tbl_cs WHERE id = $x";
	$rs_baris = mysql_query($query_rs_baris, $koneksi) or die(mysql_error());
	$row_baris = mysql_fetch_assoc($rs_baris);

?>
<tr>
    <th bgcolor="#006699"><span class="style1"><?= $row_baris['nama']; ?></span></th>
    <?php
	$total = 0;

	 for($i=1; $i <= $jumlahPeserta; $i++){
          	$jumlah[$i]=array_sum($angkabaru1[$i]);
    ?>
          <td>
          <?php 
		    $angkabaru[$i][$j]=$eigen[$nox];
			$angkabaru1[$j][$i]=$angkabaru[$i][$j];
			$hitungEigen = $angkabaru[$i][$j] / $jumlah[$i]; 
			$total += $hitungEigen;
			echo number_format($hitungEigen,4);
			$nox++; ?>      </td>
	<?php

	 } ?>
    <td><?php  echo number_format($total,7); ?></td>
    <td><?php $rata2 = $total / $jumlahPeserta; echo number_format($rata2,7); ?>
    <?php $rata += $rata2; ?>
    <input type="hidden" name="kode_kriteria" value="<?php echo $row_rs_kriteria['kode_kriteria']; ?>" />
    <input type="hidden" name="nilai<?php echo $x; ?>" value="<?php $rata2 = $total / $jumlahPeserta; echo number_format($rata2,7); ?>" />
    <input type="hidden" name="id<?php echo $x; ?>" value="<?php echo $x; ?>" />
    </td>
</tr>

<?php } ?>
<tr>
  <?php 
	 for($i=1; $i <= $jumlahPeserta + 2; $i++){
	 	echo "<td></td>";
	 }
  ?>
  <td>Nilai Konsistensi : <strong><?= $rata; ?></strong></td>
</tr>
</table>
<br />

<input type="hidden" name="MM_insert" value="form2" />
</form>



 

<hr />
<h3><strong>RESULT : </strong></h3>
<?php
$lambda = 0;
 for($x=1; $x <= $jumlahPeserta; $x++){
 $jumlah[$x]=array_sum($angkabaru1[$x]); ?>

    <?php
	$total = 0;
	 for($i=1; $i <= $jumlahPeserta; $i++){
          	$jumlah[$i]=array_sum($angkabaru1[$i]);
    ?>       
    <?php 
		    $angkabaru[$i][$j]=$eigen[$noy];
			$angkabaru1[$j][$i]=$angkabaru[$i][$j];
			$hitungEigen = $angkabaru[$i][$j] / $jumlah[$i]; 
			$total += $hitungEigen;
			number_format($hitungEigen,4);
			$noy++; 
	 } 
  
     $rata2 = $total / $jumlahPeserta;
     $lambda += $jumlah[$x] * $rata2;
 } ?>

    <table class="table table-striped table-bordered table-hover">
      <tr>
        <td>NILAI LAMBDA MAX </td>
        <td><strong><?php echo $lambda = number_format($lambda, 9); ?></strong></td>
      </tr>
      <tr>
        <td>NILAI CI</td>
        <td> <strong>
          <?php $ci = ($lambda - $jumlahPeserta) / ($jumlahPeserta - 1); echo number_format($ci,9); ?>
        </strong></td>
      </tr>
      <tr>
        <td>NILAI CR </td>
        <td><strong>
        <?php
        if ($totalRows_rs_rasio == 1 OR $totalRows_rs_rasio == 2) { 
		$indeks = 0;
		}elseif ($totalRows_rs_rasio == 3) {
		$indeks = 0.58;
		}elseif ($totalRows_rs_rasio == 4) {
		$indeks = 0.90;
		}elseif ($totalRows_rs_rasio == 5) {
		$indeks = 1.12;
		}elseif ($totalRows_rs_rasio == 6) {
		$indeks = 1.24;
		}elseif ($totalRows_rs_rasio == 7) {
		$indeks = 1.32;
		}elseif ($totalRows_rs_rasio == 8) {
		$indeks = 1.41;
		}elseif ($totalRows_rs_rasio == 9) {
		$indeks = 1.45;
		}elseif ($totalRows_rs_rasio == 10) {
		$indeks = 1.49;
		}elseif ($totalRows_rs_rasio == 11) {
		$indeks = 1.51;
		}elseif ($totalRows_rs_rasio == 12) {
		$indeks = 1.48;
		}elseif ($totalRows_rs_rasio == 13) {
		$indeks = 1.56;
		}elseif ($totalRows_rs_rasio == 14) {
		$indeks = 1.57;
		}elseif ($totalRows_rs_rasio == 15) {
		$indeks = 1.59;
		}
		?>
        
          <?php $cr = ($ci / $indeks); echo number_format($cr,9); ?>
        </strong></td>
      </tr>
    </table>
  </div>
