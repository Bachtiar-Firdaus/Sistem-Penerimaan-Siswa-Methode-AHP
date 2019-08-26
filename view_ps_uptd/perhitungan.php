
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
$query_rs_result = "SELECT * FROM view_total ORDER BY total ASC";
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

<?php require_once('timeline/5.php'); ?>   


</p> 
<h2>Hasil Perhitungan AHP</h2>
<table  width="100%" class="table table-striped table-bordered table-hover">
<thead>
  <tr bgcolor="#006633">
    <th width="9%"><span class="style1">RANGKING </span></th>
    <th width="63%"><span class="style1">NAMA PESERTA</span></th>
    <th width="28%"><span class="style1">TOTAL</span></th>
  </tr>
  </thead>
  <tbody>
  <?php $no = 1; do { ?>
    <tr>
      <td align="center"><?php echo $no++; ?></td>
      <td><?php echo $row_rs_result['nama_peserta']; ?></td>
      <td><?php echo number_format($row_rs_result['total'],3); ?></td>
    </tr>
    <?php } while ($row_rs_result = mysql_fetch_assoc($rs_result)); ?>
    </tbody>
</table> 



<style type="text/css">
	tr, td,th{
		padding: 10px;
	}
	.containeredit{
		padding: 20px;
	}
	.modal-dialog{
		width:90%;
	}
</style>

<div class="containeredit">

<h1>Sortir</h1><br>

<!-- Button trigger modal -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->




    <form action="view_ps_uptd\sort.php" method="post" name="form1">
<select name = "kabupaten" >
<option >Hasil Perhitungan Kabupaten</option>
    <option>Lampung Barat<option>
    <option>Lampung Selatan<option>
    <option>Lampung Tengah<option>
    <option>Lampung Timur<option>
    <option>Lampung Utara<option>
    <option>Mesuji<option>
    <option>Pesisir Barat<option>
    <option>Pringsewu<option>
    <option>Tanggamus<option>
    <option>Tulang Bawang<option>
    <option>Tulang Bawang barat<option>
    <option>Way Kanan<option>
    <option>Bandar Lampung<option>
    <option>Metro<option>
    <option>Pesawaran<option>

</select>


            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="sort"></td>
            </tr>

  </table>
    </form>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- akhir btn -->

<?php
// Create database connection using config file
include_once("view_ps_uptd\config.php");

$result = mysqli_query($mysqli, "SELECT * FROM tbl_cs ORDER BY id DESC");
// Fetch all tbl_cs data from database

?>

<html>

<head>    
    <title>IDENTIFIKASI CALON SISWA</title>
</head>

<body>
    <style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
  overflow: scroll;
}

th, td {
  padding: 15px;
}
</style>

<div class="containeredit">

    <table id="example2" border="1" class="table table-bordered table-hover">
    	<thead>
    <tr>
        <th>No</th>
        <th>Nama Peserta</th>
        <th>Kabupaten</th>
        <th>Total</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php  
    $no = "1";
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$no++."</td>";        
        echo "<td>".$user_data['nama']."</td>"; 
        echo "<td>".$user_data['alko']."</td>"; 
        echo "<td>".$user_data['tot']."</td>"; 
        echo "<td><a href='/program_april/view_ps_uptd/edit_tot_cs.php?id=$user_data[id]'>Edit</a></td></tr>";        
    }
    ?>
    </tbody>
    </table>

    </div>


</body>
</html>
