<link href="assetss/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assetss/datatables/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="assetss/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">






  <div class="row">
    <div class="col-xs-12">
      <div class="box" style="overflow: scroll;">
        <div class="box-header">
          <h class="box-title">IDENTIFIKASI CALON SISWA</h>

        </div>
        <div class="box-header">

        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <section class="container-fluid" style="overflow-y: auto; overflow-x: scroll;"><div class="dropdown">
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"></i>Tambah</button>
        <button class="btn btn-default" id="btnn2" onclick="reload_table()"><iclass="glyphicon glyphicon-refresh"></i> REFRESH</button>
          </div> <br />
          <table id="table" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat tanggal lahir</th>
                <th>Agama</th>
                <th>Suku</th>
                <th>Bahasa sehari hari</th>
                <th>ALAMAT DESA/KEL</th>
                <th>ALAMAT KECAMATAN </th>
                <th>ALAMAT KABUPATEN</th>
                <th>Pendidikan Terakhir</th>
                <th>..</th>
                <th>..</th>
                <th>Alasan Tidak lanjut sekolah</th>
                <th>Kebiasaan merokok</th>
                <th>Mengkonsumsi Narkoba</th>
                <th>Pernah Bekerja</th>
                <th>Bila</th>
                <th>pernah</th>
                <th>bekerja</th>
                <th>dimana</th>
                <th>gajih/perbulan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>

    </div>
    <!-- /.col -->
  </div>


<script src="assetss/jquery/jquery-2.1.4.min.js"></script>
<script src="assetss/bootstrap/js/bootstrap.min.js"></script>
<script src="assetss/datatables/js/jquery.dataTables.min.js"></script>
<script src="assetss/datatables/js/dataTables.bootstrap.min.js"></script>
<script src="assetss/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>







<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">IDENTIFIKASI CALON SISWA</h4>
      </div>
      <div class="modal-body">
    <form action="#" id="form">
        <style type="text/css">
          tr,td{
            padding: 10px;
          }
          .modal-dialog{
            width: 68%;
        </style>

        <!-- no 1 -->
        <!-- no 1 -->
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
      <td colspan="3">:  <input type="text" name="desa"></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: end;">Kec</td>
      <td colspan="3">:  <input type="text" name="kecamatan"></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: end;">Kab/kota</td>
      <td colspan="3">:  <input type="text" name="kabupaten"></td>
    </tr>
    
    
    <tr>
      <td>8</td>
      <td>lulus /tidak lulus, sampai kelas</td>
      <td>:   <input type="text" name="pt_k3"></td>
    </tr>

    <tr>
      <td>9</td>
      <td>Pendidikan Terakhir</td>
      <td colspan="3">: <input type="text" name="pt_k1"></td>
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
<select class="form-control" id="sel1" name="keadaan_lingkungan1">
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
<select class="form-control" id="sel1" name="keadaan_lingkungan1">
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
<select class="form-control" id="sel1" name="keadaan_lingkungan1">
<option value="ya">ya</option>
<option value="tidak">tidak</option>
</select>
</div></td>
    </tr>

    <tr>
      <td>13</td>
      <td>Bila pernah, bekerja dimana</td>
      <td colspan="3">: <input type="text" name="bpbd_k1"></td>
    </tr>

    



    <tr>
      <td>14</td>
      <td>Gajih / Perbulan</td>
      <td colspan="3">: <input type="text" name="bpbd_k3"></td>
    </tr>


  </table>
<!-- akhir no 1 -->
<!-- akhir no 1 -->
      </div>

        </form>             
        <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary" style="width: 100px; background-color: #F5613B">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" style="width: 100px; background-color: #058C97">Batal</button>
        </div>        
      
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>


