
<link href="assetss/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assetss/datatables/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="assetss/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
<?php
// Create database connection using config file

/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseName = 'codegoo_ahp';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 




// Fetch all tbl_cs data from database
$query = "SELECT * FROM tbl_upload_cs";
$sql = mysqli_query($mysqli, $query);




?>

  <div class="row">
    <div class="col-xs-12">
      <div class="box" style="overflow: scroll;">
        <div class="box-header">
          <h class="box-title">Form berkas KTP & Ijazah</h>

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
        <a class="btn btn-primary" href="insert\add_berkas.php">Upload Berkas Ijazah & KTP</a> 
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
            <th>FIle Berkas Izajasah & KTP</th>
            <th>Aksi</th>
          </tr>

    <?php  
    $no = "1";
    while($data = mysqli_fetch_array($sql)) {         
        echo "<tr>";      
        echo "<td>".$no++."</td>";
        echo "<td>".$data['nama_cs']."</td>";
        echo "<td>".$data['nama_file']."</td>";
         echo "<td><a href='/siks_ahp/insert/edit_berkas.php?id_upload=".$data['id_upload']."'>Edit</a> | <a href='/siks_ahp/insert/delete_berkas.php?id_upload=".$data['id_upload']."'>Delete</a> | <a href='/siks_ahp/insert/download.php?file=".$data['nama_file']."'>Download</a></td></tr>";


        // echo "<td></td>";
        // echo "<td><a href='/siks_ahp/insert/edit_ip.php?id=$user_data[id]'>Cetak</a>";    

    

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



