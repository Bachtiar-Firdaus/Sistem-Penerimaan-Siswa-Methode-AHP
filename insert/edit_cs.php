<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $ttl = $_POST['ttl'];
    $agama = $_POST['agama'];
    $suku = $_POST['suku'];
    $bahasa = $_POST['bahasa'];
    $ald = $_POST['ald'];
    $alk = $_POST['alk'];
    $alko = $_POST['alko'];
    $ltlsk = $_POST['ltlsk'];
    $pt = $_POST['pt'];
    $atls = $_POST['atls'];
    $km = $_POST['km'];
    $mn = $_POST['mn'];
    $pb = $_POST['pb'];
    $bpbd = $_POST['bpbd'];
    $gp = $_POST['gp'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE tbl_cs SET nama = '$nama', jk = '$jk', ttl = '$ttl', agama = '$agama', suku = '$suku', bahasa = '$bahasa', ald = '$ald', alk = '$alk', alko = '$alko', ltlsk = '$ltlsk', pt = '$pt', atls = '$atls', km = '$km', mn = '$mn', pb = '$pb', bpbd = '$bpbd', gp = '$gp' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: http://localhost/program_april/dashboard.php?page=insert/calon_siswa");
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
    $jk = $user_data['jk'];
    $ttl = $user_data['ttl'];
    $agama = $user_data['agama'];
    $suku = $user_data['suku'];
    $bahasa = $user_data['bahasa'];
    $ald = $user_data['ald'];
    $alk = $user_data['alk'];
    $alko = $user_data['alko'];
    $ltlsk = $user_data['ltlsk'];
    $pt = $user_data['pt'];
    $atls = $user_data['atls'];
    $km = $user_data['km'];
    $mn = $user_data['mn'];
    $pb = $user_data['pb'];
    $bpbd = $user_data['bpbd'];
    $gp = $user_data['gp'];

}
?>
<html>
<head>  
    <title>Edit User Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
  overflow: scroll;
}

th, td {
  padding: 15px;
}
</style>

<body>
    <a class="btn btn-primary" href="http://localhost/program_april/dashboard.php?page=insert/calon_siswa">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit_cs.php">

        <table border="0">
    <tr>
      <td colspan="2" rowspan="30" style="vertical-align: baseline;

      ">1</td>
      <td colspan="5">IDENTIFIKASI CALON SISWA</td>
    </tr>
    <tr>
      <td>1</td>
      <td>Nama</td>
      <td colspan="3">: <input type="text" value=<?php echo $nama;?> name="nama"></td>
    </tr>
    <tr>
      <td>2</td>
      <td>Jenis Kelamin</td>
      <td colspan="3">:  <input type="text" value=<?php echo $jk;?> name="jk"></td>
    </tr>
    <tr>
      <td>3</td>
      <td>Tempat tanggal lahir</td>
      <td colspan="3">:  <input type="text" value=<?php echo $ttl;?> name="ttl"></td>
    </tr>
    <tr>
      <td>4</td>
      <td>Agama</td>
      <td colspan="3">:  <input type="text" value=<?php echo $agama;?> name="agama"></td>
    </tr>
    <tr>
      <td>5</td>
      <td>Suku</td>
      <td colspan="3">:  <input type="text" value=<?php echo $suku;?> name="suku"></td>
    </tr>
    <tr>
      <td>6</td>
      <td>Bahasa sehari hari</td>
      <td colspan="3">:  <input type="text" value=<?php echo $bahasa;?> name="bahasa"></td>
    </tr>
    <tr>
      <td>7</td>
      <td>Alamat Des/Kel</td>
      <td colspan="3">:  <input type="text" value=<?php echo $ald;?> name="ald"></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: end;">Kec</td>
      <td colspan="3">:  <input type="text" value=<?php echo $alk;?> name="alk"></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: end;">Kab/kota</td>
      <td colspan="3">:  <input type="text" value=<?php echo $alko;?> name="alko"></td>
    </tr>
    
    
    <tr>
      <td>8</td>
      <td>lulus /tidak lulus, sampai kelas</td>
      <td>:   <input type="text" value=<?php echo $ltlsk;?> name="ltlsk"></td>
    </tr>

    <tr>
      <td>9</td>
      <td>Pendidikan Terakhir</td>
      <td colspan="3">: <input type="text" value=<?php echo $pt;?>  name="pt"></td>
    </tr>    
    <tr>
      <td>9</td>
      <td>ALASAN TIDAK LANJUT SEKOLAH</td>
      <td colspan="3">: <input type="text" value=<?php echo $atls;?> name="atls"></td>
    </tr>


    <tr>
      <td>10</td>
      <td>Kebiasaan Merokok</td>
      <td colspan="3"><div class="form-group">
<label for="sel1">pilih jawaban</label>
<select class="form-control" id="sel1" value=<?php echo $km;?> name="km">
<option value="ya">ya</option>
<option value="tidak">tidak</option>
</select>
</div></td>
    </tr>
    <tr>
      <td>11</td>
      <td>Mengkonsumsi narkoba</td>
      <td colspan="3"><div class="form-group">
<label for="sel1">pilih jawaban</label>
<select class="form-control" id="sel1" value=<?php echo $mn;?> name="mn">
<option value="ya">ya</option>
<option value="tidak">tidak</option>
</select>
</div></td>
    </tr>

    <tr>
      <td>12</td>
      <td>Pernah Bekerja</td>
      <td colspan="3"><div class="form-group">
<label for="sel1">pilih jawaban</label>
<select class="form-control" id="sel1" value=<?php echo $pb;?> name="pb">
<option value="ya">ya</option>
<option value="tidak">tidak</option>
</select>
</div></td>
    </tr>

    <tr>
      <td>13</td>
      <td>Bila pernah, bekerja dimana</td>
      <td colspan="3">: <input type="text" value=<?php echo $bpbd;?> name="bpbd"></td>
    </tr>

    



    <tr>
      <td>14</td>
      <td>Gajih / Perbulan</td>
      <td colspan="3">: <input type="text" value=<?php echo $gp;?> name="gp"></td>
    </tr>


            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input class="btn btn-primary" type="submit" name="update" value="Update"></td>
            </tr>
  
        </table>
    </form>
</body>
</html>