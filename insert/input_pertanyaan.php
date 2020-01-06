
<link href="assetss/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assetss/datatables/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="assetss/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
<?php
// Create database connection using config file
include_once("\insert\config.php");

// Fetch all tbl_cs data from database
$result = mysqli_query($mysqli, "SELECT * FROM tbl_pertanyaan ORDER BY id DESC");
?>

  <div class="row">
    <div class="col-xs-12">
      <div class="box" style="overflow: scroll;">
        <div class="box-header">
          <h class="box-title">Indentifikasi Calon Siswa</h>

        </div>
        <div class="box-header">

        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <style type="text/css">
          tr,td{
            padding: 10px;
          }
          .modal-dialog{
            width: 97%;
        </style>
        <a class="btn btn-primary" href="insert\add_ip.php">Input Pertanyaan</a> 
        <br><br>

        <table border="1">

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

          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Action</th>
          </tr>

    <?php  
    $no = "1";
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";      
        echo "<td>".$no++."</td>";
        echo "<td>".$user_data['nama_cs']."</td>";
        echo "<td><a href='/siks_ahp/insert/edit_ip.php?id=$user_data[id]'>Cetak</a>";        
    }
    ?>
        </table>
          </div> <br />
          
        </div>
        <!-- /.box-body -->
      </div>

    </div>
    <!-- /.col -->
  </div>

