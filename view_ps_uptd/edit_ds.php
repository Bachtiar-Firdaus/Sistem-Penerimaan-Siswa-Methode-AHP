<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    $nik = $_POST['nik'];

    $nama = $_POST['nama'];
    $nokk = $_POST['nokk'];
    $nik = $_POST['nik'];
    $jurusan = $_POST['jurusan'];
    $asrama = $_POST['asrama'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE tbl_cs2 SET  nokk = '$nokk', nik = '$nik', jurusan = '$jurusan', asrama = '$asrama' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: http://localhost/siks_ahp/dashboard_ps_uptd.php?page=view_ps_uptd/data_siswa");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM tbl_cs2 WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama'];
    $nokk = $user_data['nokk'];
    $nik = $user_data['nik'];
    $jurusan = $user_data['jurusan'];
    $asrama = $user_data['asrama'];

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

    <title>Tambah data KK, NIK, Jurusan, Asrama</title>
  </head>
  <style> 
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
</style>

  <body>



    <div class="container" style="margin-top: 30px">
        <h2>Tambah data KK, NIK, Jurusan, Asrama</h2>
    <hr>
    <!-- <a class="btn btn-secondary" href="http://localhost/siks_ahp/dashboard_ps_uptd.php?page=view_ps_uptd/data_siswa"> << Home</a>
    <br/><br/> -->

    <form name="update_user" method="post" action="edit_ds.php">

            
    <label for="exampleFormControlInput1">Nama</label> 
    <input type="text" class="form-control" id="exampleFormControlInput1" disabled placeholder="Masukan nama siswa" name="nama" value="<?php echo $nama;?>">
  

  
    <label for="exampleFormControlInput1">No KK</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan nomor KK" name="nokk" value=<?php echo $nokk;?>>
  

  
    <label for="exampleFormControlInput1">Nomor Induk</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan nomor induk" name="nik" value=<?php echo $nik;?>>
  

  
    <div class="form-group">
  <label for="sel1">Pilih jurusan :</label>
  <select class="form-control" id="sel1" name="jurusan">
    <option value="Menjahit">Menjahit</option>
    <option value="Servis Elektronik">Servis Elektronik</option>
    <option value="Servis Motor">Servis Motor</option>
    <option value="Tata Rias">Tata Rias</option>
  </select>
</div>
  

  
    <label for="exampleFormControlInput1">Asrama</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan nama asrama" name="asrama" value=<?php echo $asrama;?>>
  

            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input class="btn btn-primary" type="submit" name="update" value="Update"></td>
            </tr>
  
    </form>
    </div>
</body>
</html>