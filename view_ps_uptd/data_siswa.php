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


<!-- Button trigger modal -->
<input type="button" class="btn btn-primary" value="Tambah siswa" data-toggle="modal" data-target="#modal-default"
            name="" id="">

<!-- Modal -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">IDENTIFIKASI CALON SISWA</h4>
      </div>
      <div class="modal-body" style="overflow: scroll;">

        <style type="text/css">
          tr,td{
            padding: 10px;
          }
          .modal-dialog{
            width: 100%;
        </style>

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
      <td colspan="3">: <input type="text" name=""></td>
    </tr>
    <tr>
      <td>2</td>
      <td>Jenis Kelamin</td>
      <td colspan="3">:  <input type="text" name=""></td>
    </tr>
    <tr>
      <td>3</td>
      <td>Tempat tanggal lahir</td>
      <td colspan="3">:  <input type="text" name=""></td>
    </tr>
    <tr>
      <td>4</td>
      <td>Agama</td>
      <td colspan="3">:  <input type="text" name=""></td>
    </tr>
    <tr>
      <td>5</td>
      <td>Suku</td>
      <td colspan="3">:  <input type="text" name=""></td>
    </tr>
    <tr>
      <td>6</td>
      <td>Bahasa sehari hari</td>
      <td colspan="3">:  <input type="text" name=""></td>
    </tr>
    <tr>
      <td>7</td>
      <td>Alamat Des/Kel</td>
      <td colspan="3">:  <input type="text" name=""></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: end;">Kec</td>
      <td colspan="3">:  <input type="text" name=""></td>
    </tr>
    <tr>
      <td colspan="2" style="text-align: end;">Kab/kota</td>
      <td colspan="3">:  <input type="text" name=""></td>
    </tr>
    
    
    <tr>
      <td>8</td>
      <td>lulus /tidak lulus, sampai kelas</td>
      <td>:   <input type="text" name="pt_k3"></td>
    </tr>

    
    

    <tr>
      <td>9</td>
      <td>Pendidikan Terakhir</td>
      <td colspan="3">: <input type="text" name=""></td>
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
      <td></td>
      <td>Bila pernah, bekerja dimana</td>
      <td colspan="3">: <input type="text" name=""></td>
    </tr>

    <tr>
      <td></td>
      <td>Gajih / Perbulan</td>
      <td colspan="3">: <input type="text" name=""></td>
    </tr>
     <tr>
      <td>13</td>
      <td>no kk</td>
      <td colspan="3">: <input type="text" name=""></td>
    </tr>
     <tr>
      <td>14</td>
      <td>nik</td>
      <td colspan="3">: <input type="text" name=""></td>
    </tr>
     <tr>
      <td>15</td>
      <td>jurusan</td>
      <td colspan="3">: <input type="text" name=""></td>
    </tr>
     <tr>
      <td>16</td>
      <td>asrama</td>
      <td colspan="3">: <input type="text" name=""></td>
    </tr>
  </table>
<!-- akhir no 1 -->
        <!-- no 2 -->
  <table border="1">
    <tr>
      <td rowspan="12">2</td>
      <td colspan="9">II. LATAR BELAKANG KELUARGA DAN SOSIAL EKONOMI.</td>
    </tr>

    <tr>
      <td>1</td>
      <td>Nama orang tua</td>
      <td>Ayah</td>
      <td><input type="text" name=""></td>
      <td>Ibu</td>
      <td><input type="text" name=""></td>
    </tr>

    <tr>
      <td>2</td>
      <td>Umur</td>
      <td>Ayah</td>
      <td><input type="text" name=""></td>
      <td>Tahun</td>
      <td><input type="text" name=""></td>
      <td>Ibu</td>
      <td><input type="text" name=""></td>
      <td>Tahun</td>
    </tr>

    <tr>
      <td>3</td>
      <td>Agama</td>
      <td>Ayah</td>
      <td> <input type="text" name=""></td>
      <td>Ibu</td>
      <td> <input type="text" name=""></td>
    </tr>

    <tr>
      <td>4</td>
      <td>Alamat</td>
      <td>Ayah</td>
      <td>Desa/kelurahan</td>
      <td><input type="text" name=""></td>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td>Kec</td>
      <td><input type="text" name=""></td>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td>Kab/kota</td>
      <td></td>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td>Ibu</td>
      <td>Desa/kelurahan</td>
      <td><input type="text" name=""></td>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td>Kec</td>
      <td><input type="text" name=""></td>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td>Kab/kota</td>
      <td></td>
    </tr>

    <tr>
      <td>5</td>
      <td>Pekerjaan</td>
      <td>Ayah</td>
      <td><input type="text" name=""></td>
      <td>Ibu</td>
      <td><input type="text" name=""></td>
    </tr>

    <tr>
      <td>6</td>
      <td>Jumlah saudara</td>
      <td><input type="text" name=""></td>
      <td>orang</td>
    </tr>
  </table>
<!-- akhr no 2 -->

<!-- no 3 -->
<table border="1">
  <tr>
    <td rowspan="18">3</td>
    <td colspan="10">KEADAAN LINGKUNGAN</td>
  </tr>
   <tr>
    <td>1</td>
    <td colspan="10">Lingkungan tempat tinggal saudara (pedesaan, perkotaan, perkebunan, pantai):</td>
  </tr>
  <tr>
    <td></td>
    <td>



<div class="form-group">
<label for="sel1">pilih jawaban</label>
<select class="form-control" id="sel1" name="keadaan_lingkungan1">
<option value="a. padat">a. padat</option>
<option value="b. kurang padat">b. kurang padat</option>
<option value="c. berjauhan">c. berjauhan</option>
</select>
</div>







</td>
</tr>
<tr>
<td>2</td>
<td colspan="10">Kondisi rumah tempat tinggal:</td>
</tr>

<tr>
<td></td>
<td>


<!--  -->
<div class="form-group">
<label for="sel1">pilih jawaban</label>
<select class="form-control" id="sel1" name="keadaan_lingkungan2">
<option value="a. Permanen, bangunan tembok, lantai keramik">a. Permanen, bangunan tembok, lantai keramik</option>
<option value="b. Semi permanen, bangunan setengah tembok, lantai semen">b. Semi permanen, bangunan setengah tembok, lantai semen</option>
<option value="c. Bangunan papan / kayu, lantai tanah">c. Bangunan papan / kayu, lantai tanah</option>
</select>
</div>
<!--  -->





</td>

<tr>
<td>3</td>
<td colspan="10">Fasilitas penerangan:</td>
</tr>
<tr>
<td></td>
<td>

<!--  -->
<div class="form-group">
<label for="sel1">pilih jawaban</label>
<select class="form-control" id="sel1" name="keadaan_lingkungan3">
<option value="a. listrik umum">a. listrik umum</option>
<option value="b. listrik tetangga">b. listrik tetangga</option>
<option value="c. lampu minyak">c. lampu minyak</option>
</select>
</div>
<!--  -->
</td>
<tr>
<td>4</td>
<td colspan="10">Fasililtas Air :</td>
</tr>
<tr>
<td></td>
<td>
<!--  -->
<div class="form-group">
<label for="sel1">pilih jawaban</label>
<select class="form-control" id="sel1" name="keadaan_lingkungan4">
<option value="a. ledeng">a. ledeng</option>
<option value="b. sumur bor">b. sumur bor</option>
<option value="c. air sungai">c. air sungai</option>
</select>
</div>
<!--  -->
</td>
<tr>
<td>5</td>
<td colspan="10">Kendaraan yang dimiliki keluarga</td>
</tr>

<tr>
<td>motor</td>
<td><input type="text" name="keadaan_lingkungan5a"></td>
<td>buah</td>
</tr>
<tr>
<td>sepeda</td>
<td><input type="text" name="keadaan_lingkungan5b"></td>
<td>buah</td>
</tr>
<tr>
<td>mobil</td>
<td><input type="text" name="keadaan_lingkungan5c"></td>
<td>buah</td>
</tr>

<tr>
<td>6</td>
<td colspan="10">Aktifitas teman sebaya dilingkungan saudara:</td>
</tr>
<tr>
<td></td>
<td>
<!--  -->
<div class="form-group">
<label for="sel1">pilih jawaban</label>
<select class="form-control" id="sel1" name="keadaan_lingkungan6">
<option value="a. bekerja">a. bekerja</option>
<option value="b. sekolah">b. sekolah</option>
<option value="c. pengangguran">c. pengangguran</option>
</select>
</div>
<!--  -->
</td>
</tr>
</table>
<!-- akhor no 3 -->

<!-- no 4 -->
<table border="1">
  <tr>
    <td rowspan="31">4</td>
    <td colspan="12">MOTIVASI UNTUK MENGIKUTI PENDIDIKAN DAN LATIHAN DI UPTD </td>                     
  </tr>

  <tr>
    <td colspan="12">PELAYANAN SOSIAL BINA REMAJA RADIN INTAN LAMPUNG</td>
  </tr>

  

  <tr>
<td>1</td>
<td colspan="10">Apakah saudara ingin belajar untuk memperoleh pengetahuan, keterampilan kerja dan</td>
</tr>
<tr>
<td></td>
<td colspan="10"> berwirausaha melalui sistem pelayanan di PSBR ?</td>
</tr>
<tr>
<td></td>
<td>

<!--  -->
<div class="form-group">
<label for="sel1">pilih jawaban</label>
<select class="form-control" id="sel1" name="motivasi_1">
<option value="a. ya">a. ya</option>
<option value="b. ragu - ragu">b. ragu - ragu</option>
<option value="c. tidak">c. tidak</option>
</select>
</div>
<!--  -->
</td>
</tr>
<tr>
<td>2</td>
<td colspan="10">Apakah saudara bersedia mengikuti program pelatihan sesuai dengan kurikulum dan</td>
</tr>
<tr>
<td></td>
<td colspan="10">waktu yang sudah ditentukan ?</td>
</tr>
<tr>
<td></td>
<td>
<div class="form-group">
<label for="sel1">pilih jawaban</label>
<select class="form-control" id="sel1" name="motivasi_2">
<option value="a. ya">a. ya</option>
<option value="b. ragu - ragu">b. ragu - ragu</option>
<option value="c. tidak">c. tidak</option>
</select>
</div>
</td>
</tr>
<tr>
<td>3</td>
<td colspan="10">Apakah saudara bersedia dan sanggup mentaati peraturan dan tata tertib yang berlaku di</td>
</tr>
<tr>
<td></td>
<td colspan="10">PSBR ?</td>
</tr>
<tr>
<td></td>
<td>
<div class="form-group">
<label for="sel1">pilih jawaban</label>
<select class="form-control" id="sel1" name="motivasi_3">
<option value="a. ya">a. ya</option>
<option value="b. ragu - ragu">b. ragu - ragu</option>
<option value="c. tidak">c. tidak</option>
</select>
</div>
</td>
</tr>
<tr>
<td>4</td>
<td colspan="10">Apakah alasan saudara ingin mengikuti kegiatan bimbingan pelayanan di PSBR ?</td>
</tr>
<tr>
<td></td>
<td>
<!--  -->
<div class="form-group">
<label for="sel1">pilih jawaban</label>
<select class="form-control" id="sel1" name="motivasi_4">
<option value="a. mengisi waktu luang">a. mengisi waktu luang</option>
<option value="b. Semi permanen, bangunan setengah tembok, lantai semen">b. Semi permanen, bangunan setengah tembok, lantai semen</option>
<option value="c. memiliki keterampilan kerja, modal kerja, dan dapat hidup mandiri">c. memiliki keterampilan kerja, modal kerja, dan dapat hidup mandiri</option>
</select>
</div>
<!--  -->
</td>
</tr>
<tr>
<td>5</td>
<td colspan="10">Apakah saudara bersedia dan sanggup mentaati peraturan dan tata tertib yang berlaku di</td>
</tr>
<tr>
<tr>
<td></td>
<td colspan="10">keinginan saudara , apa yang akan saudara lakukan ?</td>
</tr>
<tr>
<td></td>
<td>

<!--  -->
<div class="form-group">
<label for="sel1">pilih jawaban</label>
<select class="form-control" id="sel1" name="motivasi_5">
<option value="a. Memilih dan mengikuti bimbingan keterampilan yang ada">a. Memilih dan mengikuti bimbingan keterampilan yang ada</option>
<option value="b. Mencoba mengikuti sesuai dengan bimbingan pengasuh dan instruktur">b. Mencoba mengikuti sesuai dengan bimbingan pengasuh dan instruktur</option>
<option value="c. Kembali ke kampung dan batal mengikuti pelatihan">c. Kembali ke kampung dan batal mengikuti pelatihan</option>
</select>
</div>
<!--  -->
</td>
</tr>
<tr>
<td>6</td>
<td colspan="10">Apakah yang akan saudara lakukan ketika sudah menyelesaikan proses belajar di PSBR ?</td>
</tr>
<tr>
<td></td>
<td>

<!--  -->
<div class="form-group">
<label for="sel1">pilih jawaban</label>
<select class="form-control" id="sel1" name="motivasi_6">
<option value="a. Kembali ke kampung, berwirausaha sesuai dengan keterampilan yang dimiliki">a. Kembali ke kampung, berwirausaha sesuai dengan keterampilan yang dimiliki</option>
<option value="b. Mengembangkan wirausaha bersama kelompok">b. Mengembangkan wirausaha bersama kelompok</option>
<option value="c. Akan melanjutkan magang di work shop UPTD PSBR Radin Intan">c. Akan melanjutkan magang di work shop UPTD PSBR Radin Intan</option>
</select>
</div>
<!--  -->
</td>
</tr>
<tr>
<td>7</td>
<td colspan="10">Apa yang akan saudara lakukan apabila memperoleh bantuan stimulan kerja setelah</td>
</tr>
<tr>
<tr>
<td></td>
<td colspan="10">mengikuti proses bimbingan keterampilan dan wirausaha di UPTD PSBR ?</td>
</tr>
<tr>
<td></td>
<td>
<!--  -->
<div class="form-group">
<label for="sel1">pilih jawaban</label>
<select class="form-control" id="sel1" name="motivasi_7">
<option value="a. Digunakan sebagai modal dasar untuk berwirausaha dan bekerja sendiri">a. Digunakan sebagai modal dasar untuk berwirausaha dan bekerja sendiri</option>
<option value="b. Digunakan bekerjasama dengan kelompok / dunia usaha">b. Digunakan bekerjasama dengan kelompok / dunia usaha</option>
<option value="c. Diberikan kepada orang lain / dijual">c. Diberikan kepada orang lain / dijual</option>
</select>
</div>
<!--  -->
</td>
</tr>
</table>
<!-- akhir no 4 -->

<!-- no 5 -->
<table border="1">
  <tr>
    <td rowspan="20">5</td>
    <td colspan="9">PENGGALIAN POTENSI SUMBER DAYA KESEJAHTERAAN SOSIAL</td>
  </tr>
  <tr>
<td>1</td>
<td colspan="9">Apakah sumber mata pencaharian penduduk dilokasi asal saudara ?</td>
</tr>
<tr>
<td></td>
<td>
<!--  -->
<div class="form-group">
<label for="sel1">pilih jawaban</label>
<select class="form-control" id="sel1" name="penggunaan_1">

<option value="a. pertanian">a. pertanian</option>
<option value="b. perkebunan">b. perkebunan</option>
<option value="c. perdagangan">c. perdagangan</option>
<option value="d. ganda">d. ganda</option>
</select>
</div>
<!--  -->
</td>
</tr>
<tr>
<td>2</td>
<td colspan="9">Fasilitas umum yang ada dilokasi saudara :</td>
</tr>
<tr>
<td></td>
<td>

<!--  -->
<div class="form-group">
<label for="sel1">pilih jawaban</label>
<select class="form-control" id="sel1" name="penggunaan_2">
<option value="a. sd">a. sd</option>
<option value="b. puskesmas">b. puskesmas</option>
<option value="c. terminal bus">c. terminal bus</option>
<option value="d. smp">d. smp</option>
<option value="e. rumah sakit">e. rumah sakit</option>
<option value="f. sma">f. sma</option>
<option value="g. pasar tradisional">g. pasar tradisional</option>
<option value="h. pasar modern">h. pasar modern</option>
</select>
</div>
<!--  -->
</td>
</tr>

<tr>
<td>3</td>
<td colspan="9">Apakah jasa pelayanan yang ada dilokasi saudara ?</td>
</tr>
<tr>
<td></td>
<td>

<!--  -->
<div class="form-group">
<label for="sel1">pilih jawaban</label>
<select class="form-control" id="sel1" name="penggunaan_3">
<option value="a. bengkel motor">a. bengkel motor</option>
<option value="b. penjahit pakaian">b. penjahit pakaian</option>
<option value="c. service elektronik">c. service elektronik</option>
<option value="d. bengkel mobil">d. bengkel mobil</option>
<option value="e. salon">e. salon</option>
</select>
</div>
<!--  -->
</td>
</tr>

<tr>
<td>4</td>
<td colspan="9">Fasilitas umum yang ada dilokasi saudara :</td>
</tr>
<tr>
<td></td>
<td>
<!--  -->
<div class="form-group">
<label for="sel1">pilih jawaban</label>
<select class="form-control" id="sel1" name="penggunaan_4">
<option value="a. Kemauan / semangat kemandirian">a. Kemauan / semangat kemandirian</option>
<option value="b. keuangan">b. keuangan</option>
<option value="c. lokasi">c. lokasi</option>
<option value="d. konsumen">d. konsumen</option>
</select>
</div>
<!--  -->
</td>
<tr>
<td>5</td>
<td colspan="9">Apa yang menjadi kebutuhan utama saudara untuk memulai usaha ?</td>
</tr>
<tr>
<td></td>
<td>
<!--  -->
<div class="form-group">
<label for="sel1">pilih jawaban</label>
<select class="form-control" id="sel1" name="penggunaan_5">
<option value="a. keterampilan kerja">a. keterampilan kerja</option>
<option value="b. peralatan pokok">b. peralatan pokok</option>
<option value="c. tempat usaha">c. tempat usaha</option>
</select>
</div>
<!--  -->
</td>
</tr>
<tr>
<td>6</td>
<td colspan="9">Siapa yang dianggap memenuhi persyaratan menjadi pendamping usaha saudara ?</td>
</tr>
<tr>
<td></td>
<td>
<!--  -->
<div class="form-group">
<label for="sel1">pilih jawaban</label>
<select class="form-control" id="sel1" name="penggunaan_6">
<option value="a. aparat desa">a. aparat desa</option>
<option value="b. PSM/Orsos/karang taruna dll">b. PSM/Orsos/karang taruna dll</option>
<option value="c. orang tua">c. orang tua</option>
</select>
</div>
<!--  -->
</td>
</tr>
</table>
<!-- akhir no 5 -->

<!-- no 6 -->
<table border="1">
  <tr>
    <td rowspan="18">6</td>
    <td colspan="7">Evaluasi</td>
  </tr>
  <tr>
    <td>1</td>
    <td colspan="6">Apakah saudara cukup jelas tentang maksud dan tujuan anda mengisi formulir seleksi</td>
  </tr>
  <tr>
    <td></td>
    <td>siswa-siswi UPTD PSBR ?</td>
    <td colspan="3"><input type="text" name=""></td>
  </tr>
  <tr>
    <td>2</td>
    <td colspan="6">Apa yang akan saudara lakukan apabila jurusan yang diikuti ternyata tidak sesuai dengan</td>
  </tr>
  <tr>
    <td></td>
    <td>bakat dan kemampuan saudara?</td>
    <td colspan="3"><input type="text" name=""></td>
  </tr>
  <tr>
    <td>3</td>
    <td colspan="6">Sebutkan apa yang menjadi harapan saudara setelah menyelesaikan proses bimbingan</td>
  </tr>
  <tr>
    <td></td>
    <td>dan pelatihan keterampilan UPTD PSBR ?</td>
    <td colspan="3"><input type="text" name=""></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="6"><input type="text" name=""></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="6"><input type="text" name=""></td>
  </tr>
  <tr>
    <td>4</td>
    <td colspan="6">Apakah saudara masih memerlukan bimbingan dan pembinaan lanjut dari PSBR setelah</td>
  </tr>
  <tr>
    <td></td>
    <td>kembali ke tempat masing-masing ?</td>
    <td colspan="3"><input type="text" name=""></td>
  </tr>
  <tr>
    <td>5</td>
    <td colspan="6">Apakah saudara bersedia menerima sanksi apabila selama mengikuti program di PSBR,</td>
  </tr>
  <tr>
    <td></td>
    <td>melanggar peraturan dan tata tertib ?</td>
    <td colspan="3"><input type="text" name=""></td>
  </tr>
</table>
<!-- akhir no 6 -->
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
