
<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];
    $tot = $_POST['tot'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE tbl_cs SET  tot = '$tot' , keterangan = '$keterangan' , nama = '$nama' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: http://localhost/program_april/dashboard_ps_uptd.php?page=view_ps_uptd/perhitungan#");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM tbl_cs WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama'];
    $keterangan = $user_data['keterangan'];
    $tot = $user_data['tot'];

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
    <div class="container" style="margin-top: 30px;">
        <h2>Edit Keterangan Siswa dan Nilai Total Siswa</h2>
    <hr>


    <form name="update_user" method="post" action="edit_tot_cs.php">

      <label for="exampleFormControlInput1">Nama</label> 
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan nama siswa" name="nama" readonly value=<?php echo $nama;?>>

    <div class="form-group">
  <label for="sel1">Pilih keterangan :</label>
  <select class="form-control" id="sel1" name="keterangan">
    <option value="Belum diterima">Belum diterima</option>
    <option value="Diterima">Diterima</option>
  </select>
</div>

    <label for="exampleFormControlInput1">Total nilai</label> 
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan nilai total" name="tot" value=<?php echo $tot;?>>

      <!-- <td><input type="text" name="tot" value=<?php echo $tot;?>></td> -->

      <input class="btn btn-primary" type="submit" name="update" value="Update">
      <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
            
        
    </form>
</body>
</html>
