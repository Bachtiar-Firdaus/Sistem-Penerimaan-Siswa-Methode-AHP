<?php
// include database connection file
// include_once("config.php");

$databaseHost = 'localhost';
$databaseName = 'codegoo_ahp';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 



$result = mysqli_query($mysqli, "SELECT * FROM tbl_cs ORDER BY id DESC");
?>





<html>
<head>  
    <title>Edit User Data</title>

</head>

<body>
    <a href="http://localhost/program_april/dashboard_pendamping.php?page=view_pendamping/kelola_kegiatan"> << Home</a>
    <br/><br/>

    <form name="form1" method="post" action="view_pendamping/tambah_kegiatan.php">

<select name = "nama_siswa" >
    <option >pilih siswa</option>
    <?php while($user_data = mysqli_fetch_array($result)) {  ?>
    <option value="<?php  echo $user_data['nama'];?>"><?php  echo "<td>".$user_data['nama'];?></option>
    <?php     }
      ?>
</select><br><br>


            <div class="form-group">
    <label for="exampleFormControlInput1">Laporan Mental</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukan nama siswa" name="k_mental" value=""
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Laporan Sosial</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukan kegiatan mental" name="k_sosial" value=""
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Laporan Keterampilan</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukan kegiatan sosial" name="k_keterampilan" value="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Jurusan</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukan kegiatan keterampilan" name="jurusan" value="">

    <div class="form-group">
    <label for="exampleFormControlInput1">Tanggal</label>
    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="masukan jurusan" name="date" value="">
<br>
            <tr>
                <td><input type="hidden" name="id" value=""> </td>
                <td><input type="submit" name="submit" value="add"></td>
            </tr>
  
    </form>
<?php 

if(isset($_POST['submit'])) {
        $nama_siswa = $_POST['nama_siswa'];
        $k_mental = $_POST['k_mental'];
        $k_sosial = $_POST['k_sosial'];
        $k_keterampilan = $_POST['k_keterampilan'];
        $jurusan = $_POST['jurusan'];
        $tanggal = $_POST['date'];
        // include database connection file
        
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO tbl_kegiatan(nama_siswa,k_mental,k_sosial,k_keterampilan,jurusan,tanggal) VALUES('$nama_siswa','$k_mental','$k_sosial','$k_keterampilan','$jurusan','$tanggal')");

        // Show message when user added
        echo "User added successfully. <a href='http://localhost/program_april/dashboard_pendamping.php?page=view_pendamping/kelola_kegiatan'>View tbl_cs</a>";
    }
    else{
      echo "";
    }


?>


</body>
</html>