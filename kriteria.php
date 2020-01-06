<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
<div class="col-md-12">
<?php require_once('Connections/koneksi.php');


//------ untuk menyimpan nilai ke table RESULT
$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form2")) {

//----- untuk menampilkan jumlah banyaknya peserta untuk dilakukan looping
	mysql_select_db($database_koneksi, $koneksi);
	$query_rs_kriteria = "SELECT * FROM tb_kriteria";
	$rs_kriteria = mysql_query($query_rs_kriteria, $koneksi) or die(mysql_error());
	$totalRows_kriteria = mysql_num_rows($rs_kriteria);
	
  for($jmlh = 1; $jmlh <= $totalRows_kriteria; $jmlh++) {
  $updateSQL = sprintf("UPDATE tb_kriteria SET nilai_kriteria=%s WHERE kode_kriteria=%s", 
                       GetSQLValueString($_POST['nilai_kriteria'.$jmlh], "double"),
                       GetSQLValueString($_POST['kode_kriteria'.$jmlh], "text"));

  mysql_select_db($database_koneksi, $koneksi);
  $Result1 = mysql_query($updateSQL, $koneksi) or die(mysql_error());
  }
}


//* -------- EDIT ---------

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE temp_nilai SET nilai=%s WHERE baris=%s AND kolom =%s",
                       GetSQLValueString($_POST['nilai'], "double"),
                       GetSQLValueString($_POST['baris'], "int"),
                       GetSQLValueString($_POST['kolom'], "int"));

  mysql_select_db($database_koneksi, $koneksi);
  $Result1 = mysql_query($updateSQL, $koneksi) or die(mysql_error());

	$updateSQL2 = sprintf("UPDATE temp_nilai SET nilai=1/%s WHERE kolom=%s AND baris=%s",
                       GetSQLValueString($_POST['nilai'], "double"),
                       GetSQLValueString($_POST['baris'], "int"),
                       GetSQLValueString($_POST['kolom'], "int"));
					     
  mysql_select_db($database_koneksi, $koneksi);
  $Result1 = mysql_query($updateSQL2, $koneksi) or die(mysql_error());
  
}
//------- tampilkan data array dari database

mysql_select_db($database_koneksi, $koneksi);
$result=mysql_query('SELECT * FROM temp_nilai');
$angka = array();
while ($row=mysql_fetch_row($result)) {
    $angka[] = $row[3];
}
$no = 0;

//----untuk nilai eigin
mysql_select_db($database_koneksi, $koneksi);
$resultx=mysql_query('SELECT * FROM temp_nilai');
$eigen = array();
while ($baris=mysql_fetch_row($resultx)) {
    $eigen[] = $baris[3];
}
$nox = 0;
$noy = 0; 

//----untuk nilai eigin
mysql_select_db($database_koneksi, $koneksi);
$resultx=mysql_query('SELECT * FROM temp_nilai');
$lambda = array();
while ($baris=mysql_fetch_row($resultx)) {
    $lambda[] = $baris[3];
}
$noz = 0;
 
//echo var_dump($nox);
// exit;
//--------------- untuk mengisi data combox 1 dan 2
mysql_select_db($database_koneksi, $koneksi);
$query_rs_kriteria1 = "SELECT * FROM tb_kriteria";
$rs_kriteria1 = mysql_query($query_rs_kriteria1, $koneksi) or die(mysql_error());
$row_rs_kriteria1 = mysql_fetch_assoc($rs_kriteria1);
$totalRows_rs_kriteria1 = mysql_num_rows($rs_kriteria1);
$jumlahKriteria = mysql_num_rows($rs_kriteria1);

mysql_select_db($database_koneksi, $koneksi);
$query_rs_kriteria2 = "SELECT * FROM tb_kriteria";
$rs_kriteria2 = mysql_query($query_rs_kriteria2, $koneksi) or die(mysql_error());
$row_rs_kriteria2 = mysql_fetch_assoc($rs_kriteria2);
$totalRows_rs_kriteria2 = mysql_num_rows($rs_kriteria2);

