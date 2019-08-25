<?php
// Create database connection using config file
include_once("\insert\config.php");

// Fetch all tbl_cs data from database
$result = mysqli_query($mysqli, "SELECT * FROM tbl_cs ORDER BY id DESC");
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

<div class="containeredit">

<h1>Input kegiatan siswa</h1><br>

<select name = "nama_cs" >
<option >pilih siswa</option>
<?php while($user_data = mysqli_fetch_array($result)) {  ?>
<option><?php  echo "<td>".$user_data['nama'];?></option>
<?php     }
  ?>
</select>

<html>
<head>  
    <title>Tambah kegiatan</title>
</head>

<body>
    <!-- <a href="http://localhost/program_april/dashboard.php?page=insert/calon_siswa">Home</a> -->
    <br/><br/>

    <form name="update_user" method="post" action="edit_kk.php">
            <div class="form-group">
    <label for="exampleFormControlInput1">Laporan Mental</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="jenis surat" name="lm" value="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Laporan Sosial</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="jenis surat" name="ls" value="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Laporan Keterampilan</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="jenis surat" name="lk" value="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Tanggal</label>
    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="jenis surat" name="tanggal" value="">
  </div>

            <tr>
                <!-- <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td> -->
                <td><input type="submit" name="tambah" value="tambah"></td>
            </tr>
  
    </form>
</body>
</html>

<!-- 

<table id="example2" border="1" class="table table-bordered table-hover">
	<thead>
	<tr>
		
		<th>No</th>
		<th>Nama</th>
		<th>Jurusan</th>
		<th>Kabupaten</th>
		<th>Aksi</th>
	</tr>

     </thead>
<tbody>
    <?php  
    $no = "1";
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";     
        echo "<td>".$no++."</td>";
        echo "<td>".$user_data['nama']."</td>"; 
        echo "<td>".$user_data['jurusan']."</td>"; 
        echo "<td>".$user_data['alko']."</td>";  
        echo "<td><a href='/program_april/view_ps_uptd/edit_ds.php?id=$user_data[id]'>Edit</a> | <a href='/program_april/view_ps_uptd/delete_ds.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </tbody>
</table><br><br>

<a href="view_ps_uptd\cetak_ds.php" class="btn btn-primary">Cetak</a>

</div>


 -->