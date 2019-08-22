<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

 -->

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

<h1>Data Siswa</h1><br>



<table border="1">
	<tr>
		
		<th>No</th>
		<th>Nama</th>
		<th>Jurusan</th>
		<th>Kabupaten</th>
		<th>Keterangan</th>
		<th>Aksi</th>
	</tr>
	<tr>
		<th>1</th>
		<td>Ega Liyando</td>
		<td>Menjahit</td>
		<td>Kabupaten Waykanan</td>
		<td></td>
		<td>
      <input type="button" class="btn btn-primary" value="Edit" data-toggle="modal" data-target="#modal-edit"
            name="" id="">
			<!-- <button class="btn btn-primary">Edit</button> -->
			<button class="btn btn-danger">Hapus</button>
		</td>
	</tr>
</table><br><br>

<button class="btn btn-primary">Cetak</button>

</div>




<!-- Modal -->
<div class="modal fade" id="modal-edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Melengkapi data siswa</h4>
      </div>
      <div class="modal-body" style="overflow: scroll;">

        

         <form>
            <div class="form-group">
    <label for="exampleFormControlInput1">Nama</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama siswa">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">No kk</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama siswa">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Nik</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama siswa">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Jurusan</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama siswa">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Asrama</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama siswa">
  </div>

          </form>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!-- akhir modal --><br><br>
