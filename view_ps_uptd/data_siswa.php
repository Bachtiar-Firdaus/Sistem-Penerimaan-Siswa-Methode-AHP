<link href="assetss/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assetss/datatables/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="assetss/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

<?php
// Create database connection using config file
include_once("\insert\config.php");

// Fetch all tbl_cs data from database
// $result = mysqli_query($mysqli, "SELECT * FROM tbl_cs ORDER BY tot DESC limit 2");
$result = mysqli_query($mysqli, "SELECT * FROM tbl_cs2 where keterangan = 'diterima' ");
?> 
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

<h3>Data Siswa</h3><hr><br>

<form method="post" action="view_ps_uptd/sortir_data_siswa.php">

	<!-- <select name="keterangan">
  <option value="diterima">Diterima</option>
  <option value="menjahit">Menjahit</option>
  <option value="elektronik">Elektronik</option>
  <option value="motor">Motor</option>
</select> -->

<!-- <select name="nama">
  <option value="">Pilih nama</option>

  <?php

  include_once("\insert\config.php");
$result = mysqli_query($mysqli, "SELECT * FROM tbl_cs2 where keterangan = 'diterima' "); 




             while($user_data = mysqli_fetch_array($result)) {  ?>

    <option value="<?php  echo $user_data['nama'];?>"><?php  echo $user_data['nama'];?></option>

  <?php     
    }
  ?>
</select> -->


  <select name="jurusan">
  <option value="">Pilih Jurusan</option>
  <option value="Menjahit">Menjahit</option>
  <option value="Servis Elektronik">Servis Elektronik</option>
  <option value="Servis Motor">Servis Motor</option>
  <option value="Tata Rias">Tata Rias</option>
</select>

<!-- <input type="date" name="tanggal"> -->
<select name="tanggal">
  <option value="">Pilih Tahun</option>
  <option value="2019">2021</option>
  <option value="2019">2020</option>
  <option value="2019">2019</option>
  <option value="2018">2018</option>
  <option value="2017">2017</option>
  <option value="2016">2016</option>
  <option value="2016">2015</option>
  <option value="2016">2014</option>
</select>

<tr>
                <td><input class="btn btn-primary" type="submit" name="search" value="Sortir"></td>
            </tr>

</form><br><br>



<table id="example2" border="1" class="table table-bordered table-hover">
	<thead>
	<tr>
		
		<th>No</th>
    <!-- <th>ID</th> -->
    <th>Nomor Induk</th>

		<th>Nama</th>
		<th>Jurusan</th>
		<th>Kabupaten</th>
		<th>Keterangan</th>
		<th>Tanggal</th>
		<th>Aksi</th>
	</tr>

     </thead>
<tbody>
    <?php  
    // Create database connection using config file
include_once("\insert\config.php");

// Fetch all tbl_cs data from database
// $result = mysqli_query($mysqli, "SELECT * FROM tbl_cs ORDER BY tot DESC limit 2");
$result = mysqli_query($mysqli, "SELECT * FROM tbl_cs2 where keterangan = 'diterima' ");

    $no = "1";
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";     
        echo "<td>".$no++."</td>";
        // echo "<td> 00".$user_data['id']."</td>"; 
        echo "<td> 00".$user_data['nik']."</td>"; 
        echo "<td>".$user_data['nama']."</td>"; 
        echo "<td>".$user_data['jurusan']."</td>"; 
        echo "<td>".$user_data['alko']."</td>";  
        echo "<td>".$user_data['keterangan']."</td>";  
        // echo "<td>".$user_data['tanggal']."</td>"; 
        echo "<td>". date('Y',strtotime($user_data['tanggal']))."</td>";  
        echo "<td><a href='/siks_ahp/view_ps_uptd/edit_ds.php?id=$user_data[id]'>Edit</a> | <a href='/siks_ahp/view_ps_uptd/delete_ds.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </tbody>
</table><br><br>


<form method="post" action="view_ps_uptd/cetak_ds.php"> 
 
<select name="tanggal">
  <option value="">Pilih Tahun</option>
  <option value="2021">2021</option>
  <option value="2020">2020</option>
  <option value="2019">2019</option>
  <option value="2018">2018</option>
  <option value="2017">2017</option>
  <option value="2016">2016</option>
  <option value="2016">2015</option>
  <option value="2015">2014</option>
</select>

<input class="btn btn-primary" type="submit" name="cetak" value="Cetak">


</form>

<!-- <a href="view_ps_uptd\cetak_ds.php" class="btn btn-primary">Cetak</a> -->

</div>


