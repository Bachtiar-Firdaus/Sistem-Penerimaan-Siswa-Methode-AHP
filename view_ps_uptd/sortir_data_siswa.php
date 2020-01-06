<?php

include_once("config.php");

if (!$mysqli) {
  die("connection failed:" .mysqli_connect_error());

}

if (isset($_POST['search'])) {
  // $jurusan = $_POST['jurusan'];
  // $nama = $_POST['nama'];
  $tanggal = $_POST['tanggal'];
  $jurusan = $_POST['jurusan'];
  // $keterangan = $_POST['keterangan'];

  // $result = mysqli_query($mysqli, "SELECT * FROM tbl_cs ORDER BY tot DESC limit 2");

  $query = mysqli_query($mysqli, " SELECT * FROM tbl_cs2 WHERE year(tanggal) = '$tanggal' and keterangan = 'diterima' and jurusan = '$jurusan'");

  // $query = mysqli_query($mysqli, "SELECT * FROM tbl_cs ORDER BY tot DESC limit 20");

  $count = mysqli_num_rows($query);
  $row_query = mysqli_fetch_array($query);

}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

    <title>Sortir Data Siswa Perjurusan Dan Pertanggal</title>
  </head>
  <body>
    <style type="text/css">
  table, td, th {  
  border: 1px solid black;
  padding: 10px;
  text-align: left;
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




<br>



<table id="example2" border="1" class="table table-bordered table-hover">
  <thead>
  <tr>
    
    <th>No</th>
    <th>ID</th>
    <th>Nomor Induk</th>
    <th>Nama</th>
    <th>Jurusan</th>
    <th>Kabupaten</th>
    <th>Keterangan</th>
    <th>Tahun</th>

  </tr>
  </thead>

  <tbody>

    <?php  
    include_once("config.php");

if (!$mysqli) {
  die("connection failed:" .mysqli_connect_error());

}

if (isset($_POST['search'])) {
  // $jurusan = $_POST['jurusan'];
  // $nama = $_POST['nama'];
  $tanggal = $_POST['tanggal'];
  $jurusan = $_POST['jurusan'];
  // $keterangan = $_POST['keterangan'];

  // $result = mysqli_query($mysqli, "SELECT * FROM tbl_cs ORDER BY tot DESC limit 2");

  $query = mysqli_query($mysqli, " SELECT * FROM tbl_cs2 WHERE year(tanggal) = '$tanggal' and keterangan = 'diterima' and jurusan = '$jurusan'");

  // $query = mysqli_query($mysqli, "SELECT * FROM tbl_cs ORDER BY tot DESC limit 20");

  $count = mysqli_num_rows($query);
}

    $no = "1";
    while($row = mysqli_fetch_array($query)) {         
        echo "<tr>";     
        echo "<td>".$no++."</td>";
        echo "<td> 00".$row['id']."</td>"; 
        echo "<td> 00".$row['nik']."</td>"; 
        echo "<td>".$row['nama']."</td>"; 
        echo "<td>".$row['jurusan']."</td>"; 
        echo "<td>".$row['alko']."</td>"; 
        echo "<td>".$row['keterangan']."</td>"; 
        // echo "<td>".$row['tanggal']."</td></tr>"; 
        echo "<td>". date('Y',strtotime($row['tanggal']))."</td></tr>";   
        // echo "<td><a href='/siks_ahp/view_pendamping/edit_kk.php?id=$user_data[id]'>Edit</a></tr>";        
    }
    ?>
    
  
  </tbody>
</table><br><br>

<!-- <a href="view_pendamping\cetak_kk.php" class="btn btn-primary">Cetak</a> -->

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>