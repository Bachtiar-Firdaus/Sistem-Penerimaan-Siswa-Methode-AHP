<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 -->
<?php
// Create database connection using config file
include_once("config.php");

// Fetch all tbl_cs data from database
// $result = mysqli_query($mysqli, "SELECT * FROM tbl_kegiatan ORDER BY id_kegiatan DESC");

if (isset($_POST['cetak'])) {
  // $jurusan = $_POST['jurusan'];
  $tanggall = $_POST['tanggall'];
  // $nama_siswa = $_POST['nama_siswa'];

  // $result = mysqli_query($mysqli, "SELECT * FROM tbl_cs ORDER BY tot DESC limit 2");

  $query = mysqli_query($mysqli, " SELECT * FROM tbl_kegiatan WHERE year(tanggall) = '$tanggall' ");

  // $query = mysqli_query($mysqli, "SELECT * FROM tbl_cs ORDER BY tot DESC limit 20");

  // $count = mysqli_num_rows($query);

  $row_query = mysqli_fetch_array($query);

}

?>


<style type="text/css">

  table, tr,td,th{
    border :1px solid black;
    padding: 10px;
    border-collapse: collapse;

  }
  
  .containeredit{
    padding: 10px;
    text-align: -webkit-center;
  }
  .modal-dialog{
    width:90%;
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
    <p align="center" class="cop2">BANDAR LAMPUNG <?php echo "".date('Y', strtotime($row_query['tanggall'])).""; ?> </p>
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

    <h4 align="center" class="cop3"><u>LAPORAN PETUGAS PENDAMPING </u></h4>






<table style="margin: auto;">
  <thead>
  <tr>
    
    <th rowspan="2">No</th>
    <th rowspan="2">Nama</th>
    <th rowspan="2">Bimbingan Sosial dan Fisik</th>
    <th rowspan="2">Bimbingan Keterampilan</th>
    <th rowspan="2">Bimbingan Mental</th>
    <th rowspan="2">Jurusan</th>
    <th rowspan="2">Tahun</th>

  </tr>
  </thead>
  <tbody>
  <tr>
    <?php  
    include_once("config.php");

// Fetch all tbl_cs data from database
// $result = mysqli_query($mysqli, "SELECT * FROM tbl_kegiatan ORDER BY id_kegiatan DESC");

if (isset($_POST['cetak'])) {
  // $jurusan = $_POST['jurusan'];
  $tanggall = $_POST['tanggall'];
  // $nama_siswa = $_POST['nama_siswa'];

  // $result = mysqli_query($mysqli, "SELECT * FROM tbl_cs ORDER BY tot DESC limit 2");

  $query = mysqli_query($mysqli, " SELECT * FROM tbl_kegiatan WHERE year(tanggall) = '$tanggall' ");

  // $query = mysqli_query($mysqli, "SELECT * FROM tbl_cs ORDER BY tot DESC limit 20");

  $result = mysqli_num_rows($query);

  // $row_query = mysqli_fetch_array($query);

}
    $no = "1";
    while($user_data = mysqli_fetch_array($query)) {         
        echo "<tr>";     
        echo "<td>".$no++."</td>";
        echo "<td>".$user_data['nama_siswa']."</td>"; 
        echo "<td>".$user_data['k_keterampilan']."</td>"; 
        echo "<td>".$user_data['k_mental']."</td>"; 
        echo "<td>".$user_data['k_sosial']."</td>";        
        echo "<td>".$user_data['jurusann']."</td>";        
        // echo "<td>".$user_data['tanggal']."</td></tr>"; 
        echo "<td>". date('Y',strtotime($user_data['tanggall']))."</td></tr>";  
    }
    ?>
    
  </tr>
  </tbody>
</table>

<br><br>


</div>


