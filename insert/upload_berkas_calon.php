<div class="content-wrapper" style="padding:10px;">
	<div class="row">
		<div class="col-xs-12">
            <div class="box">
				<div class="box-header">
					<h3 class="box-title">Berkas Calon Siswa</h3>
				</div>
				<div class="box-header">
					<div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                          Pilih nama data calon siswa<span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a href="#">Daus</a></li>
                          <li><a href="#">Dayat</a></li>
                          <li><a href="#">Ega</a></li>
                        </ul>
                      </div>
                      
					<input type="button" class="btn btn-primary" value="Tambah" data-toggle="modal" data-target="#modal-default"
						name="" id="">
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example2" class="table table-bordered table-hover">
						<thead>
							<tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
								<th>File Berkas Ijazah</th>
								<th>File Berkas KTP</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
                                <td>Ega Liyando</td>
                                <td>........../...........</td>
                                <td>........../...........</td>
                                <td><input type="button" class="btn btn-success"
										value="Edit" name="" id=""></td>
								
							</tr>
							<tr>
								<td>2</td>
                                <td>Daus </td>
                                <td>........../...........</td>
                                <td>........../...........</td>
                                <td><input type="button" class="btn btn-success"
										value="Edit" name="" id=""></td>
								
							</tr>
							<tr>
								<td>3</td>
                                <td>Rhmat Hidayatullah</td>
                                <td>........../...........</td>
                                <td>........../...........</td>
								<td><input type="button" class="btn btn-success"
										value="Edit" name="" id=""></td>
							</tr>
						</tbody>
					</table>
				</div>
		</div>
	</div>
</div>
</div>

<div class="modal fade" id="modal-default">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Tambah Data Calon Siswa</h4>
			</div>
			<div class="modal-body">
            <div class="form-group">
					<label for="exampleInputFile">Upload Berkas Ijazah</label>
					<input type="file" id="exampleInputFile">
					<p class="help-block">Pilih Berkas</p>
				</div>

				<div class="form-group">
					<label for="exampleInputFile">Upload Berkas Ktp</label>
					<input type="file" id="exampleInputFile">
					<p class="help-block">Pilih Berkas</p>
				</div>
				
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