//menampilkan daftar nilai dari tabel intensitas
mysql_select_db($database_koneksi, $koneksi);
$query_rs_intensitas = "SELECT * FROM tb_intensitas ORDER BY no_intensitas ASC";
$rs_intensitas = mysql_query($query_rs_intensitas, $koneksi) or die(mysql_error());
$row_rs_intensitas = mysql_fetch_assoc($rs_intensitas);
$totalRows_rs_intensitas = mysql_num_rows($rs_intensitas);
?>

<div class="col-md-12">
<?php require_once('timeline/2.php'); ?>   
</div>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">

  <table width="100%" height="49">
    <tr valign="baseline">
      <td height="43" align="left"><div align="left">Baris:</div>
        <select name="baris" class="form-control">
        <?php 
do {  
?>
        <option value="<?php echo $row_rs_kriteria1['id_kriteria']?>"><?php echo $row_rs_kriteria1['nama_kriteria']?></option>
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
        <option value="<?php echo $row_rs_kriteria2['id_kriteria']?>"><?php echo $row_rs_kriteria2['nama_kriteria']?></option>
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
      <td align="left" valign="bottom"><input type="submit" value="HITUNG" class="btn btn-primary btn-block" /></td>
    </tr>
  </table>

  <input type="hidden" name="MM_update" value="form1" />
  <input type="hidden" name="id" value="<?php echo $row_rs_edit['id']; ?>" />
</form>

<hr />

<table class="table table-striped table-hover table-bordered">
    <tr>
    	<th bgcolor="#CC3300"><span class="style1">KRITERIA</span></th>
    <?php for($i=1; $i <= $jumlahKriteria; $i++){ 
	//MENAMPILKAN DATA KRITERIA HORIZONTAL
	mysql_select_db($database_koneksi, $koneksi);
	$query_rs_kolom = "SELECT * FROM tb_kriteria WHERE id_kriteria = $i";
	$rs_kolom = mysql_query($query_rs_kolom, $koneksi) or die(mysql_error());
	$row_kolom = mysql_fetch_assoc($rs_kolom);
	?>
        <th bgcolor="#006699"><span class="style1"><?= $row_kolom['nama_kriteria']; ?></span> </th>
    <?php } ?>    

    </tr>
    
<?php for($i=1; $i <= $jumlahKriteria; $i++){ 

//MENAMPILKAN DATA KRITERIA VERTICAL
	mysql_select_db($database_koneksi, $koneksi);
	$query_rs_baris = "SELECT * FROM tb_kriteria WHERE id_kriteria = $i";
	$rs_baris = mysql_query($query_rs_baris, $koneksi) or die(mysql_error());
	$row_baris = mysql_fetch_assoc($rs_baris);
?>
<tr>
<th bgcolor="#006699"><span class="style1"><?= $row_baris['nama_kriteria']; ?></span></th>
<?php for($j=1; $j<= $jumlahKriteria; $j++){ ?>
<td align="center"><?php 
	$angkabaru[$i][$j]=$angka[$no];
	$angkabaru1[$j][$i]=$angkabaru[$i][$j];
	echo number_format($angkabaru[$i][$j],2);
?></td>

<?php $no++; 
	}
}
?>
</tr>

<tr>
<th bgcolor="#006699"><span class="style1">JUMLAH</span></th>
<?php
for($i=1; $i <= $jumlahKriteria; $i++){
      $jumlah[$i]=array_sum($angkabaru1[$i]);
	  ?>
      <td align="center" bgcolor="#006699"><span class="style1"><strong><?= number_format($jumlah[$i],2); ?></strong></span></td>
<?php } ?>
    </tr>

</table>

<hr />
<form action="<?php echo $editFormAction; ?>" method="post" name="form2" id="form2">
<p><input type="submit" value=" SIMPAN HASIL KRITERIA " class="btn btntn-warning btn-block btn-lg" /></p>

<table border="1" class="table table-striped table-hover table-bordered">
    <tr>
    	<th bgcolor="#CC3300"><span class="style1">KRITERIA</span></th>
    <?php for($i=1; $i <= $jumlahKriteria; $i++){ 
	
	//MENAMPILKAN DATA KRITERIA HORIZONTAL
	mysql_select_db($database_koneksi, $koneksi);
	$query_rs_kolom = "SELECT * FROM tb_kriteria WHERE id_kriteria = $i";
	$rs_kolom = mysql_query($query_rs_kolom, $koneksi) or die(mysql_error());
	$row_kolom = mysql_fetch_assoc($rs_kolom);
	
	?>
        <th bgcolor="#006699"><span class="style1"><?= $row_kolom['nama_kriteria'];?></span> </th>
      <?php } ?>    
      <th bgcolor="#006699"><span class="style1">JUMLAH</span> </th>
      <th bgcolor="#006699"><span class="style1">RATA-RATA</span> </th>
    </tr>
    
<?php 
	$rata = 0;
for($x=1; $x <= $jumlahKriteria; $x++){ 

//MENAMPILKAN DATA KRITERIA VERTICAL
	mysql_select_db($database_koneksi, $koneksi);
	$query_rs_baris = "SELECT * FROM tb_kriteria WHERE id_kriteria = $x";
	$rs_baris = mysql_query($query_rs_baris, $koneksi) or die(mysql_error());
	$row_baris = mysql_fetch_assoc($rs_baris);
?>
<tr>
    <th bgcolor="#006699"><span class="style1"><?= $row_baris['nama_kriteria']; ?></span></th>
    <?php
	$total = 0;

	 for($i=1; $i <= $jumlahKriteria; $i++){
          	$jumlah[$i]=array_sum($angkabaru1[$i]);
    ?>
          <td align="center">
          <?php 
		    $angkabaru[$i][$j]=$eigen[$nox];
			$angkabaru1[$j][$i]=$angkabaru[$i][$j];
			$hitungEigen = $angkabaru[$i][$j] / $jumlah[$i]; 
			$total += $hitungEigen;
			echo number_format($hitungEigen,2);
			$nox++; ?>      </td>
	<?php

	 } ?>
    <td align="center"><?php  echo number_format($total,2); ?></td>
    <td align="center"><?php $rata2 = $total / $jumlahKriteria; echo number_format($rata2,2); ?>
    <input name="kode_kriteria<?= $x; ?>" type="hidden" value="K<?= $x; ?>" />
    <input name="nilai_kriteria<?= $x; ?>" type="hidden" value="<?=  number_format($rata2,2); ?>" />
	<?php $rata += $rata2; ?></td>
</tr>

<?php } ?>
<tr>
  <?php 
	 for($i=1; $i <= $jumlahKriteria + 2; $i++){
	 	echo "<td></td>";
	 }
  ?>
  <th bgcolor="#006699"><span class="style1">Nilai Konsistensi : <strong><?= $rata; ?></strong></span></th> 
</tr>
</table>

<br />
<!--<input type="submit" value="Simpan Hasil" class="btn btn-success btn-block btn-lg" />-->
<input type="hidden" name="MM_update" value="form2" />
</form>
 

<hr />
<h3><strong>RESULT : </strong></h3>
<?php
$lambda = 0;
 for($x=1; $x <= $jumlahKriteria; $x++){
 $jumlah[$x]=array_sum($angkabaru1[$x]); ?>

    <?php
	$total = 0;
	 for($i=1; $i <= $jumlahKriteria; $i++){
          	$jumlah[$i]=array_sum($angkabaru1[$i]);
    ?>       
    <?php 
		    $angkabaru[$i][$j]=$eigen[$noy];
			$angkabaru1[$j][$i]=$angkabaru[$i][$j];
			$hitungEigen = $angkabaru[$i][$j] / $jumlah[$i]; 
			$total += $hitungEigen;
			number_format($hitungEigen,2);
			$noy++; 
	 } 
  
     $rata2 = $total / $jumlahKriteria;
     $lambda += $jumlah[$x] * $rata2;
 } ?>

    <table class="table table-striped table-bordered table-hover">
      <tr>
        <td>NILAI LAMBDA MAX </td>
        <td><strong><?php echo $lambda = number_format($lambda, 2); ?></strong></td>
      </tr>
      <tr>
        <td>NILAI CI</td>
        <td> <strong>
          <?php $ci = ($lambda - $jumlahKriteria) / ($jumlahKriteria - 1); echo number_format($ci,2); ?>
        </strong></td>
      </tr>
      <tr>
        <td>NILAI CR </td>
        <td><strong>
          <?php $cr = ($ci / 1.41); echo number_format($cr,2); ?>
        </strong></td>
      </tr>
    </table>
  </div>
