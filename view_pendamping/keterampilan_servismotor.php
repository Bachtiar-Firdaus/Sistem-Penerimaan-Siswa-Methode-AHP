<?php
include_once("\insert\config.php");
$result = mysqli_query($mysqli, "SELECT * FROM tbl_kegiatan ORDER BY id_kegiatan DESC");
?>


<style type="text/css">
  tr, td,th{
    padding: 10px;
  }
  .containeredit{
    padding: 20px;
  }
  .modal-dialog{
    width:90%;
  }
</style>



<div class="containeredit" style="overflow: scroll;">

  <h2>Keterampilan Servis Motor</h2> <hr>

  <form method="post" action="view_pendamping/sortir_servismotor.php">

<select name="nama_siswa">
  <option value="">Pilih nama siswa</option>

  <?php

  include_once("\insert\config.php");
$result = mysqli_query($mysqli, "SELECT DISTINCT nama_siswa FROM tbl_kegiatan where jurusann ='servis motor'  order by id_kegiatan ASC; "); 




             while($user_data = mysqli_fetch_array($result)) {  ?>

    <option value="<?php  echo $user_data['nama_siswa'];?>"><?php  echo $user_data['nama_siswa'];?></option>

  <?php     
    }
  ?>
</select>

<select name="nama_pendamping">
  <option value="">Pilih nama pendamping</option>

  <?php

  include_once("\insert\config.php");
$result = mysqli_query($mysqli, "SELECT DISTINCT nama_pendamping FROM tbl_kegiatan order by id_kegiatan ASC; "); 




             while($user_data = mysqli_fetch_array($result)) {  ?>

    <option value="<?php  echo $user_data['nama_pendamping'];?>"><?php  echo $user_data['nama_pendamping'];?></option>

  <?php     
    }
  ?>
</select>

<!--   <select name="jurusan">
  <option value="">Pilih Jurusan</option>
  <option value="Menjahit">Menjahit</option>
  <option value="Servis Elektronik">Servis Elektronik</option>
  <option value="Servis Motor">Servis Motor</option>
  <option value="Tata Rias">Tata Rias</option>
</select> -->

<select name="tanggall">
  <option value="">Pilih Tahun</option>
  <option value="2019">2021</option>
  <option value="2019">2020</option>
  <option value="2019">2019</option>
  <option value="2018">2018</option>
  <option value="2017">2017</option>
  <option value="2016">2016</option>
  <option value="2016">2015</option>
  <option value="2016">2014</option>
</select>

<tr>
  <td>
    <input class="btn btn-primary" type="submit" name="search" value="Sortir">
  </td>
</tr>

<br>

<!-- <a class="btn btn-primary" href="http://localhost/siks_ahp/dashboard_pendamping.php?page=view_pendamping/tambah_kegiatan">Tambah Kegiatan</a><br> -->





<br>



<table id="example2" border="1" class="table table-bordered table-hover">
  <thead>
  <tr>
    
    <th>No</th>
    <th>ID</th>
    <th>Nomor Induk</th>
    <th>Nama Siswa</th>
    <th>Jurusan</th>
    <th>Nama Pendamping</th>
    <th>Materi Belajar</th>
    <th>Penilaian</th>
    <th>Bulan</th>
    <th>Aksi</th>

  </tr>
  </thead>

  <tbody>
  
    <?php  
    include_once("\insert\config.php");
// $result = mysqli_query($mysqli, "SELECT * FROM tbl_kegiatan ORDER BY id_kegiatan DESC"); \
    
    $result = mysqli_query($mysqli,"SELECT tbl_cs2.nik, tbl_kegiatan.id_kegiatan,tbl_kegiatan.nikk, tbl_kegiatan.nama_siswa,tbl_kegiatan.nama_pendamping,tbl_kegiatan.penilaian,tbl_kegiatan.materi_belajar,tbl_kegiatan.tanggall,tbl_kegiatan.jurusann
FROM tbl_cs2
INNER JOIN tbl_kegiatan
ON tbl_cs2.id=tbl_kegiatan.id_kegiatan  where jurusann = 'Servis Motor'");

    
    $no = "1";
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";     
        echo "<td>".$no++."</td>";
        echo "<td>".$user_data['id_kegiatan']."</td>"; 
        echo "<td>".$user_data['nikk']."</td>";
        echo "<td>".$user_data['nama_siswa']."</td>"; 
        echo "<td>".$user_data['jurusann']."</td>"; 
        echo "<td>".$user_data['nama_pendamping']."</td>"; 
        echo "<td>".$user_data['materi_belajar']."</td>";
        echo "<td>".$user_data['penilaian']."</td>";
        // echo "<td>".date('M',strtotime($user_data['tanggall']))."</td>";
        echo "<td>".$user_data['tanggall']."</td>";

        echo "<td>|| <a href='/siks_ahp/view_pendamping/edit_servismotor.php?id_kegiatan=$user_data[id_kegiatan]'>Edit</a> || <a href='/siks_ahp/view_pendamping/delete_servismotor.php?id_kegiatan=$user_data[id_kegiatan]'>Delete</a></td></tr>";      
    }
    ?>

    <tr>
      <td colspan="3">
        <select name="lt" class="form-control">
          <option value="">Keterangan</option>
          <option value="Lulus">Lulus</option>
          <option value="Tidak Lulus">Tidak Lulus</option>
        </select>
     </td>
  </tr>

  </form>
    
  
  </tbody>
</table><br><br>

<!-- <form action="view_pendamping/cetak_kk.php" method="post">

  <select name="tanggal">
  <option value="">Pilih Tahun</option>
  <option value="2019">2021</option>
  <option value="2019">2020</option>
  <option value="2019">2019</option>
  <option value="2018">2018</option>
  <option value="2017">2017</option>
  <option value="2016">2016</option>
  <option value="2016">2015</option>
  <option value="2016">2014</option>
</select>

  <input class="btn btn-primary" type="submit" name="cetak" value="Cetak">
  

</form> -->

<!-- <a href="view_pendamping\cetak_kk.php" class="btn btn-primary">Cetak</a> -->

</div>


