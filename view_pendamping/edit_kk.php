<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $lm = $_POST['lm'];
    $lk = $_POST['lk'];
    $ls = $_POST['ls'];


    // update user data
    $result = mysqli_query($mysqli, "UPDATE tbl_cs SET  lk = '$lk', lm = '$lm', ls = '$ls' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location:http://localhost/program_april/dashboard_pendamping.php?page=view_pendamping/kelola_kegiatan");
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
    $lm = $user_data['lm'];
    $lk = $user_data['lk'];
    $ls = $user_data['ls'];

}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="http://localhost/program_april/dashboard.php?page=insert/calon_siswa">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit_kk.php">
            <div class="form-group">
    <label for="exampleFormControlInput1">Laporan Mental</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="jenis surat" name="lm" value=<?php echo $lm;?>>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Laporan Sosial</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="jenis surat" name="ls" value=<?php echo $ls;?>>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Laporan Keterampilan</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="jenis surat" name="lk" value=<?php echo $lk;?>>
  </div>

            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
  
    </form>
</body>
</html>