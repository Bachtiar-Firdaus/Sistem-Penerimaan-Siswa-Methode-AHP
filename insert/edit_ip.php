<?php
include_once("config.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM tbl_pertanyaan WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{       $nama_cs = $user_data['nama_cs']; 
        $nama_a = $user_data['nama_a']; 
        $nama_i = $user_data['nama_i']; 
        $umur_a = $user_data['umur_a']; 
        $umur_a_t = $user_data['umur_a_t']; 
        $umur_i = $user_data['umur_i']; 
        $umur_i_t = $user_data['umur_i_t']; 
        $agama_a = $user_data['agama_a']; 
        $agama_i = $user_data['agama_i']; 
        $alamat_a_d = $user_data['alamat_a_d']; 
        $alamat_a_kec = $user_data['alamat_a_kec']; 
        $alamat_a_kab = $user_data['alamat_a_kab']; 
        $alamat_i_d = $user_data['alamat_i_d']; 
        $alamat_i_kec = $user_data['alamat_i_kec']; 
        $alamat_i_kab = $user_data['alamat_i_kab']; 
        $pekerjaan_a = $user_data['pekerjaan_a']; 
        $pekerjaan_i = $user_data['pekerjaan_i']; 
        $jumlah_s = $user_data['jumlah_s']; 
        $keadaan_lingkungan1 = $user_data['keadaan_lingkungan1']; 
        $keadaan_lingkungan2 = $user_data['keadaan_lingkungan2']; 
        $keadaan_lingkungan3 = $user_data['keadaan_lingkungan3']; 
        $keadaan_lingkungan4 = $user_data['keadaan_lingkungan4']; 
        $keadaan_lingkungan5a = $user_data['keadaan_lingkungan5a']; 
        $keadaan_lingkungan5b = $user_data['keadaan_lingkungan5b']; 
        $keadaan_lingkungan5c = $user_data['keadaan_lingkungan5c']; 
        $keadaan_lingkungan6 = $user_data['keadaan_lingkungan6']; 
        $motivasi_1 = $user_data['motivasi_1']; 
        $motivasi_2 = $user_data['motivasi_2']; 
        $motivasi_3 = $user_data['motivasi_3']; 
        $motivasi_4 = $user_data['motivasi_4']; 
        $motivasi_5 = $user_data['motivasi_5']; 
        $motivasi_6 = $user_data['motivasi_6']; 
        $motivasi_7 = $user_data['motivasi_7']; 
        $penggunaan_1 = $user_data['penggunaan_1']; 
        $penggunaan_2 = $user_data['penggunaan_2']; 
        $penggunaan_3 = $user_data['penggunaan_3']; 
        $penggunaan_4 = $user_data['penggunaan_4']; 
        $penggunaan_5 = $user_data['penggunaan_5']; 
        $penggunaan_6 = $user_data['penggunaan_6']; 
        $evaluasi_1 = $user_data['evaluasi_1']; 
        $evaluasi_2 = $user_data['evaluasi_2']; 
        $evaluasi_3 = $user_data['evaluasi_3']; 
        $evaluasi_4 = $user_data['evaluasi_4']; 
        $evaluasi_5 = $user_data['evaluasi_5']; 

}
?>
<html>
<head>  
    <title>Cetak Pertanyaan</title>
</head>

<body>
    <a href="http://localhost/program_april/dashboard.php?page=insert/input_pertanyaan">back</a>
    <br/><br/>
        <table border="0">



