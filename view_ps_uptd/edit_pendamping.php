<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $nama_pendamping = $_POST['nama_pendamping'];
    $jurusan = $_POST['jurusan'];
    $jumlah_jam = $_POST['jumlah_jam'];
    $honor = $_POST['honor'];
    // $asrama = $_POST['asrama'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE tbl_pendamping SET  nama_pendamping = '$nama_pendamping', jurusan = '$jurusan', jumlah_jam = '$jumlah_jam', honor = '$honor' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: http://localhost/siks_ahp/dashboard_ps_uptd.php?page=view_ps_uptd/rekapan_honor_pendamping");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM tbl_pendamping WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $nama_pendamping = $user_data['nama_pendamping'];
    $jurusan = $user_data['jurusan'];
    $jumlah_jam = $user_data['jumlah_jam'];
    $honor = $user_data['honor'];
    // $asrama = $user_data['asrama'];

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

    <title>Edit Pendamping</title>
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
        <h2>Edit Pendamping</h2>
    <hr>
    <!-- <a class="btn btn-secondary" href="http://localhost/siks_ahp/dashboard_ps_uptd.php?page=view_ps_uptd/data_siswa"> << Home</a>
    <br/><br/> -->

    <form name="update_user" method="post" action="edit_pendamping.php">

            
    <label for="exampleFormControlInput1">Nama Pendamping</label> 
    <input type="text" class="form-control" id="exampleFormControlInput1"  placeholder="Masukan nama pendamping" name="nama_pendamping" value="<?php echo $nama_pendamping;?>">
  

  
    <label for="exampleFormControlInput1">Jurusan</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan jurusan" name="jurusan" value=<?php echo $jurusan;?>>
  

  
    <!-- <label for="exampleFormControlInput1">NIK</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan nomor nik" name="nik" value=<?php echo $nik;?>> -->
  

  
    <!-- <div class="form-group">
  <label for="sel1">Pilih jurusan :</label>
  <select class="form-control" id="sel1" name="jurusan">
    <option value="Menjahit">Menjahit</option>
    <option value="Servis Elektronik">Servis Elektronik</option>
    <option value="Servis Motor">Servis Motor</option>
    <option value="Tata Rias">Tata Rias</option>
  </select>
</div> -->
  

  
    <label for="exampleFormControlInput1">Jumlah jam</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan jumlah_jam" name="jumlah_jam" value=<?php echo $jumlah_jam;?>>

    <label for="exampleFormControlInput1">Honor</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan honor" name="honor" value=<?php echo $honor;?>>
  

            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input class="btn btn-primary" type="submit" name="update" value="Update"></td>
            </tr>
  
    </form>
    </div>
</body>
</html>