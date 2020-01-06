<link href="assetss/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assetss/datatables/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="assetss/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

<?php
// include database connection file
// include_once("config.php");

$databaseHost = 'localhost';
$databaseName = 'codegoo_ahp';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 



$result = mysqli_query($mysqli, "SELECT * FROM tbl_cs2 where keterangan = 'diterima' ");
?>

<?php 

if(isset($_POST['submit'])) {
        $nama_siswa = $_POST['nama_siswa'];
        $nikk = $_POST['nikk'];
        $nama_pendamping = $_POST['nama_pendamping'];
        $k_mental = $_POST['k_mental'];
        $k_sosial = $_POST['k_sosial'];
        $k_keterampilan = $_POST['k_keterampilan'];
        $jurusann = $_POST['jurusann'];
        $tanggall = $_POST['tanggall'];
        // include database connection file
        
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO tbl_kegiatan(nama_siswa,nikk,nama_pendamping,k_mental,k_sosial,k_keterampilan,jurusann,tanggall) VALUES('$nama_siswa','$nikk','$nama_pendamping','$k_mental','$k_sosial','$k_keterampilan','$jurusann','$tanggall')"); 

        // Show message when user added

        header("Location:http://localhost/siks_ahp/dashboard_pendamping.php?page=view_pendamping/kelola_kegiatan");
        
        // echo "User added successfully. <a href='http://localhost/siks_ahp/dashboard_pendamping.php?page=view_pendamping/kelola_kegiatan'>View tbl_cs</a>";
    }


?>





<html>
<head>  
    <title>Edit User Data</title>

</head>

<body>
    <a class="btn btn-primary" href="http://localhost/siks_ahp/dashboard_pendamping.php?page=view_pendamping/kelola_kegiatan"> << Kembali</a>
    <br/><br/>

    <form name="form1" method="post" action="view_pendamping/tambah_kegiatan.php">

        <div class="form-group">
    <label>Pilih ID</label>
    <?php   
        $con = mysqli_connect("localhost","root","","codegoo_ahp");  
    ?>
<select class="form-control" name="id_kegiatan"  onchange='changeValue(this.value)' required id="id_kegiatan">

      

     <?php   
                          $query = mysqli_query($con, "select * from tbl_cs2 where keterangan = 'Diterima' ");  
                          $result = mysqli_query($con, "select * from tbl_cs2 where keterangan = 'Diterima' ");  
                          $a          = "var nama = new Array();\n;";  
                          $b          = "var nik = new Array();\n;";  
                          while ($row = mysqli_fetch_array($result)) {  
                               echo '<option name="id" value="'.$row['id'] . '">' . $row['id'] . '</option>';   
                          $a .= "nama['" . $row['id'] . "'] = {nama:'" . addslashes($row['nama'])."'};\n";  
                          $b .= "nik['" . $row['id'] . "'] = {nik:'" . addslashes($row['nik'])."'};\n";  
                          }  
                          ?> 


    
</select>
</div>

<div class="form-group">
    <label for="exampleFormControlInput1">Nama Siswa</label>
    <input type="text" class="form-control" id="nama" name="nama_siswa"> </div>

    <div class="form-group">
    <label for="exampleFormControlInput1">NIK</label>
    <input type="text" class="form-control" id="nik" name="nikk"> </div>





<!-- <div class="form-group">
    <label>Pilih siswa</label>
<select class="form-control" name = "nama_siswa" >
   
    <?php

    $databaseHost = 'localhost';
$databaseName = 'codegoo_ahp';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 



$result = mysqli_query($mysqli, "SELECT * FROM tbl_cs2 where keterangan = 'diterima' ");

 while($user_data = mysqli_fetch_array($result)) {  ?>
    <option value="<?php  echo $user_data['nama'];?>"><?php  echo "<td>".$user_data['nama'];?></option>
    <?php     }
      ?>
</select>
</div> -->

<div class="form-group">
    <label>Pilih pendamping</label>
<select class="form-control" name ="nama_pendamping" >
   
    <?php

    $databaseHost = 'localhost';
$databaseName = 'codegoo_ahp';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 



$result = mysqli_query($mysqli, "SELECT * FROM tbl_pendamping ORDER BY id DESC ");



     while($user_data = mysqli_fetch_array($result)) {  ?>
    <option value="<?php  echo $user_data['nama_pendamping'];?>"><?php  echo "<td>".$user_data['nama_pendamping'];?></option>
    <?php     }
      ?>
</select>
</div>


            <div class="form-group">
    <label for="exampleFormControlInput1">Bimbingan Keterampilan</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukan bimbingan keterampilan" name="k_mental" value=""> </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Bimbingan Mental</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukan bimbingan mental" name="k_sosial" value="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Bimbingan Sosial dan Fisik</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukan bimbingan sosial dan fisik" name="k_keterampilan" value="">
  </div>


    <div class="form-group">
    <label>Pilih Jurusan</label>
<select class="form-control" name = "jurusann" >
   
    
    <option value="menjahit">Menjahit</option>
    <option value="servis elektronik">Servis Elektronik</option>
    <option value="service motor">Servis Motor</option>
    <option value="tata rias">Tata Rias</option>
    
</select>
</div>

    <div class="form-group">
    <label for="exampleFormControlInput1">Tanggal</label>
    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="masukan jurusan" name="tanggall" >
<br>
            <tr>
                <td><input type="hidden" name="id_kegiatan" value=""> </td>
                <td><input class="btn btn-primary" type="submit" name="submit" value="Tambah"></td>
            </tr>

            <script type="text/javascript">   
                          <?php   
                          echo $a;   
                          echo $b; ?>  
                          function changeValue(id){  
                            document.getElementById('nama').value = nama[id].nama;  
                            document.getElementById('nik').value = nik[id].nik;  
                          };  
                          </script> 
  
    </form>




    <script src="jquery-3.4.1.min.js"></script>




</body>
</html>