<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $nama = $_POST['nama'];
    $nokk = $_POST['nokk'];
    $nik = $_POST['nik'];
    $jurusan = $_POST['jurusan'];
    $asrama = $_POST['asrama'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE tbl_cs SET  nokk = '$nokk', nik = '$nik', jurusan = '$jurusan', asrama = '$asrama' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: http://localhost/program_april/dashboard_ps_uptd.php?page=view_ps_uptd/data_siswa");
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
    $nokk = $user_data['nokk'];
    $nik = $user_data['nik'];
    $jurusan = $user_data['jurusan'];
    $asrama = $user_data['asrama'];

}
?>
<html>
<head>  
    <title>Edit User Data</title>
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
    <a href="http://localhost/program_april/dashboard.php?page=insert/calon_siswa">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit_ds.php">

            
    <label for="exampleFormControlInput1">Nama</label> 
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan nama siswa" name="nama" value=<?php echo $nama;?>>
  

  
    <label for="exampleFormControlInput1">No kk</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan nomor KK" name="nokk" value=<?php echo $nokk;?>>
  

  
    <label for="exampleFormControlInput1">Nik</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan nomor nik" name="nik" value=<?php echo $nik;?>>
  

  
    <label for="exampleFormControlInput1">Jurusan</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan nama jurusan" name="jurusan" value=<?php echo $jurusan;?>>
  

  
    <label for="exampleFormControlInput1">Asrama</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan nama asrama" name="asrama" value=<?php echo $asrama;?>>
  

            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
  
    </form>
</body>
</html>