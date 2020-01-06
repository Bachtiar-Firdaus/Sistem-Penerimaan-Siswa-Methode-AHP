<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_kegiatan = $_POST['id_kegiatan'];
    // $nik = $_POST['nik'];

    $nama_siswa = $_POST['nama_siswa'];
    $nama_pendamping = $_POST['nama_pendamping'];
    $k_mental = $_POST['k_mental'];
    $k_sosial = $_POST['k_sosial'];
    $k_keterampilan = $_POST['k_keterampilan'];
    $jurusan = $_POST['jurusan'];
    $tanggall = $_POST['tanggall'];


    // update user data
    $result = mysqli_query($mysqli, "UPDATE tbl_kegiatan SET  nama_siswa ='$nama_siswa',nama_pendamping ='$nama_pendamping', k_mental = '$k_mental', k_sosial = '$k_sosial', k_keterampilan = '$k_keterampilan', jurusan = '$jurusan',tanggall = '$tanggall' WHERE id_kegiatan=$id_kegiatan");

    // Redirect to homepage to display updated user in list
    header("Location:http://localhost/siks_ahp/dashboard_pendamping.php?page=view_pendamping/kelola_kegiatan");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_kegiatan = $_GET['id_kegiatan'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM tbl_kegiatan WHERE id_kegiatan=$id_kegiatan");

while($user_data = mysqli_fetch_array($result))
{
    // $nik = $user_data['nik'];
    $nama_siswa = $user_data['nama_siswa'];
    $nama_pendamping = $user_data['nama_pendamping'];
    $k_mental = $user_data['k_mental'];
    $k_sosial = $user_data['k_sosial'];
    $k_keterampilan = $user_data['k_keterampilan'];
    $jurusan = $user_data['jurusann'];
    $tanggall = $user_data['tanggall'];

}
?>
<html>
<head>  
    <title>Edit User Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="margin-top: 30px;"> 
        <h3>Edit Kegiatan Siswa</h3><hr>
    <a class="btn btn-primary" href="http://localhost/siks_ahp/dashboard_pendamping.php?page=view_pendamping/kelola_kegiatan"> << Kembali</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit_kk.php">

        

        <div class="form-group">
    <label for="exampleFormControlInput1">Nama Siswa</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" disabled placeholder="Masukan kegiatan mental" name="nama_siswa" value="<?php echo $nama_siswa;?>">
  </div>

  <!-- <div class="form-group">
    <label for="exampleFormControlInput1">Nama pendamping</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan nama_pendamping" name="nama_pendamping" value="<?php echo $nama_pendamping;?>">
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
    <label for="exampleFormControlInput1">Bimbingan Ketrampilan</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan kegiatan mental" name="k_mental" value="<?php echo $k_mental;?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Bimbingan Mental</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan kegiatan sosial" name="k_sosial" value=<?php echo $k_sosial;?>>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Bimbingan Sosial dan Fisik</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukan kegiatan keterampilan" name="k_keterampilan" value="<?php echo $k_keterampilan;?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Jurusan</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan jurusan" name="jurusan" value=<?php echo $jurusan;?>>
 
</select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Tanggal</label>
    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Tanggal" name="tanggall" value=<?php echo $tanggall;?> >
  </div>

            <tr>
                <td><input type="hidden" name="id_kegiatan" value=<?php echo $_GET['id_kegiatan'];?>></td>
                <td><input class="btn btn-primary" type="submit" name="update" value="Update"></td>
            </tr>
  
    </form>
    </div>
</body>
</html>