<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_kegiatan = $_POST['id_kegiatan'];

    $penilaian = $_POST['penilaian'];
    $materi_belajar = $_POST['materi_belajar'];
    $tanggall = $_POST['tanggall'];


    // update user data
    $result = mysqli_query($mysqli, "UPDATE tbl_kegiatan SET  penilaian ='$penilaian',materi_belajar ='$materi_belajar',tanggall ='$tanggall' WHERE id_kegiatan=$id_kegiatan");

    // Redirect to homepage to display updated user in list
    header("Location:http://localhost/siks_ahp/dashboard_pendamping.php?page=view_pendamping/keterampilan_menjahit");
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
    // $id = $user_data['id_kegiatan'];
    // $nik = $user_data['nik'];
    $nama_siswa = $user_data['nama_siswa'];
    $nama_pendamping = $user_data['nama_pendamping'];
    $materi_belajar = $user_data['materi_belajar'];
    $penilaian = $user_data['penilaian'];
    $tanggall = $user_data['tanggall'];

}
?>
<html>
<head>  
    <title>Edit Keterampilan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="margin-top: 30px;"> 
        <h3>Edit Kegiatan Siswa</h3><hr>
    <a class="btn btn-primary" href="http://localhost/siks_ahp/dashboard_pendamping.php?page=view_pendamping/keterampilan_menjahit"> << Kembali</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit_menjahit.php">

        

        <!-- <div class="form-group">
    <label for="exampleFormControlInput1">ID</label>
    <input type="text" class="form-control" id="exampleFormControlInput1"  name="id" value="<?php echo $id;?>">
  </div> -->

 <!--  <div class="form-group">
    <label for="exampleFormControlInput1">Nomor Induk</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="nik" value="<?php echo $nik;?>">
  </div> -->

            <div class="form-group">
    <label for="exampleFormControlInput1">Nama Siswa</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" disabled name="nama_siswa" value="<?php echo $nama_siswa;?>">
  </div>

  <!-- <div class="form-group">
    <label for="exampleFormControlInput1">Nama Pendamping</label>
    <input type="text" class="form-control" id="exampleFormControlInput1"  name="nama_pendamping" value=<?php echo $nama_pendamping;?>>
  </div> -->

  <div class="form-group">
    <label>Pilih pendamping</label>
<select class="form-control" name ="nama_pendamping" disabled>
   
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
    <label for="exampleFormControlInput1">Materi Belajar</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="materi_belajar" value="<?php echo $materi_belajar;?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Penilaian</label>

    <select class="form-control" name ="penilaian" >
   


    <option value="baik">Baik</option>
    <option value="cukup baik">Cukup Baik</option>
    <option value="sangat baik"> Sangat Baik</option>
    
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