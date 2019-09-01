<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
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
    $keterangan = "Belum diterima";
    $tanggal = $_POST['tanggal'];
    $nama_ayah = $_POST['nama_a'];
    $nama_ibu = $_POST['nama_i'];
    $umur_ayah = $_POST['umur_a'];
    $umur_ibu = $_POST['umur_i'];
    $agama_ayah = $_POST['agama_a'];
    $agama_ibu = $_POST['agama_i'];
    $alm_desa_ayah = $_POST['alamat_a_d'];
    $alm_kec_ayah = $_POST['alamat_a_kec'];
    $alm_kab_ayah = $_POST['alamat_a_kab'];
    $alm_desa_ibu = $_POST['alamat_i_d'];
    $alm_kec_ibu = $_POST['alamat_i_kec'];
    $alm_kab_ibu = $_POST['alamat_i_kab'];
    $pekerjaan_ayah = $_POST['pekerjaan_a'];
    $pekerjaan_ibu = $_POST['pekerjaan_i'];
    $jumlah_saudara = $_POST['jumlah_s'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE tbl_cs SET nama = '$nama',umur = '$umur', jk = '$jk', ttl = '$ttl', agama = '$agama', suku = '$suku', bahasa = '$bahasa', ald = '$ald', alk = '$alk', alko = '$alko', ltlsk = '$ltlsk', pt = '$pt', atls = '$atls', km = '$km', mn = '$mn', pb = '$pb', bpbd = '$bpbd', gp = '$gp', tanggal = '$tanggal', keterangan = '$keterangan',nama_ayah = '$nama_ayah',nama_ibu = '$nama_ibu',umur_ayah = '$umur_ayah',umur_ibu = '$umur_ibu',agama_ayah = '$agama_ayah',agama_ibu = '$agama_ibu',alm_desa_ayah = '$alm_desa_ayah',alm_kec_ayah = '$alm_kec_ayah',alm_kab_ayah = '$alm_kab_ayah',alm_desa_ibu = '$alm_desa_ibu',alm_kec_ibu = '$alm_kec_ibu',alm_kab_ibu = '$alm_kab_ibu',pekerjaan_ayah = '$pekerjaan_ayah',pekerjaan_ibu = '$pekerjaan_ibu',jumlah_saudara = '$jumlah_saudara' WHERE id=$id");

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
    $keterangan = $user_data['keterangan'];
    $tanggal = $user_data['tanggal'];

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
  <div class="container" style="margin-top:30px;">
    <h3>Edit Calon Siswa</h3><hr>
    <a class="btn btn-primary" href="http://localhost/program_april/dashboard.php?page=insert/calon_siswa">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit_cs.php">

        <table border="0">
          <!-- sadads -->
          <tr>
      <td rowspan="12">1</td>
      <td colspan="9">LATAR BELAKANG KELUARGA</td>


    </tr>


    <tr>
      <td>1</td>
      <td>Nama orang tua</td>
      <td>Ayah</td>
      <td><input type="text" name="nama_a"></td>
      <td>Ibu</td>
      <td><input type="text" name="nama_i"></td>
    </tr>

    <tr>
      <td>2</td>
      <td>Umur</td>
      <td>Ayah</td>
      <td><input type="text" name="umur_a"></td>
      <td>Tahun</td>
      <!-- <td><input type="text" name="umur_a_t"></td> -->
      <td>Ibu</td>
      <td><input type="text" name="umur_i"></td>
      <td>Tahun</td>
      <!-- <td><input type="text" name="umur_i_t"></td> -->
    </tr>

    <tr>
      <td>3</td>
      <td>Agama</td>
      <td>Ayah</td>
      <td> <input type="text" name="agama_a"></td>
      <td>Ibu</td>
      <td> <input type="text" name="agama_i"></td>
    </tr>

    <tr>
      <td>4</td>
      <td>Alamat</td>
      <td>Ayah</td>
      <td>Desa/kelurahan</td>
      <td><input type="text" name="alamat_a_d"></td>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td>Kec</td>
      <td><input type="text" name="alamat_a_kec"></td>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td>Kab/kota</td>
      <td><input type="text" name="alamat_a_kab"></td>
      <td></td>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td>Ibu</td>
      <td>Desa/kelurahan</td>
      <td><input type="text" name="alamat_i_d"></td>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td>Kec</td>
      <td><input type="text" name="alamat_i_kec"></td>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td>Kab/kota</td>
      <td><input type="text" name="alamat_i_kab"></td>
      <td></td>
    </tr>

    <tr>
      <td>5</td>
      <td>Pekerjaan</td>
      <td>Ayah</td>
      <td><input type="text" name="pekerjaan_a"></td>
      <td>Ibu</td>
      <td><input type="text" name="pekerjaan_i"></td>
    </tr>

    <tr>
      <td>6</td>
      <td>Jumlah saudara</td>
      <td><input type="text" name="jumlah_s"></td>
      <td>orang</td>
    </tr>
          <!-- sdasd -->
    <tr>
      <td colspan="2" rowspan="30" style="vertical-align: baseline;

      ">2</td>
      <td colspan="5">IDENTIFIKASI CALON SISWA</td>
    </tr>
    <tr>
      <td>1</td>
      <td>Nama</td>
      <td colspan="3">: <input type="text" value="<?php echo $nama;?>" name="nama"></td>
    </tr>
    <tr>
      <td>2</td>
      <td>Umur</td>
      <td colspan="3">: <input type="number" value="<?php echo $umur;?>" name="umur"></td>
    </tr>
    <tr>
      <td>3</td>
      <td>Jenis Kelamin</td>
      <td colspan="3">:  <input type="text" value="<?php echo $jk;?>" name="jk"></td>
    </tr>
    <tr>
      <td>4</td>
      <td>Tempat tanggal lahir</td>
      <td colspan="3">:  <input type="text" value= "<?php echo $ttl;?>" name="ttl"></td>
    </tr>
    <tr>
      <td>5</td>
      <td>Agama</td>
      <td colspan="3">:  <input type="text" value="<?php echo $agama;?>" name="agama"></td>
    </tr>
    <tr>
      <td>6</td>
      <td>Suku</td>
      <td colspan="3">:  <input type="text" value="<?php echo $suku;?>" name="suku"></td>
    </tr>
    <tr>
      <td>7</td>
      <td>Bahasa sehari hari</td>
      <td colspan="3">:  <input type="text" value="<?php echo $bahasa;?>" name="bahasa"></td>
    </tr>
    <tr>
      <td>8</td>
      <td>Alamat Des/Kel</td>
      <td colspan="3">:  <input type="text" value="<?php echo $ald;?>" name="ald"></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: end;">Kec</td>
      <td colspan="3">:  <input type="text" value="<?php echo $alk;?>" name="alk"></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: end;">Kab/kota</td>
      <td colspan="3">:  



        <!-- <select name="alko">
      <option value="menjahit">Menjahit</option>
      <option value="motor">Motor</option>
      <option value="elektronik">Elektronik</option>
    </select> -->

    <select name = "alko" >
<!-- <option >Hasil Perhitungan Kabupaten</option> -->
    <option value="lampung barat">Lampung Barat<option>
    <option value="lampung selatan">Lampung Selatan<option>
    <option value="lampung tengah">Lampung Tengah<option>
    <option value="lampung timur">Lampung Timur<option>
    <option value="lampung utara">Lampung Utara<option>
    <option value="mesuji">Mesuji<option>
    <option value="pesisir barat">Pesisir Barat<option>
    <option value="pringsewu">Pringsewu<option>
    <option value="tanggamus">Tanggamus<option>
    <option value="tulang bawang">Tulang Bawang<option>
    <option value="tulang bawang barat">Tulang Bawang barat<option>
    <option value="way kanan">Way Kanan<option>
    <option value="bandar lampung">Bandar Lampung<option>
    <option value="metro">Metro<option>
    <option value="pesawaran">Pesawaran<option>

</select>


  </td>
    </tr>

    
    
    
    <tr>
      <td>9</td>
      <td>lulus /tidak lulus, sampai kelas</td>
      <td>:<input type="text" value="<?php echo $ltlsk;?>" name="ltlsk"></td>
    </tr>

    <tr>
      <td>10</td>
      <td>Pendidikan Terakhir</td>
      <td colspan="3">: <input type="text" value="<?php echo $pt;?>"  name="pt"></td>
    </tr>    
    <tr>
      <td>11</td>
      <td>ALASAN TIDAK LANJUT SEKOLAH</td>
      <td colspan="3">: <input type="text" value="<?php echo $atls;?>" name="atls"></td>
    </tr>


    <tr>
      <td>12</td>
      <td>Kebiasaan Merokok</td>
      <td colspan="3"><div class="form-group">
<label for="sel1">pilih jawaban</label>
<select class="form-control" id="sel1" value="<?php echo $km;?>" name="km">
<option value="ya">ya</option>
<option value="tidak">tidak</option>
</select>
</div></td>
    </tr>
    <tr>
      <td>13</td>
      <td>Mengkonsumsi narkoba</td>
      <td colspan="3"><div class="form-group">
<label for="sel1">pilih jawaban</label>
<select class="form-control" id="sel1" value="<?php echo $mn;?>" name="mn">
<option value="ya">ya</option>
<option value="tidak">tidak</option>
</select>
</div></td>
    </tr>

    <tr>
      <td>14</td>
      <td>Pernah Bekerja</td>
      <td colspan="3"><div class="form-group">
<label for="sel1">pilih jawaban</label>
<select class="form-control" id="sel1" value="<?php echo $pb;?>" name="pb">
<option value="ya">ya</option>
<option value="tidak">tidak</option>
</select>
</div></td>
    </tr>

    <tr>
      <td>15</td>
      <td>Bila pernah, bekerja dimana</td>
      <td colspan="3">: <input type="text" value="<?php echo $bpbd;?>" name="bpbd"></td>
    </tr>

    



    <tr>
      <td>16</td>
      <td>Gajih / Perbulan</td>
      <td colspan="3">: <input type="text" value="<?php echo $gp;?>" name="gp"></td>
    </tr>

    <tr>
      <td>17</td>
      <td>Keterangan</td>
      <td colspan="3"><!--  <input type="text" value="<?php echo $keterangan;?>" name="keterangan"> -->

<div class="form-group">
  <label for="sel1">Pilih keterangan :</label>
  <select class="form-control" id="sel1" name="keterangan">
    <option value="Belum diterima">Belum diterima</option>
    <option value="Diterima">Diterima</option>
  </select>
</div>    
    </td>

    </tr>

    <tr>
      <td>18</td>
      <td>Tanggal masuk</td>
      <td colspan="3">: <input type="date" value="<?php echo $tanggal;?>" name="tanggal"></td>

  </tr>


            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input class="btn btn-primary" type="submit" name="update" value="Update"></td>
            </tr>
  
        </table>
    </form>
    </div>
</body>
</html>