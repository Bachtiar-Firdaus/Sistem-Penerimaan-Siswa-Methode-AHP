
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style type="text/css">
	tr, td,th{
		padding: 10px;
	}
	.containeredit{
		padding: 20px;
	}
	.modal-dialog{
		width:90%;
		margin-top: 150px;
	}
</style>

<div class="containeredit">

<h1>Upload Surat</h1><br>




<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Upload Surat
</button><br>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Jenis Surat</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="jenis surat">
  </div>
  <div class="form-group">

   <label for="exampleFormControlInput1">Upload File</label>

  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>

  </div>
</form>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Upload</button>
      </div>
    </div>
  </div>
</div>

<!-- akhir modal --><br><br>

<table border="1">
	<tr>
		
		<th>No</th>
		<th>Jenis Surat</th>
		<th>File</th>
		<th>Aksi</th>
	</tr>
	<tr>
		<th>1</th>
		<td>Surat Pernyataan</td>
		<td>.......</td>
		<td>
			<button class="btn btn-danger">Hapus</button>
		</td>
	</tr>
</table><br><br>

</div>