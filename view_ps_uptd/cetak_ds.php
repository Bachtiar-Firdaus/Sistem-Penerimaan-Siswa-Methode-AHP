<?php
// Create database connection using config file
include_once("config.php");

// Fetch all tbl_cs data from database
// $result = mysqli_query($mysqli, "SELECT * FROM tbl_cs2 ORDER BY id DESC");

if (isset($_POST['cetak'])) {
  // $jurusan = $_POST['jurusan'];
  // $nama = $_POST['nama'];
  $tanggal = $_POST['tanggal'];
  // $jurusan = $_POST['jurusan'];
  // $keterangan = $_POST['keterangan'];

  // $result = mysqli_query($mysqli, "SELECT * FROM tbl_cs ORDER BY tot DESC limit 2");

  $query = mysqli_query($mysqli, " SELECT * FROM tbl_cs2 WHERE year(tanggal) = '$tanggal' and keterangan = 'diterima'");

  // $query = mysqli_query($mysqli, "SELECT * FROM tbl_cs ORDER BY tot DESC limit 20");

  $count = mysqli_num_rows($query);
  $row_query = mysqli_fetch_array($query);

}

?>
<style type="text/css">
	table, td, th {  
  border: 1px solid black;
  text-align: left;
  padding: 10px;
}

table {
  border-collapse: collapse;
  width: 100%;
  overflow: scroll;
}

.containeredit{
    padding: 10px;
    text-align: -webkit-center;
  }

.cop{
    line-height: 6px;

  }
  .cop2{
    line-height: 2px;

  }
  .cop3{
    line-height: 4px;

  }
</style>

<div class="container" style="margin-top: 30px;" class="text-center">


       

<div class="row" style="height: 124px;">

  <h3 align="center" class="cop"><b>PEMERINTAH PROVINSI LAMPUNG</b></h3>
    <h3 align="center" class="cop"><b>DINAS SOSIAL</b></h3>
    <p align="center" class="cop2">Jalan Basuki Rahmat NO.72 Telp. (0721) 481600 Fax. (0721) 483692</p>
    <p align="center" class="cop2">http//dinsos.lampungprov.go.id</p>
    <p align="center" class="cop2">BANDAR LAMPUNG <?php echo "".date('Y', strtotime($row_query['tanggal'])).""; ?> </p>
    <p align="center" class="cop2" style="position: relative;
    top: -19px;
    right: -438px;"><b>Kode Pos :35215</b></p>


    

    <img src="../img/logo.jpg" style="position: relative;
    left: 157px;
    top: -136px;
    width: 91px;">
    
  </div>

  <hr style="height: 3px;
    background: black;">

    <h4 align="center" class="cop3"><u>LAPORAN DATA SISWA </u></h4>



<table id="example2" border="1" class="table table-bordered table-hover">
	<thead>
	<tr>
		
		<th>No</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Pendidikan Terakhir</th>

		<th>Desa</th>
		<th>Kecamatan </th>
		<th>Kabupaten</th>
		<th>No KK</th>
		<!-- <th>NIK</th> -->
		<th>Jurusan</th>
		<th>Asrama</th>
    <th>Keterangan</th>
    <th>Tahun</th>
	</tr>
     </thead>

     <tbody>
    <?php  
    include_once("config.php");

// Fetch all tbl_cs data from database
// $result = mysqli_query($mysqli, "SELECT * FROM tbl_kegiatan ORDER BY id_kegiatan DESC");

if (isset($_POST['cetak'])) {
  // $jurusan = $_POST['jurusan'];
  $tanggal = $_POST['tanggal'];
  // $nama_siswa = $_POST['nama_siswa'];

  // $result = mysqli_query($mysqli, "SELECT * FROM tbl_cs ORDER BY tot DESC limit 2");

  $query = mysqli_query($mysqli, " SELECT * FROM tbl_cs2 WHERE year(tanggal) = '$tanggal'");

  // $query = mysqli_query($mysqli, "SELECT * FROM tbl_cs ORDER BY tot DESC limit 20");

  $result = mysqli_num_rows($query);

  // $row_query = mysqli_fetch_array($query);

}
    $no = "1";
    while($user_data = mysqli_fetch_array($query)) {         
        echo "<tr>";     
        echo "<td>".$no++."</td>";
        echo "<td>".$user_data['nama']."</td>"; 
        echo "<td>".$user_data['jk']."</td>"; 
        echo "<td>".$user_data['pt']."</td>";   

        echo "<td>".$user_data['ald']."</td>";          
        echo "<td>".$user_data['alk']."</td>";          
        echo "<td>".$user_data['alko']."</td>";          
        echo "<td>".$user_data['nokk']."</td>";          
        // echo "<td>".$user_data['nik']."</td>";          
        echo "<td>".$user_data['jurusan']."</td>";          
        echo "<td>".$user_data['asrama']."</td>";           
        echo "<td>".$user_data['keterangan']."</td>";           
        // echo "<td>".$user_data['tanggal']."</td>"; 
        echo "<td>". date('Y',strtotime($user_data['tanggal']))."</td></tr>";           
    }
    ?>
    </tbody>
</table><br><br>

</div>