<select name = "nama_cs" >
<option >nama siswa : <?php echo $nama_cs;?></option>
</select>

      <table border="1">
    <tr>
      <td rowspan="12">2</td>
      <td colspan="9">II. LATAR BELAKANG KELUARGA DAN SOSIAL EKONOMI.</td>


    </tr>


    <tr>
      <td>1</td>
      <td>Nama orang tua</td>
      <td>Ayah</td>
      <td><?php echo $nama_a;?></td>
      <td>Ibu</td>
      <td><?php echo $nama_i;?></td>
    </tr>

    <tr>
      <td>2</td>
      <td>Umur</td>
      <td>Ayah</td>
      <td><?php echo $umur_a;?></td>
      <td>Tahun</td>
      <td><?php echo $umur_a_t;?></td>
      <td>Ibu</td>
      <td><?php echo $umur_i;?></td>
      <td>Tahun</td>
      <td><?php echo $umur_i_t;?></td>
    </tr>

    <tr>
      <td>3</td>
      <td>Agama</td>
      <td>Ayah</td>
      <td> <?php echo $agama_a;?></td>
      <td>Ibu</td>
      <td> <?php echo $agama_i;?></td>
    </tr>

    <tr>
      <td>4</td>
      <td>Alamat</td>
      <td>Ayah</td>
      <td>Desa/kelurahan</td>
      <td><?php echo $alamat_a_d;?></td>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td>Kec</td>
      <td><?php echo $alamat_a_kec;?></td>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td>Kab/kota</td>
      <td><?php echo $alamat_a_kab;?></td>
      <td></td>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td>Ibu</td>
      <td>Desa/kelurahan</td>
      <td><?php echo $alamat_i_d;?></td>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td>Kec</td>
      <td><?php echo $alamat_i_kec;?></td>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td>Kab/kota</td>
      <td><?php echo $alamat_i_kab;?></td>
      <td></td>
    </tr>

    <tr>
      <td>5</td>
      <td>Pekerjaan</td>
      <td>Ayah</td>
      <td><?php echo $pekerjaan_a;?></td>
      <td>Ibu</td>
      <td><?php echo $pekerjaan_i;?></td>
    </tr>

    <tr>
      <td>6</td>
      <td>Jumlah saudara</td>
      <td><?php echo $jumlah_s;?></td>
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
<option><?php echo $keadaan_lingkungan1; ?></option>
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
<option><?php echo $keadaan_lingkungan2; ?></option>
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
<option><?php echo $keadaan_lingkungan3; ?></option>
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
<option><?php echo $keadaan_lingkungan4; ?></option>
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
<td><?php echo $keadaan_lingkungan5a;?></td>
<td>buah</td>
</tr>
<tr>
<td>sepeda</td>
<td><?php echo $keadaan_lingkungan5b;?></td>
<td>buah</td>
</tr>
<tr>
<td>mobil</td>
<td><?php echo $keadaan_lingkungan5c;?></td>
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
<option><?php echo $keadaan_lingkungan6; ?></option>
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
<option><?php echo $motivasi_1;?></option>
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
<option><?php echo $motivasi_2;?></option>
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
<option><?php echo $motivasi_3;?></option>
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
<option><?php echo $motivasi_4;?></option>
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
<option><?php echo $motivasi_5;?></option>
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
<option><?php echo $motivasi_6;?></option>
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
<option><?php echo $motivasi_7;?></option>
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

<option><?php echo $penggunaan_1;?></option>
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
<option><?php echo $penggunaan_2;?></option>
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
<option><?php echo $penggunaan_3;?></option>
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
<option><?php echo $penggunaan_4;?></option>
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
<option><?php echo $penggunaan_5;?></option>
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
<option><?php echo $penggunaan_6;?></option>
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
    <td colspan="3"><?php echo $evaluasi_1;?></td>
  </tr>
  <tr>
    <td>2</td>
    <td colspan="6">Apa yang akan saudara lakukan apabila jurusan yang diikuti ternyata tidak sesuai dengan</td>
  </tr>
  <tr>
    <td></td>
    <td>bakat dan kemampuan saudara?</td>
    <td colspan="3"><?php echo $evaluasi_2;?></td>
  </tr>
  <tr>
    <td>3</td>
    <td colspan="6">Sebutkan apa yang menjadi harapan saudara setelah menyelesaikan proses bimbingan</td>
  </tr>
  <tr>
    <td></td>
    <td>dan pelatihan keterampilan UPTD PSBR ?</td>
    <td colspan="3"><?php echo $evaluasi_3;?></td>
  </tr>
  <tr>
    <td>4</td>
    <td colspan="6">Apakah saudara masih memerlukan bimbingan dan pembinaan lanjut dari PSBR setelah</td>
  </tr>
  <tr>
    <td></td>
    <td>kembali ke tempat masing-masing ?</td>
    <td colspan="3"><?php echo $evaluasi_4;?></td>
  </tr>
  <tr>
    <td>5</td>
    <td colspan="6">Apakah saudara bersedia menerima sanksi apabila selama mengikuti program di PSBR,</td>
  </tr>
  <tr>
    <td></td>
    <td>melanggar peraturan dan tata tertib ?</td>
    <td colspan="3"><?php echo $evaluasi_5;?></td>
  </tr>











        </table>
</body>
</html>