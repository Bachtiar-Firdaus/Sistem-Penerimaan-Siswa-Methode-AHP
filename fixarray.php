<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
<div class="col-md-4">
<?php require_once('Connections/koneksi.php');

mysql_select_db($database_koneksi, $koneksi);
//tampilkan tabel mahasiswa_ilkom
$result=mysql_query('SELECT * FROM temp_nilai');
$angka = array();
while ($row=mysql_fetch_row($result)) {
    $angka[] = $row[3];
}
$no = 0;
?>

<table class="table table-striped table-hover table-bordered">
    <tr>
    	<td>KRITERIA</td>
    <?php for($i=1; $i <= 5; $i++){ ?>
        <th bgcolor="#006699"><span class="style1">Kolom <?= $i; ?></span> </th>
    <?php } ?>    
        <th bgcolor="#006699"><span class="style1">Total</span></th>
    </tr>
    
<?php for($i=1; $i <= 5; $i++){ ?>
<tr>
<th bgcolor="#006699"><span class="style1">Baris <?= $i ?></span></th>
<?php for($j=1; $j<=5; $j++){ ?>
<td>
<?php 

$angkabaru[$i][$j]=$angka[$no];
$angkabaru1[$j][$i]=$angkabaru[$i][$j];
echo $angkabaru[$i][$j];
?>
</td>

<?php

   $no++;

  }
  
?>
<td><?php  
      $jumlah[$i]=array_sum($angkabaru[$i]);
      echo $jumlah[$i];
?></td>
<?php }
?>
</tr>
<tr>
<th bgcolor="#006699"><span class="style1">Jumlah</span></th>
<?php
for($i=1; $i <= 5; $i++){
      $jumlah[$i]=array_sum($angkabaru1[$i]);
	  ?>
      <td><?= $jumlah[$i]; ?></td>
<?php } ?>
    <td></td>
</tr>
</table>
</div>