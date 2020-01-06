  <?php

  include_once("config.php");

  if (!$mysqli) {
    die("connection failed:" .mysqli_connect_error());

  }

  if (isset($_POST['search'])) {
    $nama_siswa = $_POST['nama_siswa'];
    $nama_pendamping = $_POST['nama_pendamping'];
    $tanggall = $_POST['tanggall'];
    // $nama_siswa = $_POST['nama_siswa'];

    // $result = mysqli_query($mysqli, "SELECT * FROM tbl_cs ORDER BY tot DESC limit 2");

    $query = mysqli_query($mysqli, " SELECT * FROM tbl_kegiatan WHERE nama_siswa = '$nama_siswa' and nama_pendamping = '$nama_pendamping' and year(tanggall) = '$tanggall' ");

//     $query = mysqli_query($mysqli,"SELECT tbl_cs2.nik, tbl_kegiatan.id_kegiatan, tbl_kegiatan.nama_siswa,tbl_kegiatan.nama_pendamping,tbl_kegiatan.materi_kegiatan,tbl_kegiatan.penilaian,tbl_kegiatan.tanggal
// FROM tbl_kegiatan
// INNER JOIN tbl_cs2
// ON tbl_cs2.id=tbl_kegiatan.id_kegiatan  WHERE nama_siswa = '$nama_siswa' and nama_pendamping = '$nama_pendamping' and year(tanggal) = '$tanggal' ");

    // $query = mysqli_query($mysqli, "SELECT * FROM tbl_cs ORDER BY tot DESC limit 20");

    // $count = mysqli_num_rows($query);

    $row_query = mysqli_fetch_array($query);

    // echo "".$row_query['nama_siswa']."";

    // echo "".date('Y',strtotime($row_query['tanggall']))."";
    // echo $row_query['nama_pendamping'];

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

      <title>Kadis Sos Prov</title>
    </head>
    <body>


      <style>

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
    }.cop{
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
    <p align="center" class="cop2">BANDAR LAMPUNG TAHUN  


      <?php echo "".date('Y',strtotime($row_query['tanggall'])).""; ?>
        




      </p>
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

      <h4 align="center" class="cop3">Laporan Hasil Belajar Siswa</h4>
      <h4 align="center" class="cop3"> Nama Pembimbing : <?php echo $row_query['nama_pendamping']; ?></h4>
      <h4 align="center" class="cop3"> Tahun :
        <?php echo "".date('Y',strtotime($row_query['tanggall'])).""; ?>
          </h4>
      




  <br>



  <table id="example2" border="1" class="table table-bordered table-hover">
    <thead>
    <tr>
      
      <th>No</th>
      <!-- <th>ID</th> -->
      <!-- <th>No Induk</th> -->
      <!-- <th>Nama Siswa</th> -->
      <!-- <th>Nama Pendamping</th> -->
      <th>Materi Belajar</th>
      <th>Penilaian</th>
      <!-- <th>Tanggal</th> -->

    </tr>
    </thead>

    <tbody>

      <?php  

      

  include_once("config.php");

  if (!$mysqli) {
    die("connection failed:" .mysqli_connect_error());

  }

  if (isset($_POST['search'])) {
   

    $nama_pendamping = $_POST['nama_pendamping'];
    $tanggall = $_POST['tanggall'];
    $lt = $_POST['lt'];

    // $nama_siswa = $_POST['nama_siswa'];

    // $result = mysqli_query($mysqli, "SELECT * FROM tbl_cs ORDER BY tot DESC limit 2");

    // $query = mysqli_query($mysqli, " SELECT * FROM tbl_kegiatan WHERE tanggal = '$tanggal' and nama_siswa = '$nama_siswa' and nama_pendamping='$nama_pendamping' ");



//     $query = mysqli_query($mysqli,"SELECT tbl_cs2.nik, tbl_kegiatan.id_kegiatan, tbl_kegiatan.nama_siswa,tbl_kegiatan.nama_pendamping,tbl_kegiatan.materi_kegiatan,tbl_kegiatan.penilaian,tbl_kegiatan.tanggal
// FROM tbl_cs2
// INNER JOIN tbl_kegiatan
// ON tbl_cs2.id=tbl_kegiatan.id_kegiatan  WHERE nama_siswa = '$nama_siswa' and nama_pendamping = '$nama_pendamping' and tanggal = '$tanggal' ");

//     $query = mysqli_query($mysqli,"SELECT tbl_cs2.nik, tbl_kegiatan.id_kegiatan, tbl_kegiatan.nama_siswa,tbl_kegiatan.nama_pendamping,tbl_kegiatan.materi_kegiatan,tbl_kegiatan.penilaian,tbl_kegiatan.tanggal
// FROM tbl_cs2
// INNER JOIN tbl_kegiatan
// ON tbl_cs2.id=tbl_kegiatan.id_kegiatan  WHERE nama_siswa = '$nama_siswa' and nama_pendamping = '$nama_pendamping' and tanggal = '$tanggal' ");

    $result = mysqli_query($mysqli,"SELECT tbl_cs2.nik, tbl_kegiatan.id_kegiatan,tbl_kegiatan.nikk, tbl_kegiatan.nama_siswa,tbl_kegiatan.nama_pendamping,tbl_kegiatan.penilaian,tbl_kegiatan.materi_belajar,tbl_kegiatan.tanggall
FROM tbl_cs2
INNER JOIN tbl_kegiatan
ON tbl_cs2.id=tbl_kegiatan.id_kegiatan where nama_pendamping = '$nama_pendamping'  ");

    $result2 = mysqli_query($mysqli, "SELECT DISTINCT nama_siswa FROM tbl_kegiatan where nama_siswa ='$nama_siswa' ");


    // $query = mysqli_query($mysqli, "SELECT * FROM tbl_cs ORDER BY tot DESC limit 20");

    // $count = mysqli_num_rows($query);

    // $row_query = mysqli_fetch_array($query);

  }

  $row_query = mysqli_fetch_array($result2);
  // $row_query2 = mysqli_fetch_array($result);

  echo "Nama Siswa :".$row_query['nama_siswa']."<br><br>";
// echo $row_query2['nik'];




      $no = "1";
      while($row = mysqli_fetch_array($result)) {         
          echo "<tr>";     
          echo "<td>".$no++."</td>";
          // echo "<td> 00".$row['id_kegiatan']."</td>"; 
          // echo "<td>".$row['nikk']."</td>"; 
          // echo "<td>".$row['nama_siswa']."</td>"; 
          // echo "<td>".$row['nama_pendamping']."</td>"; 
          echo "<td>".$row['materi_belajar']."</td>"; 
          echo "<td>".$row['penilaian']."</td>"; 
          // echo "<td>".$row['k_keterampilan']."</td>"; 
          // echo "<td>".$row['jurusan']."</td>"; 
          // echo "<td>". date('Y',strtotime($row['tanggal']))."</td></tr>";  
          // echo "<td>".$row['tanggal']."</td></tr>";  
          // echo 'Nama: ' . $row['nama'] . ' Tanggal : ' . date('d/m/Y', strtotime($row['tgl_trx'])) . '<br/>';
          // echo "<td><a href='/program_april/view_pendamping/edit_kk.php?id=$user_data[id]'>Edit</a></tr>";        
      }

      

      ?>
      <tr>
        <td colspan="2">Hasil Akhir</td>
        <td colspan="2">

           <?php echo $lt; ?>
          

        </td>
      </tr>
    
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