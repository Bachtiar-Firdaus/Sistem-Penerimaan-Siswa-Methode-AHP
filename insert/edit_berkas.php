<?php

$databaseHost = 'localhost';
$databaseName = 'codegoo_ahp';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 


$id_upload = $_GET['id_upload'];
$query = "SELECT * FROM tbl_upload_cs WHERE id_upload='".$id_upload."'";
$sql = mysqli_query($mysqli, $query);
$data = mysqli_fetch_array($sql);


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Upload berkas ktp ijazah</title>
  </head>
  <body>

  	<div class="container" style="margin-top: 30px;">

  		<h2>Upload berkas ijazah dan KTP</h2>
  		<hr>

<form method="post" action="proses_upload2.php?id_upload=<?php echo $id_upload; ?>" class="was-validated" enctype="multipart/form-data">
  
      <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input type="text" name="nama_cs" class="form-control" value="<?php echo $data['nama_cs']; ?>">
      </div>
      <br>

      <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
  
      <div class="custom-file">
        <input type="file" name="fupload" class="custom-file-input" id="validatedCustomFile" required>
        <label class="custom-file-label" for="validatedCustomFile">Upload file berkas ...</label>
        <div class="invalid-feedback">Example invalid custom file feedback</div>
      </div><br><br>

      <input class="btn btn-primary" type="submit" value="Update">

</form>

    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

