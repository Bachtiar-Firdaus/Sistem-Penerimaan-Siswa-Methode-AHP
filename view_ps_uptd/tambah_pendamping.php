<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Tambah data pendamping</title>
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
        <h2>Tambah data pendamping</h2>
    <hr>
    <!-- <a class="btn btn-secondary" href="http://localhost/siks_ahp/dashboard_ps_uptd.php?page=view_ps_uptd/data_siswa"> << Home</a>
    <br/><br/> -->

    <form name="update_user" method="post" action="tambah_pendamping.php">

            
    <label for="exampleFormControlInput1">Nama Pendamping</label> 
    <input type="text" class="form-control" id="exampleFormControlInput1"  placeholder="Masukan nama pendamping" name="nama_pendamping">
  

  
    <label for="exampleFormControlInput1">Jurusan</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Jurusan" name="jurusan">
  

  
    <!-- <label for="exampleFormControlInput1">NIK</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan nomor nik" name="nik" value=<?php echo $nik;?>> -->
  

  
    <label for="exampleFormControlInput1">Jumlah Jam</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan jumlah jam" name="jumlah_jam">
  

  
    <label for="exampleFormControlInput1">Honor</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Honor" name="honor">
  

            <tr>
                <td></td>
                <td><input class="btn btn-primary" type="submit" name="Submit" value="Tambah"></td>
            </tr>
  
    </form>
    </div>

    <?php

    // Check If form submitted, insert form data into tbl_cs table.
    if(isset($_POST['Submit'])) {
        $nama_pendamping = $_POST['nama_pendamping'];
        $jurusan = $_POST['jurusan'];
        $jumlah_jam = $_POST['jumlah_jam'];
        $honor = $_POST['honor'];
        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO tbl_pendamping(nama_pendamping,jurusan,jumlah_jam,honor) VALUES('$nama_pendamping','$jurusan','$jumlah_jam','$honor')");

        // Show message when user added

        header("Location: http://localhost/siks_ahp/dashboard_ps_uptd.php?page=view_ps_uptd/rekapan_honor_pendamping");
        
        // echo "User added successful ly. <a href='http://localhost/siks_ahp/dashboard_ps_uptd.php?page=view_ps_uptd/rekapan_honor_pendamping'>View tbl_cs</a>";
    }
    ?>

</body>
</html>