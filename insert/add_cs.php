
<html>
<head>
    <title>Add Calon Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>


<body>
    <a class="btn btn-primary" href="http://localhost/program_april/dashboard.php?page=insert/calon_siswa">Go to Home</a>
    <br/><br/>
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
    <form action="add_cs.php" method="post" name="form1">

  <table border="1">
    <tr>
      <td colspan="2" rowspan="30" style="vertical-align: baseline;

      ">1</td>
      <td colspan="5">IDENTIFIKASI CALON SISWA</td>
    </tr>
    <tr>
      <td>1</td>
      <td>Nama</td>
      <td colspan="3">: <input type="text" name="nama"></td>
    </tr>
    <tr>
      <td>2</td>
      <td>Jenis Kelamin</td>
      <td colspan="3">:  <input type="text" name="jk"></td>
    </tr>
    <tr>
      <td>3</td>
      <td>Tempat tanggal lahir</td>
      <td colspan="3">:  <input type="text" name="ttl"></td>
    </tr>
    <tr>
      <td>4</td>
      <td>Agama</td>
      <td colspan="3">:  <input type="text" name="agama"></td>
    </tr>
    <tr>
      <td>5</td>
      <td>Suku</td>
      <td colspan="3">:  <input type="text" name="suku"></td>
    </tr>
    <tr>
      <td>6</td>
      <td>Bahasa sehari hari</td>
      <td colspan="3">:  <input type="text" name="bahasa"></td>
    </tr>
    <tr>
      <td>7</td>
      <td>Alamat Des/Kel</td>
      <td colspan="3">:  <input type="text" name="ald"></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: end;">Kec</td>
      <td colspan="3">:  <input type="text" name="alk"></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: end;">Kab/kota</td>
      <td colspan="3">:  <input type="text" name="alko"></td>
    </tr>
    
    
    <tr>
      <td>8</td>
      <td>lulus /tidak lulus, sampai kelas</td>
      <td>:   <input type="text" name="ltlsk"></td>
    </tr>

    <tr>
      <td>9</td>
      <td>Pendidikan Terakhir</td>
      <td colspan="3">: <input type="text" name="pt"></td>
    </tr>    
    <tr>
      <td>9</td>
      <td>ALASAN TIDAK LANJUT SEKOLAH</td>
      <td colspan="3">: <input type="text" name="atls"></td>
    </tr>


    <tr>
      <td>10</td>
      <td>Kebiasaan Merokok</td>
      <td colspan="3"><div class="form-group">
<label for="sel1">pilih jawaban</label>
<select class="form-control" id="sel1" name="km">
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
<select class="form-control" id="sel1" name="mn">
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
<select class="form-control" id="sel1" name="pb">
<option value="ya">ya</option>
<option value="tidak">tidak</option>
</select>
</div></td>
    </tr>

    <tr>
      <td>13</td>
      <td>Bila pernah, bekerja dimana</td>
      <td colspan="3">: <input type="text" name="bpbd"></td>
    </tr>

    



    <tr>
      <td>14</td>
      <td>Gajih / Perbulan</td>
      <td colspan="3">: <input type="text" name="gp"></td>
    </tr>

            <tr> 
                <td></td>
                <td><input class="btn btn-primary" type="submit" name="Submit" value="Add"></td>
            </tr>

  </table>
    </form>

    <?php

    // Check If form submitted, insert form data into tbl_cs table.
    if(isset($_POST['Submit'])) {
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
        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO tbl_cs(nama,jk,ttl,agama,suku,bahasa,ald,alk,alko,ltlsk,pt,atls,km,mn,pb,bpbd,gp) VALUES('$nama','$jk','$ttl','$agama','$suku','$bahasa','$ald','$alk','$alko','$ltlsk','$pt','$atls','$km','$mn','$pb','$bpbd','$gp')");

        // Show message when user added
        echo "User added successfully. <a href='http://localhost/program_april/dashboard.php?page=insert/calon_siswa'>View tbl_cs</a>";
    }
    ?>
</body>
</html>














