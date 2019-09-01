<?php

include_once("config.php");

if (!$mysqli) {
  die("connection failed:" .mysqli_connect_error());

}

if (isset($_POST['search'])) {
  // $jurusan = $_POST['jurusan'];
  $tanggal = $_POST['tanggal'];

  // $result = mysqli_query($mysqli, "SELECT * FROM tbl_cs ORDER BY tot DESC limit 2");

  $query = mysqli_query($mysqli, " SELECT * FROM tbl_cs WHERE tanggal = '$tanggal' AND keterangan = 'diterima' ");

  // $query = mysqli_query($mysqli, "SELECT * FROM tbl_cs ORDER BY tot DESC limit 20");

  $count = mysqli_num_rows($query);

}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
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

<p align="center">INFORMASI SISWA</p>
<!-- <p align="center">BIMBINGAN KETERAMPILAN </p> -->
<p align="center">UPTD PSBR RADIN INTAN LAMPUNG</p>



<br>



<table id="example2" border="1" class="table table-bordered table-hover">
  <thead>
  <tr>
    
    <th>No</th>
    <th>Nama</th>
    <th>Jurusan</th>
    <th>Kabupaten</th>
    <th>Keterangan</th>
    <th>Tanggal</th>

  </tr>
  </thead>

  <tbody>

    <?php  
    $no = "1";
    while($row = mysqli_fetch_array($query)) {         
        echo "<tr>";     
        echo "<td>".$no++."</td>";
        // echo "<td>".$user_data['id_kegiatan']."</td>"; 
        echo "<td>".$row['nama']."</td>"; 
        echo "<td>".$row['jurusan']."</td>"; 
        echo "<td>".$row['alko']."</td>"; 
        echo "<td>".$row['keterangan']."</td>"; 
        echo "<td>".$row['tanggal']."</td></tr>";  
        // echo "<td><a href='/program_april/view_pendamping/edit_kk.php?id=$user_data[id]'>Edit</a></tr>";        
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